<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `userstable` WHERE username='$username'
and password='".md5($password)."'"; //md5 is encyrmption value to un wind it
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: homepage.php");
         }else{
 echo '<section>
<h1 class="page-header">You have entered the wrong username/ password</h1>
<div style="text-align:center; margin-top:10px;"><a class="return-to-login" href="index.php">Click here to return to Login</a></div>
</section>';
 }
}
?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loginStyle.css">