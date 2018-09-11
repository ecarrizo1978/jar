<?php

use Illuminate\Database\Seeder;
use App\Regions;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Regions::create([
    		'region_id' => '1',
    		'region_nombre' => 'Arica y Parinacota',
    		'region_ordinal' => 'XV']);

    	Regions::create([
    		'region_id' => '2',
    		'region_nombre' => 'Tarapacá',
    		'region_ordinal' => 'I']);

    	Regions::create([
    		'region_id' => '3',
    		'region_nombre' => 'Antofagasta',
    		'region_ordinal' => 'II']);

    	Regions::create([
    		'region_id' => '4',
    		'region_nombre' => 'Atacama',
    		'region_ordinal' => 'III']);

    	Regions::create([
    		'region_id' => '5',
    		'region_nombre' => 'Coquimbo',
    		'region_ordinal' => 'IV']);

    	Regions::create([
    		'region_id' => '6',
    		'region_nombre' => 'Valparaiso',
    		'region_ordinal' => 'V']);

    	Regions::create([
    		'region_id' => '7',
    		'region_nombre' => 'Metropolitana de Santiago',
    		'region_ordinal' => 'RM']);

    	Regions::create([
    		'region_id' => '8',
    		'region_nombre' => 'Libertador General Bernardo OHiggins',
    		'region_ordinal' => 'VI']);

    	Regions::create([
    		'region_id' => '9',
    		'region_nombre' => 'Maule',
    		'region_ordinal' => 'VII']);

    	Regions::create([
    		'region_id' => '10',
    		'region_nombre' => 'Biobío',
    		'region_ordinal' => 'VIII']);

    	Regions::create([
    		'region_id' => '11',
    		'region_nombre' => 'La Araucanía',
    		'region_ordinal' => 'IX']);

    	Regions::create([
    		'region_id' => '12',
    		'region_nombre' => 'Los Ríos',
    		'region_ordinal' => 'XIV']);

    	Regions::create([
    		'region_id' => '13',
    		'region_nombre' => 'Los Lagos',
    		'region_ordinal' => 'X']);

    	Regions::create([
    		'region_id' => '14',
    		'region_nombre' => 'Aisén del General Carlos Ibáñez del Campo',
    		'region_ordinal' => 'XI']);

    	Regions::create([
    		'region_id' => '15',
    		'region_nombre' => 'Magallanes y de la Antártica Chilena',
    		'region_ordinal' => 'XII']);
    }
}
