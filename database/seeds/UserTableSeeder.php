<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use App\Role_user;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'    => '1',
            'name'    => 'Administrador del Sistema',
            'email'    => 'edison.carrizo.j@gmail.com',
            'password' => bcrypt('123456')
            //'id_persona' => 1
        ]);

        User::create([
            'id'    => '2',
            'name'    => 'Tia 1',
            'email'    => 'tia1@jardines.cl',
            'password' => bcrypt('123456')
            //'id_persona' => 2
        ]);
        User::create([
            'id'    => '3',
            'name'    => 'Tia 2',
            'email'    => 'tia2@jardines.cl',
            'password' => bcrypt('123456')
            //'id_persona' => 3
        ]);
        User::create([
            'id'    => '4',
            'name'    => 'Tia 3',
            'email'    => 'tia3@jardines.cl',
            'password' => bcrypt('123456')
            //'id_persona' => 4
        ]);

        Role::create([
        	'name' 		=> 'Admin',
        	'slug' 		=> 'admin',
        	'special' 	=> 'all-access'
        ]);

        Role_user::create([
            'role_id'    => '1',
            'user_id'    => '1'
        ]);


    }
}
