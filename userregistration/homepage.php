<?php  
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}
	//this just makes it u need to login to enter
?>

<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	
</div>
<a class="float-right" href="logout.php"> LOGOUT</a>

<h1>Welcome <?php echo $_SESSION['username'];?></h1>
</body>
</html>>