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

                      <div class="input form-row form-group">
                        <div class="form-group col-md-2">
                          <label for="dob">Date of birth</label>
                          <input type="hidden" id="dob" name="dob">
                              <select id="b-day" class="form-control" name="b-day">
                                  <option disabled selected value="0">Day</option>
                                  @for($i = 1; $i <= 31; $i++)
                                      <option value="{{$i}}">{{$i}}</option>
                                  @endfor
                              </select>
                        </div>

                        <div class="form-group col-md-2">
                          <label for="b-month">Month</label>
                            <select id="b-month" class="form-control" name="b-month">
                                <option disabled selected value="0">Month</option>
                                @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $key => $month)
                                    <option value="{{$key + 1}}">{{$month}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                          <label for="b-year">Year</label>
                            <select id="b-year" class="form-control" name="b-year">
                                <option disabled selected value="0">Year</option>
                                @for($i = \Carbon\Carbon::now()->subYears(100)->year; $i <= \Carbon\Carbon::now()->year; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
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
