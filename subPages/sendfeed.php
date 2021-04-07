<?php
session_start();
header('location:feedback.php');
//localhost/phpmyadmin , then u login, default is root and password is blank
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'feedbacker');
//this is now ripping the data from the form via post
$emas = $_POST["email"];
$subj = $_POST["subject"];
$feed = $_POST["feedback"];

$s ="select * from feed where email = '$emas'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);
if($num ==1){
	echo "email already taken";

}
else{
	$reg= "INSERT INTO feed(email,Subject,Feedback) VALUES('$emas','$subj','$feed')";
	mysqli_query($con,$reg);
	echo "Registration successful";
}
	
?>