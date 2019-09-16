
@extends('layouts.app')
@section('content')

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="./p.png" style="width: 130px;border-radius: 80%">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon" style="color: black" ></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="#">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginreg.php">Student Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginstaff.php">Staff Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div class="jumbotron flex-center position-ref full-height">

<h1 class="test-info"> Welcome to our own page</h1>
<p>Yes!! We are doing right</p>
<p>List of students</p>
</div>

        <div>
            <ul>
            @foreach($student as $stud)
            <li>{{$stud['name']}} {{$stud['age']}}</li>
            @endforeach
            </ul>
        </div>
        @endsection