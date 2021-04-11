<!DOCTYPE html>
<html>
<head>
	<title>
		Login and Registration form 
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
</head>
<body>
	<section>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log in</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			


		<form id="login"class="input-group" action="validation.php" method="post">
			<input type="text" class="input-field" name="username" placeholder="Username" required>
			<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
			<p>Forget password?<a href="#">Click here</a></p>			
			<button type="submit" class="submit-btn">Login</button>
		</form>


		<form id="register"class="input-group" action="registration.php" method="post">
			<input type="text" name="username" class="input-field" placeholder="Username" required>
			<input type="password" name="password" class="input-field" placeholder="Enter Password" required>
			<input type="email" name="email" class="input-field" placeholder="Enter Email" required>
			<button type="submit" class="submit-btn">Register</button>
		</form>
		</div>
		
	</section>
	<script >
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register(){
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
		}
		function login(){
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0px";
		}

	</script>

	<script src="js/script.js"></script>
	<script src="js/jquery-3.6.0.js"></script>


	<script> 
		$(document).ready(function() {
			$("#forgotpassform").hide();
			$("#forgotpass").click(function(){
				$("#forgotpassform").toggle();
			});
		});
	</script>

</body>
</html>
