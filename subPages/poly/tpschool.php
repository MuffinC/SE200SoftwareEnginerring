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
<h1 class="page-header">Temasek Polytechnic</h1>    
<div class="box-container">
    <div class="box">
        <img src="images/BUS-tp.png" alt="TP Business Logo">
        <div class="content">
            <a href="tpbizcourses.php" class="title">Business</a>
            <p> Discover a wide range of study areas that cover key sectors such as accountancy, media, F&B, tourism, law, logistics and marketing.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.tp.edu.sg/bus"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/engineering-tp.png" alt="TP Engineering Picture">
        <div class="content">
            <a href="tpengcourses.php" class="title">Engineering</a>
            <p>Receive broad-based training in core engineering areas while you specialise in exciting fields such as advanced manufacturing, aerospace, aviation, sustainable energy, integrated facility management or biomedical engineering, and get the versatility that will give you an edge in today’s digital economy!</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.tp.edu.sg/eng"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/as-tp.png" alt="TP Applied Sciences Picture">
        <div class="content">
            <a href="tpascourses.php" class="title">Applied Sciences</a>
            <p>To ensure our students stay relevant and competitive in a rapidly global world, our ability-driven curriculum strives to develop a future-oriented creator, lifelong learner and values-centred leader.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.tp.edu.sg/asc"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/it-tp.png" alt="TP Informatics & IT Picture">
        <div class="content">
            <a href="tpictcourses.php" class="title">Informatics & IT</a>
            <p>The influence of Information Technology (IT) is all around us - in mobile apps, e-Learning lessons, computer security applications and digital games. Here you will harness the power of IT to improve business processes, ensure efficiency and enrich lives.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.tp.edu.sg/iit"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/design-tp.png" alt="TP Design Picture">
        <div class="content">
            <a href="tpdescourses.php" class="title">Design</a>
            <p>Discover a comprehensive range of disciplines that will expose you to the emerging trends and concepts of the design world.</p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.tp.edu.sg/des"><em>Click Here to Learn More</em></a>
        </div>
    </div>

    <div class="box">
        <img src="images/hss-tp.png" alt="TP Humanities & Social Sciences Picture">
        <div class="content">
            <a href="tphsscourses.php" class="title">Humanities & Social Sciences</a>
            <p>From nurturing good values in our young to assisting our silver generation maintain a healthy and active lifestyle to understanding human behaviour, our focus is on people. </p>
            <a target="_blank" class="LearnMoreLink center" href="https://www.tp.edu.sg/hss"><em>Click Here to Learn More</em></a>
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