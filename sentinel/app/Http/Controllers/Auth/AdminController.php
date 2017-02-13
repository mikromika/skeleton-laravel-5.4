<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class AdminController extends Controller
{
  public function earnings()
{
return view ('admins.earnings');

}
} // end of class
