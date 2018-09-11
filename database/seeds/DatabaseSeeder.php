<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(ComunasTableSeeder::class);
    }
}
