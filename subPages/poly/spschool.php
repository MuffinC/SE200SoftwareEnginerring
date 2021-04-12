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
<section class="poly"> <!-- Change classes of poly, jc and uni to school? -->
<h1 class="page-header">Singapore Polytechnic</h1>    
<div class="box-container">
    <div class="box">
        <img src="images/Architecture-and-The-Built-Environment-sp.png" alt="TP Logo">
        <div class="content">
            <a href="#spabe" class="title">Architecture & the Built Environment</a>
            <p>ABE provides student-centred learning and broadbased training to encourage creativity and innovation.</p>
            <a class="LearnMoreLink center" href="#"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/business-sp.jpg" alt="NYP Logo">
        <div class="content">
            <a href="#tpb" class="title">Business</a>
            <p>School of Business is recognised for quality business education at the diploma level. Our diplomas are highly valued by employers and widely accredited by reputable universities globally for admission to accelerate degree programmes.</p>
            <a class="LearnMoreLink center" href="#"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/cs- sp.jpg" alt="RP Logo">
        <div class="content">
            <a href="#tpcls" class="title">Chemical & Life Sciences</a>
            <p>Students acquire relevant experience in chemicals and life sciences sectors through workbased learning.</p>
            <a class="LearnMoreLink center" href="#"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/computing-sp.png" alt="NP Logo">
        <div class="content">
            <a href="#tpc" class="title">Computing</a>
            <p>SoC trains IT progessionals to become key players in these growing job markets.</p>
            <a class="LearnMoreLink center" href="#"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/MAD-sp.jfif" alt="RP Logo">
        <div class="content">
            <a href="#tpmad" class="title">Media, Arts & Deisgn</a>
            <p>Nuturing the enxt wave of creative professionals to re-imagine possibilities, turn them into realitym and transform workplaces, communities and the world.</p>
            <a class="LearnMoreLink center" href="#"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/engineering-sp.jpg" alt="RP Logo">
        <div class="content">
            <a href="#tpmae" class="title">SP Engineering</a>
            <p>MAE has a proud tradition of excellence and a good national and international reputation.</p>
            <a class="LearnMoreLink center" href="#"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/martine -sp.jpg" alt="RP Logo">
        <div class="content">
            <a href="#tpsma" class="title">Singapore Maritime Academy</a>
            <p>SMA stands at the forefront of maritime education and training with sophisticated laboratories and workshops.</p>
            <a class="LearnMoreLink center" href="#"><em>Click Here to Learn More</em></a>
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