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
<h1 class="page-header">Nanyang Polytechnic</h1>    
<div class="box-container">
    <div class="box">
        <img src="images/BA-nyp.jpeg" alt="TP Logo">
        <div class="content">
            <a href="#nypbm" class="title">Business Management</a>
            <p>Today???s dynamic business world needs equally dynamic people to run it. Let our School of Business Management (SBM) mould you to become one of those people, with our wide range of diploma courses.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.nyp.edu.sg/schools/sbm.html"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/Engineer-nyp.jpeg" alt="NYP Logo">
        <div class="content">
            <a href="#nype" class="title">Engineering</a>
            <p>Expect an exciting line-up of engineering, science, and technology courses, all designed to ensure that you succeed in the industry and in further education.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.nyp.edu.sg/schools/seg.html"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/CLS-nyp.jpeg" alt="NP Logo">
        <div class="content">
            <a href="#nypcls" class="title">Applied Sciences</a>
            <p>Join us and be immersed in an enriching environment with experienced faculty, state-of-the-art facilities and a nurturing culture. Our lecturers hail from global pharmaceutical, food and chemical majors.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.nyp.edu.sg/schools/sas.html"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/IT-nyp.jpeg" alt="SP Logo">
        <div class="content">
            <a href="#nypit" class="title">Infocomation Technology</a>
            <p>With a quality education in IT or any of its sub-disciplines, you can explore a wide range of career opportunities in various sectors.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.nyp.edu.sg/schools/sit.html"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/Design-nyp.jpeg" alt="RP Logo">
        <div class="content">
            <a href="#nypd" class="title">Design</a>
            <p>Our ideation-based and design-forward practicum enables you to tackle 21st-century challenges with ease. By combining art, technology, and business, we develop your problem-solving abilities and help you deliver positive social impact through your work.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.nyp.edu.sg/schools/sdm.html"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/HSS-nyp.jpeg" alt="RP Logo">
        <div class="content">
            <a href="#nyphss" class="title">Health & Social Sciences</a>
            <p>You will study in a vibrant environment, where you will gain the knowledge and skills to emerge in the workplace as a competent and well-rounded healthcare or social service professional.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.nyp.edu.sg/schools/shss.html"><em>Click Here to Learn More</em></a>
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