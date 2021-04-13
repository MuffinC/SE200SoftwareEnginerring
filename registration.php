<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);

 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `userstable` (username, password, email, trn_date)

VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
//.md5 encrympts the password to be stored into database
        $result = mysqli_query($con,$query);

        if($result){
            echo '<section>
<h1 class="page-header">You have registered successfully.</h1>
<div style="text-align:center; margin-top:10px;"><a class="return-to-login" href="index.php">Click here to return to Login</a></div>
</section>';
        }
    }
?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loginStyle.css">
