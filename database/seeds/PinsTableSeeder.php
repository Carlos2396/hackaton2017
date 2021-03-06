<?php

use Illuminate\Database\Seeder;

class PinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pins')->insert([
            'user_id'=>1,
            'residue_id'=>1,
            'location_id'=>1,
        ]);

        DB::table('pins')->insert([
            'user_id'=>1,
            'residue_id'=>2,
            'location_id'=>2,
        ]);

        DB::table('pins')->insert([
            'user_id'=>1,
            'residue_id'=>3,
            'location_id'=>3,
        ]);

        DB::table('pins')->insert([
            'user_id'=>1,
            'residue_id'=>4,
            'location_id'=>4,
        ]);

        DB::table('pins')->insert([
            'user_id'=>1,
            'residue_id'=>1,
            'location_id'=>4,
        ]);
    }
}
