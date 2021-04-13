<?php  
    include("../auth.php");
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/schoolStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<!-- header section starts  -->
<header>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="../homepage.php" class="logo"><img src="images/KachingLogo_nowords.png">Student Planner</a>
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

<!-- poly start-->
<section class="poly"> <!-- Change classes of poly, jc and uni to school? -->
<h1 class="page-header">POLYTECHNIC LISTING</h1>    
<div class="box-container">
    <div class="box">
        <img src="images/tp_logo.png" alt="TP Logo">
        <div class="content">
            <a href="poly/tpschool.php" class="title">Temasek Polytechnic</a>
            <p>Temasek Polytechnic is a post-secondary academic institution located in Tampines, Singapore. It is the third polytechnic established in the country. Temasek Polytechnic teaches an industry-focused curriculum, which is an alternative to a broader based junior college/ pre-university education.</p>
        </div>
    </div>

    <div class="box">
        <img src="images/nyp_logo.png" alt="NYP Logo">
        <div class="content">
            <a href="poly/nypschool.php" class="title">Nanyang Polytechnic</a>
            <p>Nanyang Polytechnic is a polytechnic located in the precinct of Yio Chu Kang in the town of Ang Mo Kio, Singapore. As an industry-oriented alternative to a broader based junior college education, polytechnic graduates in Singapore are sought after for work or many continue to complete university degrees.</p>
        </div>
    </div>

    <div class="box">
        <img src="images/np_logo.png" alt="NP Logo">
        <div class="content">
            <a href="poly/npschool.php" class="title">Ngee Ann Polytechnic</a>
            <p>Ngee Ann Polytechnic is a post-secondary education institution and statutory board under the purview of the Ministry of Education, located in Clementi, Singapore. Established in 1963, it is the second oldest polytechnic in Singapore. </p>
        </div>
    </div>

    <div class="box">
        <img src="images/sp_logo.png" alt="SP Logo">
        <div class="content">
            <a href="poly/spschool.php" class="title">Singapore Polytechnic</a>
            <p>Singapore Polytechnic is a post-secondary education institution in Singapore. Established on 27 October 1954, Singapore Polytechnic is the first and oldest polytechnic in Singapore.</p>
        </div>
    </div>

    <div class="box">
        <img src="images/rp_logo.jpg" alt="RP Logo">
        <div class="content">
            <a href="poly/rpschool.php" class="title">Republic Polytechnic</a>
            <p>Republic Polytechnic is an institution of higher learning in Woodlands, Singapore. Founded in 2002, it was the first school system in Singapore to use the problem-based learning pedagogy for all its diploma programmes.</p>
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
<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>
</body>
</html>