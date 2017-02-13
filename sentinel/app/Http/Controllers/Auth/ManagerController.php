<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ManagerController extends Controller
{
  public function tasks()
{
return view ('managers.tasks');
}    //
}   // end of class
