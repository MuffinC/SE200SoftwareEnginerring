<?php  
    include("../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Junior Colleges</title>
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
        <div id="search-bar" class="col-sm-100">
            <!-- <h3 id="search-title"><strong>Data Search of Courses and Schools</strong></h3> -->
                <input type="text" name="search" id="search" placeholder="Search using course name, course code or school name" class="form-control">
            <ul class="list-group" id="result"></ul>
        </div>
    </div>
    <!-- Login Page section starts  -->
</header>
<!-- header section end-->

<!-- jc start-->
<section class = "jc" id="jc">

<h1 class="page-header">JUNIOR COLLEGE LISTING</h1>    

<div class="box-container">

    <div class="box">
        <p class="thumbnail">
            <img src="images/asrjc_logo.jpg" alt="ASRJC Logo">
        </p>
        <div class="content">
            <a href="#asrjc" class="title">Anderson Serangoon Junior College (ASRJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!.</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/acjc_logo.png" alt="ACJC Logo">
        </p>
        <div class="content">
            <a href="#acjc" class="title">Anglo-Chinese Junior College (ACJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/acjc_logo.png" alt="ASCI Logo">
        </p>
        <div class="content">
            <a href="#acsi" class="title">Anglo-Chinese IB Junior College (ACS(I))</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/cjc_logo.png" alt="CJC Logo">
        </p>
        <div class="content">
            <a href="#cjc" class="title">Catholic Junior College (CJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/dunman_logo.png" alt="DHS Logo">
        </p>
        <div class="content">
            <a href="#dhs" class="title">Dunman High School (DHS)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/ejc_logo.png" alt="EJC Logo">
        </p>
        <div class="content">
            <a href="#ejc" class="title">Eunoia Junior College (EJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/hci_logo.png" alt="HCI Logo">
        </p>
        <div class="content">
            <a href="#hci" class="title">Hwa Chong Junior College (HCI)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/jpjc_logo.png" alt="JPJC Logo">
        </p>
        <div class="content">
            <a href="#jpjc" class="title">  Jurong Pioneer Junior College (JPJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/nyjc_logo.png" alt="NYJC Logo">
        </p>
        <div class="content">
            <a href="#nyjc" class="title">Nanyang Junior College (NYJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/njc_logo.png" alt="NJC Logo">
        </p>
        <div class="content">
            <a href="#njc" class="title">National Junior College (NJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/ri_logo.jpg" alt="RI Logo">
        </p>
        <div class="content">
            <a href="#ri" class="title">Raffles Junior College (RI)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/rvhs_logo.png" alt="RVHS Logo">
        </p>
        <div class="content">
            <a href="#rvhs" class="title">River Valley Junior College (RVHS)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/sajc_logo.gif" alt="SAJC Logo">
        </p>
        <div class="content">
            <a href="#sajc" class="title">Saint Andrew's Junior College (SAJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/sji_logo.png" alt="SJI Logo">
        </p>
        <div class="content">
            <a href="#jci" class="title">St. Joseph's Institution (SJI)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/tmjc_logo.png" alt="TMJC Logo">
        </p>
        <div class="content">
            <a href="#tmjc" class="title">  Tampines Meridian Junior College (TMJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/tjc_logo.png" alt="TJC Logo">
        </p>
        <div class="content">
            <a href="#tjc" class="title">Temasek Junior College (TJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/vjc_logo.png" alt="VJC Logo">
        </p>
        <div class="content">
            <a href="#vjc" class="title">   Victoria Junior College (VJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/yijc_logo.png" alt="YIJC Logo">
        </p>
        <div class="content">
            <a href="#yijc" class="title">Yishun Innova Junior College (YIJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/mi_logo.png" alt="MI Logo">
        </p>
        <div class="content">
            <a href="#mi" class="title">Millennia Institute (MI)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
        </div>
    </div>
</div>
</section>
<!-- jc Page section end  -->

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