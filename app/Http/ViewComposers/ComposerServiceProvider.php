<?php
/**
 * Created by PhpStorm.
 * User: marian
 * Date: 10/31/15
 * Time: 9:30 AM
 */

namespace App\Http\ViewComposers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{


    public function boot()
    {
        View()->composer('layouts.frontend.master-menu','App\Http\ViewComposers\MenuComposer');
        View()->composer('frontend.courses.highLightCourses','App\Http\ViewComposers\CoursesHighLightComposer');
    }

    public function register()
    {

    }
}