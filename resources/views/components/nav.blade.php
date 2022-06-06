<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>JBJapp</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<nav class="navbar navbar-expand-lg navbar-light py-4 ml-5 mr-5" 				style="background-color: #ffffff;">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="img-fluid" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="48px" height="48px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav_lc">
        <ul class="navbar-nav my-3 my-lg-0 ms-lg-3 me-auto">
          <li class="nav-item me-4"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#">About us</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
        </ul>
	</div>
			
    <div class="align-right">
          <!--<a><button class="btn btn-outline-secondary me-2 text-right" href="{{ route('login')}}">Sign In</button></a>
          <button class="btn btn-primary text-right" href="{{ route('register')}}">Sign Up</button>--->
          <a class="btn btn-primary" href="{{ route('login')}}" role="button">Login</a>
          <a class="btn btn-primary" href="{{ route('register')}}" role="button">Signup</a>
    </div>
      
    
</nav>



  