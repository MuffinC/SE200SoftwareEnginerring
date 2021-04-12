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
<<<<<<< HEAD:subPages/jc.html
            <li><a class="navbutton" href="../homepage.php">Home</a></li>
            <li><a class="navbutton" href="aboutUs.html">About</a></li>
            <li><a class="navbutton active" href="courses.html">Courses</a></li>
            <li><a class="navbutton" href="internship.html">Internships</a></li>
            <li><a class="navbutton" href="aptitude.html">Aptitude Test</a></li>
            <li><a class="navbutton" href="feedback.php">Feedback</a></li>
            <li><a class="navbutton" href="searchbox.html">Live Search Box</a></li>
=======
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
>>>>>>> 50097a485d4e76e0ce4516738864ca95e2b7c59d:subPages/jc.php
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
            <a href="https://asrjc.moe.edu.sg/" class="title">Anderson Serangoon Junior College (ASRJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore expedita delectus natus alias quasi non!</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://asrjc.moe.edu.sg/academic-curriculum/';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/acjc_logo.png" alt="ACJC Logo">
        </p>
        <div class="content">
            <a href="https://acjc.moe.edu.sg/" class="title">Anglo-Chinese Junior College (ACJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, aliquid deserunt! Quos quibusdam neque at.</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://acjc.moe.edu.sg/ac-experience/academics/subjects';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/acjc_logo.png" alt="ASCI Logo">
        </p>
        <div class="content">
            <a href="https://www.acsindep.moe.edu.sg/" class="title">Anglo-Chinese IB Junior College (ACS(I))</a>
            <p>5Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus iste repellat fugit maxime fugiat vitae?</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://www.acsindep.moe.edu.sg/the-acs-independent-experience/integrated-programme/curriculum-overview/';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/cjc_logo.png" alt="CJC Logo">
        </p>
        <div class="content">
            <a href="https://cjc.moe.edu.sg/" class="title">Catholic Junior College (CJC)</a>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem fuga ex rerum et soluta sapiente.</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://cjc.moe.edu.sg/education';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/dunman_logo.png" alt="DHS Logo">
        </p>
        <div class="content">
            <a href="https://dunmanhigh.moe.edu.sg/" class="title">Dunman High School (DHS)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi consectetur enim quaerat aliquam inventore exercitationem?</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://dunmanhigh.moe.edu.sg/academic/';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/ejc_logo.png" alt="EJC Logo">
        </p>
        <div class="content">
            <a href="https://eunoiajc.moe.edu.sg/" class="title">Eunoia Junior College (EJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis magnam assumenda ratione voluptatibus vel!</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://eunoiajc.moe.edu.sg/curriculum/subject-combinations/';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/hci_logo.png" alt="HCI Logo">
        </p>
        <div class="content">
            <a href="https://www.hci.edu.sg/" class="title">Hwa Chong Junior College (HCI)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sit vel aliquam, reiciendis facilis sapiente.</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://www.hci.edu.sg/admissions/admissions-and-studies-high-school/academic-programmes';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/jpjc_logo.png" alt="JPJC Logo">
        </p>
        <div class="content">
            <a href="https://jpjc.moe.edu.sg/" class="title">  Jurong Pioneer Junior College (JPJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, commodi magnam laboriosam eaque harum maxime!</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://jpjc.moe.edu.sg/about-jpjc/subject-combination';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/nyjc_logo.png" alt="NYJC Logo">
        </p>
        <div class="content">
            <a href="https://nanyangjc.moe.edu.sg/" class="title">Nanyang Junior College (NYJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta saepe accusamus quae, nobis odit necessitatibus.</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://nanyangjc.moe.edu.sg/life-at-nyjc/academic-programmes/subjects-offered-in-nyjc/';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/njc_logo.png" alt="NJC Logo">
        </p>
        <div class="content">
            <a href="https://nationaljc.moe.edu.sg/" class="title">National Junior College (NJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolore quaerat quia, earum ducimus iure.</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://nationaljc.moe.edu.sg/curriculum/';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/ri_logo.jpg" alt="RI Logo">
        </p>
        <div class="content">
            <a href="http://www.ri.edu.sg/" class="title">Raffles Junior College (RI)</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque mollitia cum at molestias, ipsum nemo?</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='http://www.ri.edu.sg/learning-at-ri/year-5-6';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/rvhs_logo.png" alt="RVHS Logo">
        </p>
        <div class="content">
            <a href="https://rivervalleyhigh.moe.edu.sg/" class="title">River Valley Junior College (RVHS)</a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident cupiditate odit sit, quis ducimus alias?</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://rivervalleyhigh.moe.edu.sg/e-open-house/rvip/academic-programme';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/sajc_logo.gif" alt="SAJC Logo">
        </p>
        <div class="content">
            <a href="https://standrewsjc.moe.edu.sg/" class="title">Saint Andrew's Junior College (SAJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum officiis autem assumenda consequuntur numquam eveniet.</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://standrewsjc.moe.edu.sg/curriculum';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/sji_logo.png" alt="SJI Logo">
        </p>
        <div class="content">
            <a href="https://www.sji.edu.sg/" class="title">St. Joseph's Institution (SJI)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit voluptates repellendus et rem iure?</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://www.sji.edu.sg/programmes/academic-programmes';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/tmjc_logo.png" alt="TMJC Logo">
        </p>
        <div class="content">
            <a href="https://tmjc.moe.edu.sg/" class="title">  Tampines Meridian Junior College (TMJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod soluta ipsa pariatur praesentium cum!</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://tmjc.moe.edu.sg/our-curriculum/instructional-programmes';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/tjc_logo.png" alt="TJC Logo">
        </p>
        <div class="content">
            <a href="https://www.temasekjc.moe.edu.sg/" class="title">Temasek Junior College (TJC)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, temporibus! Voluptatibus nemo sit placeat facere!</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://www.temasekjc.moe.edu.sg/academic/subject-combinations';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/vjc_logo.png" alt="VJC Logo">
        </p>
        <div class="content">
            <a href="https://victoriajc.moe.edu.sg/" class="title">   Victoria Junior College (VJC)</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias odio dolorem totam deserunt quibusdam saepe?</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://victoriajc.moe.edu.sg/learn-like-a-victorian/academic-disciplines/';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/yijc_logo.png" alt="YIJC Logo">
        </p>
        <div class="content">
            <a href="https://yijc.moe.edu.sg/" class="title">Yishun Innova Junior College (YIJC)</a>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, itaque cupiditate. Debitis inventore reprehenderit corrupti?</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://yijc.moe.edu.sg/curriculum/yijc-prospectus-2021';">Click Here!</button> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/mi_logo.png" alt="MI Logo">
        </p>
        <div class="content">
            <a href="https://www.millenniainstitute.moe.edu.sg/" class="title">Millennia Institute (MI)</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus iste repellat fugit maxime fugiat vitae?</p>
            <p> <em>Want to find out more about their academic curriculum?</em> <button class="instiButton" onclick="window.location.href='https://www.millenniainstitute.moe.edu.sg/admission/subject-combination';">Click Here!</button> </p>
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