<?php

use Illuminate\Database\Seeder;

class CategoryCourseInsert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->dataProvider() as $data){
            DB::table('category_course')->insert($data);
        }
    }


    private function  dataProvider()
    {
        return [
            [
                'category_course_name' => 'Antrprenoriat',
                'category_course_description' => 'Antrprenoriat desciere'
            ],
            [
                'category_course_name' => 'Administrativ',
                'category_course_description' => 'Administrativ desciere'
            ],
            [
                'category_course_name' => 'Limbi straine',
                'category_course_description' => 'Administrativ desciere'
            ],
            [
                'category_course_name' => 'Management',
                'category_course_description' => 'Management desciere'
            ],
            [
                'category_course_name' => 'ITC',
                'category_course_description' => 'ITC desciere'
            ],

        ];
    }

}
