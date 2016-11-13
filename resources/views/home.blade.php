@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div>
                <h1>Welcome {{ Auth::user()->name }}</h1>
            </div>

            <br  />

            @foreach ($users as $user)

                <table class="table table-inverse">
                  <thead>
                    <tr>
                      <th>{{ $user->name }}</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>this is user {{ $user->id }}</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>

                  </tbody>
                </table>
            @endforeach

            <!--<div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>You are logged in!</h1>
                </div>


            </div>-->
        </div>
    </div>
</div>
@endsection
