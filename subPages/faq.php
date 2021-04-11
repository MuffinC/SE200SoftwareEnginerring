<?php  
    include("../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frequently Asked Questions</title>
	<!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/faqStyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
	<!-- header section starts  -->
<!-- header section starts  -->
<header>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="../homepage.php" class="logo"><img src="images/KachingLogo_nowords.png"></a>
        <ul>
            <li class="navlist"><a href="../homepage.php">home</a></li>
            <li class="navlist"><a href="aboutUs.php">about</a></li>
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
                       <li><a href="internship.php">Engineering</a></li>
                       <li><a href="internship.php">IT</a></li>
                       <li><a href="internship.php">Accounting</a></li>
                    </ul>
                </nav>
            </li>
            <li class="navlist"><a href="aptitude.php">aptitude</a></li>
            <li class="navlist"><a href="feedback.php">feedback</a></li>
        </ul>
        <div class="login-msg">
            <div>Welcome <?php echo $_SESSION['username'];?></div>
            <a href="../logout.php"> LOGOUT</a>
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
<!-- header section end-->

<section>
	<h1 class="page-header">Frequently Asked Questions</h1>
	<div class="box">
		<h2>1. Account</h2>
		<p>Can I change my username/password</p>
        <ul>
            <li>Sadly NOPE</li>
        </ul>

        <p>What happens when I forget password/username?</p>
        <ul>
            <li>At the login page, click on forgot password/username and enter the email and DOB used during registration</li>
        </ul>

        <p>How to delete account</p>
        <ul>
            <li>Account will be automatically be deleted in 6 months of inactivity</li>
        </ul>

        <p>Why do we have to create an account?</p>
        <ul>
            <li>For ... purpose</li>
        </ul>
	</div>

	<div class="box">
		<h2>2. Feedback</h2>
		<p>How do I use the search bar?</p>
        <ul>
            <li>Go to the footer and click on the to send us email</li>
            <li>Go to the feedback and click on it, enter your feedback to us</li>
            <li>Any improvement on the website, feel free to let us know</li>
        </ul>
    </div>

	<div class="box">
    	<h2>3. Conact Us</h2>
        <p>Why do my search item not exist?</p>
        <ul>
            <li>Go to the footer and click on the email.</li>
            <li> We will try to get back to you 3-5 working day. </li>
        </ul>
	</div>

	<img src="images/faq.jfif">

	<div class="box">
		<h2>4. Search</h2>
		<p>How do I use the search bar?</p>
        <ul>
            <li>Simply type in Course / School / Course Number into the search bar. Our search engine will return the appropriate item that are searching for.</li>
        </ul>
	

        <p>Why do my search item not exist?</p>
        <ul>
            <li>As our website is still new, there are many things that we are still lacking. We will gradually add more courses over time. Thank you for your patience.</li>
        </ul>
	</div>	

	<div class="box">
		<h2>5. Aptitude Test</h2>
		<p>When can I get the result of the aptitude test?</p>
        <ul>
            <li>Result would be displayed upon completion of the test</li>
        </ul>

        <p>1)	Will my aptitude test result be saved?</p>
        <ul>
            <li>IDK ... ASK MERVYN</li>
        </ul>
	</div>

	<div class="box">
		<h2>6. Internship</h2>
		<p>Is the internship company listed here reliable?</p>
        <ul>
            <li>Yes. They have been verified.</li>
            <li>You can also contact the company directly.</li>
        </ul>
    </div>
</section>


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

<script src="js/searchBar.js"></script>
<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>

</body>
</html>