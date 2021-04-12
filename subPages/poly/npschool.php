<?php  
    include("../../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Polytechnics</title>
	<!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../css/schoolStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<!-- header section starts  -->
<header>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="../../homepage.php" class="logo"><img src="../images/KachingLogo_nowords.png"></a>
        <ul>
            <li class="navlist"><a href="../../homepage.php">home</a></li>
            <li class="navlist"><a href="../aboutUs.php">about</a></li>
            <li class="active"><a href="../courses.php">course</a>
                <i class="fa fa-angle-down"></i>
                <nav class="navcourse">
                    <ul>
                       <li><a href="../poly.php">Polytechnic</a></li>
                       <li><a href="../jc.php">Junior Collegue</a></li>
                       <li><a href="../uni.php">University</a></li>
                    </ul>
                </nav>
            </li>
            <li  class="navlist"><a href="../internship.php">internship</a><i class="fa fa-angle-down"></i>
                <nav class="navcourse">
                    <ul>
                       <li><a href="../internship.php">Engineering</a></li>
                       <li><a href="../internship.php">IT</a></li>
                       <li><a href="../internship.php">Accounting</a></li>
                    </ul>
                </nav>
            </li>
            <li class="navlist"><a href="../aptitude.php">aptitude</a></li>
            <li class="navlist"><a href="../feedback.php">feedback</a></li>
        </ul>
        <div class="login-msg">
            <div>Welcome <?php echo $_SESSION['username'];?></div>
            <a href="../../logout.php"> LOGOUT</a>
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

<!-- poly start-->
<section class="poly"> 
<h1 class="page-header">Ngee Ann Polytechnic</h1>    
<div class="box-container">
    <div class="box">
        <img src="images/BA-np.jpg" alt="TP Logo">
        <div class="content">
            <a href="npbacourses.php" class="title">Business & Accountancy</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.np.edu.sg/ba"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/DE-np.jpg" alt="RP Logo">
        <div class="content">
            <a href="npdecourses.php" class="title">Design & Environment</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.np.edu.sg/de"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/SOE-np.jpg" alt="NYP Logo">
        <div class="content">
            <a href="npengcourses.php" class="title">Engineering</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.np.edu.sg/soe"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/LSCT-np.jpg" alt="NP Logo">
        <div class="content">
            <a href="nplsctcourses.php" class="title">Life Sciences & Chemical Technology</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.np.edu.sg/lsct"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/ICT-np.jpg" alt="SP Logo">
        <div class="content">
            <a href="npictcourses.php" class="title">InfoComm Technology</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.np.edu.sg/ict"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/FMS-np.jpg" alt="RP Logo">
        <div class="content">
            <a href="npfmscourses.php" class="title">Film & Media Studies</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.np.edu.sg/fms"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/HMS-np.jpg" alt="RP Logo">
        <div class="content">
            <a href="nphsscourses.php" class="title">Humanities & Social Sciences</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.np.edu.sg/hms"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/HS-np.jpg" alt="RP Logo">
        <div class="content">
            <a href="nphscourses.php" class="title">Health Sciences</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.np.edu.sg/hs"><em>Click Here to Learn More</em></a>
        </div>
    </div>
</div>
</section>
<!-- poly Page section end  -->

<!-- footer section starts  -->

<div class="footer">

    <footer>
        <div class="footer-container2">
            <div class="container-foot2">
                    <a class="footer-button" href="../tos.php">Terms of Service</a>
                    <a class="footer-button" href="../pp.php">Privacy Policy</a>
            </div>

            <div class="container-foot3">
                    <img id="footerLogo" src="../images/KachingLogo_nowords.png">
                    <i class="far fa-copyright"></i>
                    <p>2021 KACHING, inc.</p> 
                    <p>Singapore</p>
            </div>
            <div class="container-foot1">
                    <a class="footer-button2 fas fa-envelope" href="mailto:kachingntu@gmail.com" title="Send us an email!"></a>
                    <a class="footer-button2 fas fa-paper-plane" href="../feedback.php" title="Give us Feedback!"></a>
                    <a class="footer-button2 fas fa-question-circle" href="../faq.php" title="FAQ"></a>
            </div>
        </div>
    </footer>
</div>

<!-- Footer section end -->
<script src="js/searchBar.js"></script>
<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>
</body>
</html>