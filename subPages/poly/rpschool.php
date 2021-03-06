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
        <a href="../../homepage.php" class="logo"><img src="../images/KachingLogo_nowords.png">Student Planner</a>
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
                       <li><a href="../aerospace.php">Aerospace</a></li>
                       <li><a href="../it.php">IT</a></li>
                       <li><a href="../accounting.php">Accounting</a></li>
                    </ul>
                </nav>
            </li>
            <li class="navlist"><a href="../aptitude.php">aptitude</a></li>
            <li class="navlist"><a href="../feedback.php">feedback</a></li>
        </ul>
        <div class="login-msg">
            <div>Welcome <?php echo $_SESSION['username'];?><i class="fas fa-user-circle"></i></div>
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
<section class="sub-poly"> <!-- Change classes of poly, jc and uni to school? -->
<h1 class="page-header">Republic Polytechnic</h1>    
<div class="box-container">
    <div class="box">
        <img src="images/ap-rp.jpg" alt="TP Logo">
        <div class="content">
            <a href="rpascourses.php" class="title">Applied Science</a>
            <p>RP School of Applied Science opens the door to a world of possibilities and lifelong learning.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.rp.edu.sg/sas"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/engineering-rp.jpg" alt="NYP Logo">
        <div class="content">
            <a href="rpengcourses.php" class="title">Engineering</a>
            <p>At RP School of Engineering (SEG), you will learn cutting-edge technologies and smart designs that empower you to build sophisticated machinery and equipment.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.rp.edu.sg/seg"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/hospitality-rp.jpg" alt="NP Logo">
        <div class="content">
            <a href="rphospcourses.php" class="title">Hospitality</a>
            <p>Learn to deliver top-notch service efficiently with passion, pride and professionalism. Let your actions transform ordinary interactions into endless possibilities for extraordinary experiences.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.rp.edu.sg/soh"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/info-rp.jpg" alt="SP Logo">
        <div class="content">
            <a href="rpiccourses.php" class="title">Infocomm</a>
            <p>School of Infocomm offers 6 full-time PET ICT programmes, recognised by both local and overseas universities; and 4 CET Specialist Diplomas. We offer continuing educational programmes and executive courses for working professionals.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.rp.edu.sg/soi"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/MC-rp.jpg" alt="RP Logo">
        <div class="content">
            <a href="rpmccourses.php" class="title">Management and Communication</a>
            <p>At RP School of Management and Communication (SMC), we don???t just embrace creativity and innovation ??? we nurture it.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.rp.edu.sg/smc"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/shl-rp.jpg" alt="RP Logo">
        <div class="content">
            <a href="rpshlcourses.php" class="title">Sports, Health and Leisure</a>
            <p>Here at RP, we offer courses in sports science, sports and leisure management, outdoor and adventure learning, health management and promotion, health services management, as well as sports coaching.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.rp.edu.sg/shl"><em>Click Here to Learn More</em></a>
    </div>

    </div>
        <div class="box">
        <img src="images/ta-rp.jpg" alt="RP Logo">
        <div class="content">
            <a href="rptacourses.php" class="title">Technology for the Arts</a>
            <p>Harness your imagination, hone your artistic talents, and develop your potential to prepare you for an exciting career in the creative industry.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.rp.edu.sg/sta"><em>Click Here to Learn More</em></a>
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
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script></body>
</html>