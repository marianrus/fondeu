<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category_name'  => 'Rock',
            'category_description' => 'decriere la rock'
        ]);
        DB::table('category')->insert([
            'category_name'  => 'Manele',
            'category_description' => 'decriere la manele'
        ]);
        DB::table('category')->insert([
            'category_name'  => 'Samba',
            'category_description' => 'decriere la samba'
        ]);
    }
}
