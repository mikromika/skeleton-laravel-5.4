@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">profile</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/bio/profile') }}">
                        {{ csrf_field() }}

                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                    <label for="firstname" class="col-md-4 control-label">firstname</label>
                      <div class="col-md-6">
                            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                            @if ($errors->has('firstname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                  </span>
                            @endif
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                  <label for="lastname" class="col-md-4 control-label">lastname</label>
                                      <div class="col-md-6">
                                          <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
                                              @if ($errors->has('lastname'))
                                                  <span class="help-block">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                      </span>
                                                    @endif
                                                    </div>
                                                </div>

                  <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                  <label for="phone" class="col-md-4 control-label">phone</label>
                                      <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                                    @if ($errors->has('phone'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                  @endif
                                       </div>
                                </div>

                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                  <label for="mobile" class="col-md-4 control-label">mobile</label>
                                        <div class="col-md-6">
                                            <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required autofocus>
                                    @if ($errors->has('mobile'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                                        </span>
                                  @endif
                                          </div>
                                  </div>

                                  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
