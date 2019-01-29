@extends('layout')

@section('slider')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="https://www.w3schools.com/bootstrap/la.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('content')
<h2>Welcome To AIMS</h2>
	<div class="alert alert-warning">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<a href="index">Home</a>
	<button class="btn btn-primary btn-xs">Hello button</button>
	<button class="btn btn-info btn-sm">Hello button</button>
	<button class="btn btn-success btn-lg">Hello button</button>
	<button class="btn btn-danger">Hello button</button>

	<button class="btn btn-warning">Hello button</button>
@endsection