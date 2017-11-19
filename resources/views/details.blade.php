@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><h2>Details</h2></div>

                <div class="panel-body">
                  @foreach ($users as $user)

                    @if($user->title)
                    <h3>Title: {{$user->title}}</h3>
                    @else
                    <h3>Title: N.A</h3>
                    @endif

                    @if($user->forename)
                    <h3>Forename: {{$user->forename}}</h3>
                    @else
                    <h3>Forename: N.A</h3>
                    @endif

                    @if($user->surname)
                    <h3>Forename: {{$user->surname}}</h3>
                    @else
                    <h3>Surname: N.A</h3>
                    @endif

                    @if($user->dob)
                    <h3>Date of Birth: {{$user->dob->format('d-m-Y')}}</h3>
                    @else
                    <h3>Date of Birth: N.A</h3>
                    @endif

                    @if($user->gender)
                    <h3>Gender: {{$user->gender}}</h3>
                    @else
                    <h3>Gender:: Female</h3>
                    @endif

                    <h3>Email: {{$user->email}}</h3>

                  @endforeach

                </div>
                  <div class="button-wrap">
                    <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
