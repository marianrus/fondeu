<?php
/**
 * Created by PhpStorm.
 * User: marian
 * Date: 10/31/15
 * Time: 9:51 AM
 */

namespace App\Http\ViewComposers;


use App\Course;
use App\CourseCategory;
use Illuminate\Support\Facades\Config;

class ConfigServiceProvider
{

    public function compose( $view)
    {
        $view->with('config',Config::get('fondnews'));
    }
}