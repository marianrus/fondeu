<?php
/**
 * Created by PhpStorm.
 * User: marian
 * Date: 10/10/15
 * Time: 8:17 AM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing;
use Illuminate\Support\Facades\View;

class DashboardController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.index');
    }

} 