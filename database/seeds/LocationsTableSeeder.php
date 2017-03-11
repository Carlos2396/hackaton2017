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
            'lat'=>128.123001,
            'lng'=>56.177454,
            'name'=>'Casa',
            'address'=>'Calle 23 #1552',
            'user_id'=>1,
        ]);

        DB::table('locations')->insert([
            'lat'=>56.177454,
            'lng'=>128.123001,
            'name'=>'Trabajo',
            'address'=>'Av. Remota #52',
            'user_id'=>1,
        ]);

        DB::table('locations')->insert([
            'lat'=>25.416000,
            'lng'=>130.254785,
            'name'=>'Pizzas',
            'address'=>'Blvd. Flores #1542',
            'user_id'=>1,
        ]);

        DB::table('locations')->insert([
            'lat'=>150.006005,
            'lng'=>13.200785,
            'name'=>'Floreria',
            'address'=>'Calle Pesto #33',
            'user_id'=>1,
        ]);

        DB::table('locations')->insert([
            'lat'=>63.035405,
            'lng'=>211.860124,
            'name'=>'Arkham asylum for the criminally insane',
            'address'=>'Av. Independencia #1255',
            'user_id'=>1,
        ]);
    }
}
