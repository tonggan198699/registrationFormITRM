@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                          <label for="title" class="col-md-4 control-label">Title</label>

                          <div class="col-md-6">
                            <select class="form-control" name="title" id="title">
                              <option value="mr">Mr</option>
                              <option value="mrs">Mrs</option>
                              <option value="miss">Miss</option>
                              <option value="ms">Ms</option>
                              <option value="dr">Dr</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('forename') ? ' has-error' : '' }}">
                            <label for="forename" class="col-md-4 control-label">Forename</label>

                            <div class="col-md-6">
                                <input id="forename" class="form-control" name="forename" value="{{ old('forename') }}">

                                @if ($errors->has('forename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('forename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Suranme</label>

                            <div class="col-md-6">
                                <input id="surname" class="form-control" name="surname" value="{{ old('surname') }}">

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="gender" class="col-md-4 control-label">Gender</label>
                          <div class="col-md-6">
                            <select class="form-control" name="gender" id="gender">
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                            </select>
                          </div>
                        </div>

                      <div class="input form-group">
                        <label for="dob" class="col-md-4 control-label">Date of Birth</label>
                        <input id="dob" type="date" class="form-control date" name="dob" value="{{ old('dob') }}" required autofocus>
                           @if ($errors->has('dob'))
                           <span class="help-block">
                           <strong>{{ $errors->first('dob') }}</strong>
                           </span>
                            @endif
                      </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
