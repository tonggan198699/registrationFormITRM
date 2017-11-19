@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><h2>Dashboard</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Welcome to the Dashboard - <strong>
                      @if (Auth::user()->name)
                      {{Auth::user()->name}}
                      @else
                      {{Auth::user()->email}}
                      @endif
                      </strong>
                    </h3>

                    You are now logged in! <br>

                    To view your details please click on the "Details" tab on the top right hand side.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
