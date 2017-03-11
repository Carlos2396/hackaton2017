<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'lat'=>19.020638,
            'lng'=>-98.243254,
            'name'=>'Casa',
            'address'=>'Calle 23 #1552',
            'user_id'=>1,
        ]);

        DB::table('locations')->insert([
            'lat'=>19.020638,
            'lng'=>-98.300500,
            'name'=>'Trabajo',
            'address'=>'Av. Remota #52',
            'user_id'=>1,
        ]);

        DB::table('locations')->insert([
            'lat'=>19.020638,
            'lng'=>-98.3000200,
            'name'=>'Pizzas',
            'address'=>'Blvd. Flores #1542',
            'user_id'=>1,
        ]);

        DB::table('locations')->insert([
            'lat'=>19.500000,
            'lng'=>-98.300100,
            'name'=>'Floreria',
            'address'=>'Calle Pesto #33',
            'user_id'=>1,
        ]);

        DB::table('locations')->insert([
            'lat'=>19.022364,
            'lng'=>-95.300000,
            'name'=>'Arkham asylum for the criminally insane',
            'address'=>'Av. Independencia #1255',
            'user_id'=>1,
        ]);
    }
}
