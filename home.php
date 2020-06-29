<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
?>

 <!DOCTYPE html> 
<html>
<head>
	 <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="css/stylen.css">
     <script src="js/newscript.js"></script>
	<title>registration form</title>
<?php include 'connect.php' ?>
</head>
<body>
                             
			 <nav class="navbar navbar-expand-sm navbar-dark  bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><h3>WELCOME</h3></a>
			<div class="collpase navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					     <a class="nav-link" href="home.php" class="btn btn-out">Home</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="register.php" class="btn btn-out">Sign Up</a>

					    </li>
					    
					    <li class="nav-item">
					     <a class="nav-link" href="login.php" class="btn btn-out">Login</a>
					    </li>
					   </ul>
		</div>
</div>
</nav><br><br><br>

<div style="background-color:black;color:white;height:60px;text-align:right;">
Welcome <?php echo $_SESSION['user']?>
<br>
<div><a href="logout.php" >Logout</a></div>
</div>
</body>
</html>