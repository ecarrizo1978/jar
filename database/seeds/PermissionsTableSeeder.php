<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Usuarios
        Permission::create([
        	'name' 			=> 'Navegar Usuario',
        	'slug' 			=> 'users.index',
        	'description' 	=> 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'ver detalle de Usuario',
        	'slug' 			=> 'users.show',
        	'description' 	=> 'ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Edición de Usuario',
        	'slug' 			=> 'users.edit',
        	'description' 	=> 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Eliminar Usuario',
        	'slug' 			=> 'users.destroy',
        	'description' 	=> 'Eliminar cualquier usuario del sistema',
        ]);

    	//Roles
        Permission::create([
        	'name' 			=> 'Navegar roles',
        	'slug' 			=> 'roles.index',
        	'description' 	=> 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'ver detalle de rol',
        	'slug' 			=> 'roles.show',
        	'description' 	=> 'ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Edición de rol',
        	'slug' 			=> 'roles.edit',
        	'description' 	=> 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Creación de rol',
        	'slug' 			=> 'roles.create',
        	'description' 	=> 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Eliminar rol',
        	'slug' 			=> 'roles.destroy',
        	'description' 	=> 'Eliminar cualquier rol del sistema',
        ]);

    	//Cargos
        Permission::create([
        	'name' 			=> 'Navegar cargos',
        	'slug' 			=> 'cargos.index',
        	'description' 	=> 'Lista y navega todos los cargos del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'ver detalle de cargo',
        	'slug' 			=> 'cargos.show',
        	'description' 	=> 'ver en detalle cada cargo del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Edición de cargo',
        	'slug' 			=> 'cargos.edit',
        	'description' 	=> 'Editar cualquier dato de un cargo del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Creación de cargo',
        	'slug' 			=> 'cargos.create',
        	'description' 	=> 'Editar cualquier dato de un cargo del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Eliminar cargo',
        	'slug' 			=> 'cargos.destroy',
        	'description' 	=> 'Eliminar cualquier cargo del sistema',
        ]);

    }
}
