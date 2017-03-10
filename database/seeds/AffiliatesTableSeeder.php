<?php

use Illuminate\Database\Seeder;

class AffiliatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('affiliates')->insert([
            'name'=>'The Green Tea House Bar',
            'link'=>'https://www.facebook.com/TheGreenTeaHouseBar/',
            'image'=>'',
            'description'=>'Difundir los beneficios del té verde y la herbolaria mexicana',
        ]);
    }
}
