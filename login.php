<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	//echo "conenction successful";
}else{
	echo "no connection";
}

?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="medlifestyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

	<?php  include 'links.php' ?> 
</head>
<body>

<header>
	<!--<div>
		<nav>
			<a href="index.php">Home</a>
		</nav>
		
	</div>  --> 
	<form action="index.html" method="post">
				
				<div>
				<button class="btn btn-outline-success">Home</button>
			</div>
			</form>  

	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> ADMIN LOGIN PAGE </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="logincheckpage.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-success" name="submit" >
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>
