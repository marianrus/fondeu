<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(eu_project_type::class);
        $this->call(PartnersInsert::class);
        $this->call(CoursesInsert::class);

        Model::reguard();
    }
}
