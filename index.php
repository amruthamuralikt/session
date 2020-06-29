<!-- <!DOCTYPE html> -->
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
                <!--<form class="form-inline" action="connect.php">
				    <input class="form-control mr-sm-2" type="text" placeholder="Search">
				    <button class="btn btn-success" type="submit">Search</button>
                </form>-->

           <!-- <div class="carousel-inner">
            <div class="item active">
                <div class="fill"><img src="/front/images/slider1.jpg"></div>
            </div>
            <div class="item">
                <div class="fill"><img src="/front/images/slider2.jpg"></div>
            </div>
            <div class="item">
                <div class="fill"><img src="/front/images/slider3.jpg"></div>
            </div>
        </div>
        <div class="arrowbu">
            <a class="left carousel-control" href="#carousel" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel" data-slide="next"><span class="icon-next"></span></a>
        </div>
    </div>-->

		
			<div class="container dcol">
				<div class="login-box">
				<div class="row">
					<div class="col-mid-3 login-p">
						<form action="connect2.php" method="post">
						<h1>REGISTER</h1>
						<hr class="mb-3">
						<div class="form-group">
							<label for="username">User Name</label>
							<input class="form-control" type="text" name="uname" required>
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input class="form-control" type="email" name="email" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input class="form-control" type="password" name="password" required>
						</div>
						<div class="form-group">
							<label for="password">Confirm Password</label>
							<input class="form-control" type="password" name="cpassword" required>
						</div>
							<hr class="mb-3">
						
						<input class="btn btn-primary" type="submit" name="registration" value="signin"><br>

						<p>Already a usre?<a href="login.php">Login</a>
							</form>
				    </div>
			    </div>
			</div>
		
	        </div>
			
	</div>

</body>
</html>|