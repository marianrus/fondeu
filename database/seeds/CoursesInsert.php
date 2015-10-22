<?php

use Illuminate\Database\Seeder;

class CoursesInsert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $durations = [
            '1 week',
            '1 month',
            '2.5 months',
            '3.5 months',
            '2 months',
            '5 months',
        ];


        for($i=0; $i<50; $i++)
        {
            try{

                DB::table('courses')->insert([
                    'course_name'  => 'Rock'.str_random(),
                    'course_description' => str_random(500),
                    'course_from'        => date('Y-m-d'),
                    'course_to'        => date('Y-m-d'),
                    'duration'          => $durations[rand(0,count($durations))],
                    'city_id'           =>  rand(1,10000),
                    'county_id'           =>  rand(1,40),
                    'partner_id'        => rand(0,10),
                    'course_on_site'        => rand(0,1)
                ]);
            }catch (Exception $e){
                continue;
            }
        }
    }
}
