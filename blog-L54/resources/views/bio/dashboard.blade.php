@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile dashboard</div>

                <div class="panel-body" class="col-md-8 col-md-offset-2">

                  <div id="users-profiles" style="margin-top: 15px;">


                  <table class="table">
                    <thead>
                      <tr>
                        <th>Login name</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Mobile</th>
                        <th width="70px"></th>
                      </tr>
                    </thead>

                    <tbody>
                       <td>{{ Auth::user()->name }}</td>
                       <td>{{ Auth::user()->firstname }}</td>
                       <td>{{ Auth::user()->lastname }}</td>
                       <td>{{ Auth::user()->email }}</td>
                       <td>{{ Auth::user()->phone }}</td>
                       <td>{{ Auth::user()->mobile }}</td>
                    </tbody>
                  
                  </table>
                </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
