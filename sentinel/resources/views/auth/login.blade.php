@extends('layouts.master')


 @section('content')

    <div class="row">
      <hr>
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title> Login </h3>
                </div>

  <div class="panel-body">
      <form action="/login" method="POST">

        {{ csrf_field() }}

              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-user"></i></span>

                        <input type="text" name="username" class="form-control" placeholder="User Name" required>
                              </div>
              </div>
                  <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-lock"></i></span>

                                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                  </div>

                    <div class="form-group">
                        <input type="submit" value="login" class="btn btn-success" pull-right>

          </form>

        </div>
    </div>
  </div>
</div>
</div>


@endsection
