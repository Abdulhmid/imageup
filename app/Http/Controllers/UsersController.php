<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Additionals\Datatables\UsersDatatable;
use App\Models as Md;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\UsersForm;
use App\Http\Requests\UsersRequest;

class UsersController extends Controller
{

    protected $model;
  	protected $title = "Admin System";
  	protected $folder = "module.users";
  	protected $url = "/users";
  	protected $form;

  	public function __construct(Md\Users $users)
  	{
      $this->model = $users;
      $this->form = UsersForm::class;
  	}

    public function getIndex()
    {
        return view($this->folder.".index", [
                          'title' => $this->title ]);
    }

    public function getCreate(FormBuilder $formBuilder)
  	{
  		$form = $formBuilder->create($this->form, [
  			'method' => 'POST',
  			'files' => true,
  			'url' => $this->url.'/store'
  		]);

  		return view($this->folder.".form", [
  			'title' => $this->title,
  			'form'	=> $form
  		]);
  	}

    public function postStore(UsersRequest $request=null, $id="")
    {
        $input = $request->except('save_continue','password_confirmation');
        $result = '';

        if( \Input::hasFile('photo'))
            $photo  = (new \ImageUpload($input))->upload();

        if($id == "" ) :

            $input['photo'] = isset($photo) ? $photo : "" ;
            $input['active'] = $input['active'];
            $input['group_id']     = $input['group_id'];
            $input['created_by']    = \Auth::user()->username;
            $input['password']      = bcrypt($input['password']);
            $query = $this->model->create($input);
            $result = $query->id;
        else :
            $input['active'] = $input['active'];
            $input['group_id']     = $input['group_id'];

            if(\Input::hasFile('photo'))
                $input['photo'] = isset($photo) ? $photo : "";
            if(isset($input['password']) && $input['password'] != "")
                $input['password'] = bcrypt($input['password']);

            $this->model->find($id)->update($input);
            $result = $id;
        endif;

        $save_continue = \Input::get('save_continue');
        $redirect = empty($save_continue) ? $this->url : $this->url.'/edit/'.$result ;

        return redirect($redirect)->with('message','Admin saved successfully!');
    }

    public function getEdit(FormBuilder $formBuilder=null, $id="")
    {
        if ($id=="" || is_null($formBuilder)) return redirect($this->url);

        $edit = $this->model->find($id);

        $form = $formBuilder->create($this->form,[
            'method' => 'POST',
            'url' => $this->url.'/store/'.$id,
            'model' => $edit
        ]);

        return view($this->folder.'.form', ['title' => $this->title,
                                            'row' => $edit,
                                            'form' => $form,
                                            'breadcrumb' => 'edit-'.$this->url]);
    }

    public  function  getDelete($id ="")
    {
        if($id=="") return redirect($this->url);

        $this->model->find($id)->delete();

        return redirect($this->url)->with('message','Data Berhasil Disimpan!');

    }

    public function getData(){
      return (new UsersDatatable($this->model))->make();
    }

}
