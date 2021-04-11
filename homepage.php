<?php  
    include("auth.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaching Website</title>

<!--Login + register-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">



</head>
<body>


<!-- header section starts  -->
<header>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="homepage.php" class="logo"><img src="images/KachingLogo_nowords.png"></a>
        <ul>
            <li><a class="active" href="homepage.php">home</a></li>
            <li><a class="navlist" href="subPages/aboutUs.html">about</a></li>
            <li><a class="navlist" href="subPages/courses.html">course</a>
            	<i class="fa fa-angle-down"></i>
                <nav class="navcourse">
                    <ul>
                       <li><a href="subPages/poly.html">Polytechnic</a></li>
                       <li><a href="subPages/jc.html">Junior Collegue</a></li>
                       <li><a href="subPages/uni.html">University</a></li>
                    </ul>
                </nav>
            </li>
            <li><a class="navlist" href="subPages/internship.html">internship</a><i class="fa fa-angle-down"></i>
            	<nav class="navcourse">
                    <ul>
                       <li><a href="subPages/internship.html">Engineering</a></li>
                       <li><a href="subPages/internship.html">IT</a></li>
                       <li><a href="subPages/internship.html">Accounting</a></li>
                    </ul>
                </nav>
            </li>
            <li><a class="navlist" href="subPages/aptitude.html">aptitude</a></li>
            <li><a class="navlist" href="subPages/feedback.php">feedback</a></li>
        </ul>
        <div class="login-msg">
	        <div>Welcome <?php echo $_SESSION['username'];?></div>
			<a href="logout.php"> LOGOUT</a>
    	</div>
    </nav>
    <div style="background-color: black">
	    <div id="search-bar">
			<!-- <h3 id="search-title"><strong>Data Search of Courses and Schools</strong></h3> -->
	    		<input type="text" name="search" id="search" placeholder="Search using course name, course code or school name" class="form-control">
			<ul class="list-group" id="result"></ul>
		</div>
	</div>
    <!-- Login Page section starts  -->

</header>

<!-- header section end-->

<!-- home section starts  -->
<section class="home" id="home">

	
	<div class="container">
        <img src="images/course.jpg" alt="">
    	<div class="content">
	        <h3>Course</h3>
	        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aperiam quaerat dolor voluptas nobis voluptates illum? Inventore voluptas dolore voluptates.</p>
	        <a href="subPages/courses.html"><button class="btn">learn more</button></a>
    	</div>
    </div>

	<div class="container">
        <img src="images/Internships.jpg" alt="">
    	<div class="content">
	        <h3>Internship</h3>
	        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aperiam quaerat dolor voluptas nobis voluptates illum? Inventore voluptas dolore voluptates.</p>
	        <a href="subPages/internship.html"><button class="btn">learn more</button></a>
    	</div>
    </div>

	<div class="container">
        <img src="images/aptitude.png" alt="">
    	<div class="content">
	        <h3>Aptitude Test</h3>
	        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aperiam quaerat dolor voluptas nobis voluptates illum? Inventore voluptas dolore voluptates.</p>
	        <a href="subPages/aptitude.html"><button class="btn">learn more</button></a>
    	</div>
    </div>

</section>
<!-- home section ends -->

<!-- footer section starts  -->

<div class="footer">

    <footer>
        <div class="footer-container2">
            <div class="container-foot2">
                    <a class="footer-button" href="subPages\tos.html">Terms of Service</a>
                    <a class="footer-button" href="subPages\pp.html">Privacy Policy</a>
            </div>

            <div class="container-foot3">
            		<img id="footerLogo" src="images/KachingLogo_nowords.png">
                    <i class="far fa-copyright"></i>
                    <p>2021 KACHING, inc.</p> 
                    <p>Singapore</p>
            </div>
            <div class="container-foot1">
                    <a class="footer-button2 fas fa-envelope" href="mailto:kachingntu@gmail.com" title="Send us an email!"></a>
                    <a class="footer-button2 fas fa-paper-plane" href="subPages/feedback.php" title="Give us Feedback!"></a>
                    <a class="footer-button2 fas fa-question-circle" href="subPages\faq.html" title="FAQ"></a>
            </div>
        </div>
    </footer>
</div>

<!-- Footer section end -->

<script src="js/searchBar.js"></script>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>
</body>
</html>
