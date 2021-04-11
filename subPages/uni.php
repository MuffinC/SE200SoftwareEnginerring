<?php  
    include("../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/schoolStyle.css">
</head>
<body>
<!-- header section starts  -->
<header>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="../homepage.php" class="logo"><img src="images/KachingLogo_nowords.png"></a>
        <ul>
            <li class="navlist"><a href="../homepage.php">home</a></li>
            <li class="navlist"><a href="aboutUs.php">about</a></li>
            <li class="active"><a href="courses.php">course</a>
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

<!-- uni Page section starts  -->
<section class="uni" id="uni">
<h1 class="page-header">LOCAL UNIVERSITY LISTING</h1>    
<div class="box-container">
    <div class="box">
        <img src="images/ntu_logo.png" alt="NTU Logo">
        <div class="content">
            <a href="#ntu" class="title">Nanyang Technological University (NTU)</a>
        	<ul>
	            <li><a class="programme" href="../homepage.php">College of Business</a></li>
	            <li><a class="programme" href="aboutUs.php">College of Engineering</a></li>
	            <li><a class="programme" href="courses.php">College of Humanities, Arts & Social Sciences</a></li>
	            <li><a class="programme" href="internship.php">College of SCience</a></li>
	            <li><a class="programme" href="aptitude.php">Lee Kong Chian School of Medicine</a></li>
	            <li><a class="programme" href="feedback.php">S. Rajaratnam School of International Studies</a></li>
	            <li><a class="programme" href="aboutUs.php">National Institute of Education</a></li>
	            <li><a class="programme" href="internship.php">Double Majors Programmes</a></li>
	            <li><a class="programme" href="aptitude.php">Double Degree Programmes</a></li>
	            <li><a class="programme" href="feedback.php">Part-Time Programmes</a></li>
        	</ul>
        </div>
    </div>

    <div class="box">
        <img src="images/nus_logo.jpg" alt="NUS Logo">
        <div class="content">
            <a href="#nus" class="title">National University of Singapore (NUS)</a>
	        <ul>
	            <li><a class="programme" href="../index.php">College of Humanities and Sciences</a></li>
	            <li><a class="programme" href="aboutUs.php">Business & Accountancy</a></li>
	            <li><a class="programme" href="courses.php">Computing</a></li>
	            <li><a class="programme" href="internship.php">Dentistry</a></li>
	            <li><a class="programme" href="aptitude.php">Design & Environment</a></li>
	            <li><a class="programme" href="feedback.php">Engineering</a></li>
	            <li><a class="programme" href="aboutUs.php">Law</a></li>
	            <li><a class="programme" href="courses.php">Medicine</a></li>
	            <li><a class="programme" href="internship.php">Nursing</a></li>
	            <li><a class="programme" href="aptitude.php">Pharmacy</a></li>
	            <li><a class="programme" href="feedback.php">Music</a></li>
	            <li><a class="programme" href="internship.php">Double Majors Programmes</a></li>
	            <li><a class="programme" href="aptitude.php">Double Degree Programmes</a></li>
	            <li><a class="programme" href="feedback.php">Part-Time Programmes</a></li>
	        </ul>
        </div>
    </div>

    <div class="box">
        <img src="images/sit_logo.png" alt="SIT Logo">
        <div class="content">
            <a href="#sit" class="title">Singapore Institute of Technology (SIT)</a>
	        <ul>
	            <li><a class="programme" href="../index.php">Engineering</a></li>
	            <li><a class="programme" href="aboutUs.php">Chemical Engineering and Food Technology</a></li>
	            <li><a class="programme" href="courses.php">Infocomm Technology</a></li>
	            <li><a class="programme" href="internship.php">Health and Social Sciences</a></li>
	            <li><a class="programme" href="feedback.php">Design and Specialised Businesses</a></li>
	            <li><a class="programme" href="feedback.php">Part-Time Programmes</a></li>
	        </ul>
        </div>
    </div>

    <div class="box">
        <img src="images/smu_logo.png" alt="SMU Logo">
        <div class="content">
            <a href="#smu" class="title">Singapore Management University (SMU)</a>
	        <ul>
	            <li><a class="programme" href="../index.php">School of Accountancy</a></li>
	            <li><a class="programme" href="aboutUs.php">Lee Kong Chian School of Business</a></li>
	            <li><a class="programme" href="courses.php">School of Law</a></li>
	            <li><a class="programme" href="internship.php">School of Economics</a></li>
	            <li><a class="programme" href="aptitude.php">School of Computing and Information Systems</a></li>
	            <li><a class="programme" href="feedback.php">School of Social Sciences</a></li>
	        </ul>
        </div>
    </div>

    <div class="box">
        <img src="images/suss_logo.jpg" alt="SUSS Logo">
        <div class="content">
            <a href="#suss" class="title">Singapore University of Social Sciences (SUSS)</a>
	          <ul>
	            <li><a class="programme" href="../index.php">Bachelor of Accountancy</a></li>
	            <li><a class="programme" href="aboutUs.php">Bachelor of Early Childhood Education with Minor</a></li>
	            <li><a class="programme" href="courses.php">Bachelor of Human Resource Management with Minor</a></li>
	            <li><a class="programme" href="courses.php">Bachelor of Public Safety and Security with Minor</a></li>
	            <li><a class="programme" href="courses.php">Bachelor of Science in Business Analytics with Minor</a></li>
	            <li><a class="programme" href="courses.php">Bachelor of Science in Finance with Minor</a></li>
	            <li><a class="programme" href="courses.php">Bachelor of Science in Marketing with Minor</a></li>
	            <li><a class="programme" href="courses.php">
	            Bachelor of Science in Supply Chain Management with Minor</a></li>
	            <li><a class="programme" href="internship.php">Bachelor of Social Work with Minor</a></li>
	            <li><a class="programme" href="aptitude.php">Part-Time Programmes</a></li>
	        </ul>
        </div>
    </div>

    <div class="box">
        <img src="images/sutd_logo.png" alt="SUTD Logo">
        <div class="content">
            <a href="#sutd" class="title">Singapore University of Technology and Design (SUTD)</a>
        </div>
        <div class="subcontent">
			<ul>
	            <li><a class="programme" href="../index.php">Architecture and Sustainable Design</a></li>
	            <li><a class="programme" href="aboutUs.php">Design and Artificial Intelligence</a></li>
	            <li><a class="programme" href="courses.php">Engineering Product Development</a></li>
	            <li><a class="programme" href="internship.php">Engineering Systems and Design</a></li>
	            <li><a class="programme" href="aptitude.php">Information Systems Technology and Design</a></li>
	        </ul>
        </div>
    </div>
</div>
</section>

<!-- uni Page section end  -->

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
<script src="js/searchBar.js"></script>
<!-- Footer section end -->
<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>
</body>
</html>