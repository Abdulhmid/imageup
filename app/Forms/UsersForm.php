<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class UsersForm extends Form
{
    public function buildForm()
    {
      $this
    		->add('username','text')
        ->add('fullname','text')
    		->add('email','text')
    		->add('password','password')
    		->add('password_confirmation','password')
    		->add('active','choice',[
      			'choices' 		=> [1 => 'Active', 0 => 'Not Active'],
      			'label'			=> "Status",
      			'expanded' 		=> true,
                  'multiple'      => false,
            		'choice_options' => [
              		'wrapper' => [
              			'class' => 'choice-wrapper'
              		]
      		 	     ]
	        ])
          ->add('group_id', 'select', [
               'empty_value' => '- Pilih Groups -',
               'choices' => \App\Models\Groups::lists('group_name','group_id')->toArray(),
               'label' => 'Group'
           ])
    		->add('photo','file',[
                'attr' => [
                    'id' => 'file',
                    'onchange' => 'readUrl(this)'
                ]
            ])
            ->add('upload','button',[
                'label' => '<i class="fa fa-upload"></i> Browse',
                'attr' => [
                    'class' => 'form-control btn bg-gray',
                    'onclick' => 'chooseFile()'
                ]
            ]);
    }
}
