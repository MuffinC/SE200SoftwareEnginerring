<?php
session_start();
header('location:index.php');
//localhost/phpmyadmin , then u login, default is root and password is blank
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
//this is now ripping the data from the form via post
$name = $_POST["user"];
$pass = $_POST["password"];
$emas = $_POST["email"];

$s ="select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num ==1){
	echo "Username already taken";

}else{
	$reg= "insert into usertable(name,password,email) values('$name','$pass','$emas')";
	mysqli_query($con,$reg);
	echo "Registration successful";
}
?>