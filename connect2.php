<?php

include_once 'connect.php';

if(isset($_POST['registration']))
{
	$usname=$conn->real_escape_string($_POST['uname']);
	$email=$conn->real_escape_string($_POST['email']);
	$password=$conn->real_escape_string($_POST['password']);
	$cpassword=$conn->real_escape_string($_POST['cpassword']);
if($password==$cpassword)
{

$sql = "INSERT INTO register (uname,mail,psw) VALUES ('$usname','$email','$password')";

if (mysqli_query($conn, $sql)) 
{
  echo "Welcome  ".$usname ."  you have registered successfully..."."<br><br>";
  header('location:login.php');
} 
else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}}
else{ 
  $link='register.php';
  echo "password and confirm password does not match <a href='".$link."'>back to register</a>";

}
}
				
mysqli_close($conn);
?>
