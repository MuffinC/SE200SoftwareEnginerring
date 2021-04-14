<?php  
    include("../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us</title>
	<!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/subStyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<!-- header section starts  -->
<header>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="../homepage.php" class="logo"><img src="images/KachingLogo_nowords.png">Student Planner</a>
        <ul>
            <li class="navlist"><a href="../homepage.php">home</a></li>
            <li class="active"><a href="aboutUs.php">about</a></li>
            <li class="navlist"><a href="courses.php">course</a>
                <i class="fa fa-angle-down"></i>
                <nav class="navcourse">
                    <ul>
                       <li><a href="poly.php">Polytechnic</a></li>
                       <li><a href="jc.php">Junior Collegue</a></li>
                       <li><a href="uni.php">University</a></li>
                    </ul>
                </nav>
            </li>
            <li  class="navlist"><a href="internship.php">internship</a><i class="fa fa-angle-down"></i>
                <nav class="navcourse">
                    <ul>
                       <li><a href="aerospace.php">Aerospace</a></li>
                       <li><a href="it.php">IT</a></li>
                       <li><a href="accounting.php">Accounting</a></li>
                    </ul>
                </nav>
            </li>
            <li class="navlist"><a href="aptitude.php">aptitude</a></li>
            <li class="navlist"><a href="feedback.php">feedback</a></li>
        </ul>
        <div class="login-msg">
            <div>Welcome <?php echo $_SESSION['username'];?><i class="fas fa-user-circle"></i></div>
            <a href="../logout.php"> LOGOUT</a>
        </div>
    </nav>
    <div style="background-color: black">
        <div id="search-bar" class="col-sm-100">
            <!-- <h3 id="search-title"><strong>Data Search of Courses and Schools</strong></h3> -->
                <input type="text" name="search" id="search" placeholder="Search using course name, course code or school name" class="form-control">
            <ul class="list-group" id="result"></ul>
        </div>
    </div>
    <!-- Login Page section starts  -->
</header>
<!-- header section end-->

<!-- ABOUT US section starts  (need to shift the image to the right, also take group photo)-->
<section class="about">
	<div class="about-container">
		<h1 class="page-header">ABOUT US!</h1>
		<div id="grp-img">
			<img class="teamphoto" src="images/team.jpg" alt="placeholder">
		</div>
		
		<div>
			Hello! We are Kaching Corporated. Firstly, You may ask, what is this website about? And how did it all began? <br>
			Well it started with problems pertaining to the registration process of Singapores' tertiary education and the growing pains of applying for them. We have also heard from our peers that sometimes the course they have chosen was not the right fit for them and ultimately leading to them changing their field of study down the road. Personally, the team and I can relate to such an experience as we too made the wrong choice at the time. Eventually, resulting in the creation of this very company and website.
			<br>
			<br>
			Currently, we are in the midst of getting everything up and functional and we cannot wait for the official launch of this website! We would be more than happy to receive any user feedback or burning question that you have for the team or me. Please do use the "Contact us" icon at the bottom to send us an email which we will get back to you as soon as possible or you can make use of our artificial intelligent robot to help answer some of your queries.
			Cheers and hope to hear from you in the new future.
			<br>
			<br>
            From, <br>
            Kaching Corp Team
		</div>
	</div>
</section>
<!-- ABOUT US section END  -->

<!-- footer section starts  -->

<div class="footer">

    <footer>
        <div class="footer-container2">
            <div class="container-foot2">
                    <a class="footer-button" href="tos.php">Terms of Service</a>
                    <a class="footer-button" href="pp.php">Privacy Policy</a>
            </div>

            <div class="container-foot3">
                    <img id="footerLogo" src="images/KachingLogo_nowords.png">
                    <i class="far fa-copyright"></i>
                    <p>2021 KACHING, inc.</p> 
                    <p>Singapore</p>
            </div>
            <div class="container-foot1">
                    <a class="footer-button2 fas fa-envelope" href="mailto:kachingntu@gmail.com" title="Send us an email!"></a>
                    <a class="footer-button2 fas fa-paper-plane" href="feedback.php" title="Give us Feedback!"></a>
                    <a class="footer-button2 fas fa-question-circle" href="faq.php" title="FAQ"></a>
            </div>
        </div>
    </footer>
</div>

<!-- Footer section end -->
<script src="js/searchBar.js"></script>

<script src="js/script.js"></script>

<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>

</body>
</html>