<?php
session_start();
//localhost/phpmyadmin , then u login, default is root and password is blank
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
//this is now ripping the data from the form via post
$name = $_POST["user"];
$pass = $_POST["password"];

$s ="select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num ==1){
	$_SESSION['username'] = $name;
	header('location:homepage.php');
	//need to setup login page

}else{
	header('location:index.php');
	// failed log in
	
}
?>