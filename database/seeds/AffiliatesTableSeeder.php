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
            'link'=>'https://www.facebook.com/TheGreenTeaHouseBar/?fref=ts',
            'image'=>'greenTea.png',
            'description'=>'Difundir los beneficios del té verde y la herbolaria mexicana',
        ]);

         DB::table('affiliates')->insert([
            'name'=>'Major League Hacking',
            'link'=>'https://mlh.io/about',
            'image'=>'mlh.png',
            'description'=>'Major League Hacking (MLH) is the official student hackathon league.',
        ]);

        DB::table('affiliates')->insert([
            'name'=>'T Systems',
            'link'=>'http://www.t-systems.com.mx/',
            'image'=>'t.png',
            'description'=>'T-Systems ofrece Tecnologías de la Información y de la Comunicación (TIC)',
        ]);
    }
}
