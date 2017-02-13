<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;
use Cartalyst\Sentinel\Users;
use App\SentinelUser;

class LoginController extends Controller
{
  public function login()

  {
      return view('auth.login');

  }

  public function postLogin(Request $request)
  {


    Sentinel::authenticate($request->all());

     if(Sentinel::getUser->roles()->first()->name == 'admin')
        return redirect('/');

    elseif(Sentinel::getUser->roles()->first()->name == 'manager')
    return ('you are logged as manager');

      // return Sentinel::check();
    //  return redirect ('/');
  }
  public function logout()

  {   Sentinel::logout();
      return redirect('/');

  }



} // end of class
