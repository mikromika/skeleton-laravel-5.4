<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Activation;
use App\SentinelUser;
use Sentinel;

class ActivationController extends Controller
{

  public function activate($email, $activationCode)
  {

  $user = User::whereEmail($email)->first();

 //$SentinelUser = Sentinel::findById($user->id);

  if(Activation::complete($user, $activationCode)) // successfully
  {
    return redirect ('/login');
  } else {
    return redirect ('/');
  } // failed
}
} // end of class
