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
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
				  <img class="card-img-top mx-auto" style="width: 60%" src="./images/user.png" alt="">
				  <div class="card-body">
				    <h5 class="card-title">Profile Info</h5>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Syed Zaman</p>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
				    <p class="card-text">Last Login: xxxx-xx-xx</p>
				    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width: 100%;height: 100%;">
					<h1>Welcome Admin</h1>
					<div class="row">
						<div class="col-sm-6">
							<iframe src="http://free.timeanddate.com/clock/i6z1bbmy/n73/szw160/szh160/hfc0ff/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
						</div>
						<div class="col-sm-6">
							<div class="card">
							    <div class="card-body">
							        <h5 class="card-title">New Orders</h5>
							        <p class="card-text">Here you can make invoices and create new orders</p>
							        <a href="#" class="btn btn-primary">New Orders</a>
							    </div>
							</div>
						</div>
					</div>
					
				</div>				
			</div>
		</div>

	</div>
	<p></p>
	<p></p>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
				    <div class="card-body">
				        <h5 class="card-title">Categories</h5>
				        <p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
				        <a href="#" class="btn btn-primary">Add</a>
				        <a href="#" class="btn btn-primary">Manage</a>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
				    <div class="card-body">
				        <h5 class="card-title">Brands</h5>
				        <p class="card-text">Here you can manage your Brands and you add new Brands</p>
				        <a href="#" class="btn btn-primary">Add</a>
				        <a href="#" class="btn btn-primary">Manage</a>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
				    <div class="card-body">
				        <h5 class="card-title">Products</h5>
				        <p class="card-text">Here you can manage your Products and you add new Products</p>
				        <a href="#" class="btn btn-primary">Add</a>
				        <a href="#" class="btn btn-primary">Manage</a>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<div class="jumbotron">
		<h1><center>Footer Area</center></h1>
	</div>

</body>
</html>
