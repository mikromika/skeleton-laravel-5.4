<?php

//corespace App\Core\Controllers;
namespace App\Core\Controllers;
use App\Http\Controllers\Controller as BaseController;
use App\Core\Controllers\Auth;
use App\Core\Controllers\Admin;
use App\Users\Controllers;
//use App\Business\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use App\Core\Controllers;


class Controller extends BaseController
//class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
