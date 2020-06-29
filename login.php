<!--<DOCTYPE html>-->
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>login page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="css/stylen.css">
	<title>registration form</title>
</head>
<body>
	

	
		
			 <nav class="navbar navbar-expand-sm navbar-dark  bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><h3>WELCOME</h3></a>
			<div class="collpase navbar-collapse">
				<ul class="navbar-nav ml-auto">
					
					    <li class="nav-item">
					      <a class="nav-link" href="index.php" class="btn btn-out">Sign Up</a>

					    </li>
					    
					    <li class="nav-item">
					     <a class="nav-link" href="login.php" class="btn btn-out">Login</a>
					    </li>
					   </ul>
		</div>
</div>
</nav>

   <div class="container ">
				<div class="login-box">
				<div class="row">
					<div class="col-mid-3 login-p">
						<form action="loginco.php" method="post">
						<h1>Sign In</h1>
						<hr class="mb-3">
						<div class="form-group">
							<label for="username">User Name</label>
							<input class="form-control" type="text" name="uname" required>
						</div>
						
						<div class="form-group">
							<label for="password">Password</label>
							<input class="form-control" type="password" name="password" required>
						</div>
						
							<hr class="mb-3">
						
						<input class="btn btn-primary" type="submit" name="login" value="Login"><br>

						<p>Not a User?<a href="register.php">Register here</a>
							</form>
				    </div>
			    </div>
			</div>
		
	        </div>
			
	</div>
</body>
</html>