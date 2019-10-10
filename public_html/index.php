<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory Management System</title>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br>
	<br>
	<div class="container">

		<div class="card mx-auto" style="width: 18rem;">
		  <img class="card-img-top mx-auto" style="width: 60%" src="./images/login.png"  alt="login Icon">
		  <div class="card-body">
		    <form>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Email address</label>
		        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Password</label>
		        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		      </div>
		      
		      <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
		      <span><a href="register.php">Register</a></span>
		    </form>		    
		  </div>
		  <div class="card-footer"><a href="#">Forget Password ?</a></div>
		</div>

	</div>
	

	<!-- <div class="jumbotron">
		<h1>Hello World</h1>
	</div> -->
</body>
</html>
