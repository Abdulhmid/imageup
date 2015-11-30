<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('groups')->delete();
      \DB::table('groups')->insert([
    			[ 'group_name'=>'admin','description'=>'superadmin','created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
    		]);

      \DB::table('users')->delete();
      \DB::table('users')->insert([
  			'username'=>"superadmin",
        'fullname' => "SUoer Admin",
  			'email'=>'admin@image.me',
  			'password'=>bcrypt('12345'),
  			'phone'=>"085640111222",
  			'photo'=>"",
  			'group_id'=>NULL,
  			'remember_token'=>NULL,
  			'active'=> 1,
  			'last_login'=>NULL,
  			'created_by'=>'machine',
  			'created_at' => \Carbon\Carbon::now(),
  			'updated_at' => \Carbon\Carbon::now()

  			]);
    }
}
