<?php

use Illuminate\Database\Seeder;

class PartnersInsert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++)
        {
            try{
                DB::table('partner')->insert([
                    'partner_id'    => $i,
                    'partner_name'  => 'Rock'.str_random(),
                    'partner_phone' => rand(5000, 10000),
                    'city_id'       => rand(1,10000),
                    'county_id'     => rand(1,40),
                    'partner_email' => str_random(5) . '@' .str_random(10).'.com',
                    'partner_link'  => 'www.google.com'
                ]);
            }catch (Exception $e){

            }
        }
    }
}
