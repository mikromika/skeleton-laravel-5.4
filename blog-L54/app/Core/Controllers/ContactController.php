<?php

namespace App\Core\Controllers;

use App\Core\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContact;

class ContactController extends Controller
{

  public function store(Request $request)
  {
  //  rules

  $rules =[
    'name' => 'required',
    'message' => 'required|min:6',

  ];

    $this->validate($request, $rules);
    Mail::to('example@example.com')
    ->send(new SendContact($request->only(['name', 'message'])));

    return redirect()->back()->with(
    'success', 'The Email was sent');

}
  }
