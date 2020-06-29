<?php
session_start();

include_once 'connect.php';

if(isset($_POST['login']))
{

	$uname=$_POST['uname'];
	$pass = $_POST['password'];
	
	$res= " select * from register where uname='$uname' and psw='$pass'";
	
	$query=mysqli_query($conn,$res);
	
	$num=mysqli_num_rows($query);
	if($num !=0)
    {
	        while($row = mysqli_fetch_assoc($query)) {
				$_SESSION['user']= $row["uname"];
				header('location:home.php');
              
        
    }}
    else
         {  
			 echo "login failed";
			header('location:login.php'); 
	
         }

}     

mysqli_close($conn);

	?>