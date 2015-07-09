<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('users')->insert(array (
          'name'  => 'cesar',
          'email' => 'cesar@utem.cl',
          'password' => \Hash::make('plumosa'),
          'created_at' => '2015-07-09',
          'updated_at' => '2015-07-09'
	 	));
    }

}