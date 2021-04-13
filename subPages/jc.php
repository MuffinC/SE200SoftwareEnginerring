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
            <a target="_blank" href="https://asrjc.moe.edu.sg/" class="title">Anderson Serangoon Junior College (ASRJC)</a>
            <p>Anderson Serangoon Junior College is a junior college located in Yio Chu Kang, Singapore, offering two-year pre-university courses leading to the Singapore-Cambridge GCE Advanced Level examinations. ASRJC has been affirmed as one of the leading junior colleges in Singapore for value-added academic performances.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href ="https://asrjc.moe.edu.sg/academic-curriculum/">Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/acjc_logo.png" alt="ACJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://acjc.moe.edu.sg/" class="title">Anglo-Chinese Junior College (ACJC)</a>
            <p>Anglo-Chinese Junior College is a junior college in Singapore that offers a two-year pre-university programme leading to the Singapore-Cambridge GCE Advanced Level examination.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href="https://acjc.moe.edu.sg/ac-experience/academics/subjects">Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/acjc_logo.png" alt="ASCI Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://www.acsindep.moe.edu.sg/" class="title">Anglo-Chinese IB Junior College (ACS(I))</a>
            <p>Anglo-Chinese School (Independent) is a Methodist school in Singapore. Founded in 1886 by the Rev William Fitzjames Oldham, it was recognised as an IB World School in 2005, and has since consistently ranked among the top 3 schools worldwide that offer the IB Diploma Programme.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://www.acsindep.moe.edu.sg/the-acs-independent-experience/integrated-programme/curriculum-overview/'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/cjc_logo.png" alt="CJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://cjc.moe.edu.sg/" class="title">Catholic Junior College (CJC)</a>
            <p>Catholic Junior College is a junior college in Singapore, offering a two-year course for pre-university students leading to the Singapore-Cambridge GCE Advanced Level examination. Founded in 1975, Catholic Junior College was the third junior college to be established in Singapore.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://cjc.moe.edu.sg/education'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/dunman_logo.png" alt="DHS Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://dunmanhigh.moe.edu.sg/" class="title">Dunman High School (DHS)</a>
            <p>Dunman High School is an autonomous co-educational secondary school with its current campus situated in Kallang, Singapore, offering the Integrated Programme and the Special Assistance Plan. It was originally located in West Kallang.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://dunmanhigh.moe.edu.sg/academic/'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/ejc_logo.png" alt="EJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://eunoiajc.moe.edu.sg/" class="title">Eunoia Junior College (EJC)</a>
            <p>Eunoia Junior College is a junior college in Singapore which offers Integrated Programme with Catholic High School, Singapore Chinese Girls' School and CHIJ Saint Nicholas Girls' School. It is located in Bishan, close to Bright Hill MRT station and Bishan MRT station. </p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://eunoiajc.moe.edu.sg/curriculum/subject-combinations/'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/hci_logo.png" alt="HCI Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://www.hci.edu.sg/" class="title">Hwa Chong Junior College (HCI)</a>
            <p>Hwa Chong Institution is an independent institution in Singapore offering secondary and pre-university education.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://www.hci.edu.sg/admissions/admissions-and-studies-high-school/academic-programmes'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/jpjc_logo.png" alt="JPJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://jpjc.moe.edu.sg/" class="title">  Jurong Pioneer Junior College (JPJC)</a>
            <p>Jurong Pioneer Junior College is a junior college in Singapore offering a two-year pre-university course leading up to the Singapore-Cambridge GCE Advanced Level examination. The college is was formed from the merger of Jurong Junior College and Pioneer Junior College in January 2019. </p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://jpjc.moe.edu.sg/about-jpjc/subject-combination'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/nyjc_logo.png" alt="NYJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://nanyangjc.moe.edu.sg/" class="title">Nanyang Junior College (NYJC)</a>
            <p>Nanyang Junior College is a junior college in Singapore next to Lorong Chuan MRT station, offering two-year pre-university courses leading up to the GCE Advanced Level examinations.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" onclick="window.location.href='https://nanyangjc.moe.edu.sg/life-at-nyjc/academic-programmes/subjects-offered-in-nyjc/';">Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/njc_logo.png" alt="NJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://nationaljc.moe.edu.sg/" class="title">National Junior College (NJC)</a>
            <p>National Junior College is the first junior college to be established in Singapore. Founded on 20 January 1969, National Junior College offers a two-year course for pre-university students and a six-year Integrated Programme, both leading up to the Singapore-Cambridge GCE Advanced Level qualification. </p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://nationaljc.moe.edu.sg/curriculum/'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/ri_logo.jpg" alt="RI Logo">
        </p>
        <div class="content">
            <a target="_blank" href="http://www.ri.edu.sg/" class="title">Raffles Junior College (RI)</a>
            <p>The former Raffles Junior College was a junior college in Singapore offering pre-university education. The college was founded in 1982 following a separation from the pre-university section of Raffles Institution. Raffles Junior College was merged as the college section of Raffles Institution on 1 January 2009.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='http://www.ri.edu.sg/learning-at-ri/year-5-6'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/rvhs_logo.png" alt="RVHS Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://rivervalleyhigh.moe.edu.sg/" class="title">River Valley Junior College (RVHS)</a>
            <p>River Valley High School is an autonomous educational institution that offers the Integrated Programme in Singapore. Founded in 1956, one of the Special Assistance Plan high schools designated by the Ministry of Education in recognition of its heritage and excellence in education.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://rivervalleyhigh.moe.edu.sg/e-open-house/rvip/academic-programme'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/sajc_logo.gif" alt="SAJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://standrewsjc.moe.edu.sg/" class="title">Saint Andrew's Junior College (SAJC)</a>
            <p>St. Andrew's Junior College is a junior college in Singapore, offering two-year pre-university courses leading up to the Singapore-Cambridge GCE Advanced Level examination. It is an Anglican mission school, part of St. Andrew's School.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://standrewsjc.moe.edu.sg/curriculum'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/sji_logo.png" alt="SJI Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://www.sji.edu.sg/" class="title">St. Joseph's Institution (SJI)</a>
            <p>St. Joseph's Institution is a Catholic secondary school for boys in Singapore. Founded in 1852 by the De La Salle Brothers, it is the first Catholic school and the third-oldest secondary school in Singapore.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://www.sji.edu.sg/programmes/academic-programmes'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/tmjc_logo.png" alt="TMJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://tmjc.moe.edu.sg/" class="title">  Tampines Meridian Junior College (TMJC)</a>
            <p>Meridian Junior College was a junior college in Singapore, offering two-year pre-university courses leading up to the Singapore-Cambridge GCE Advanced Level examination. Situated in the eastern residential estate of Pasir Ris, it is the sixteenth junior college established in Singapore.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://tmjc.moe.edu.sg/our-curriculum/instructional-programmes'>Click Here!</a </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/tjc_logo.png" alt="TJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://www.temasekjc.moe.edu.sg/" class="title">Temasek Junior College (TJC)</a>
            <p>Temasek Junior College is a Junior College located on the eastern side of Singapore that offers a 6 years Integrated Programme alongside the 2 year GCE Advanced Level curriculum.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://www.temasekjc.moe.edu.sg/academic/subject-combinations'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/vjc_logo.png" alt="VJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://victoriajc.moe.edu.sg/" class="title">   Victoria Junior College (VJC)</a>
            <p>Victoria Junior College is a coeducational junior college in Singapore offering pre-university education to boarding and day-students. The school was founded in 1984, although its predecessor and affiliated institution, Victoria School, was founded in 1876.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://victoriajc.moe.edu.sg/learn-like-a-victorian/academic-disciplines/'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/yijc_logo.png" alt="YIJC Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://yijc.moe.edu.sg/" class="title">Yishun Innova Junior College (YIJC)</a>
            <p>Yishun Innova Junior College is one of the 14 junior colleges in Singapore, offering two-year pre-university programmes for students who graduate from secondary schools after their O-level examinations. The two-year A-Level programme prepares students for education in local or foreign universities.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://yijc.moe.edu.sg/curriculum/yijc-prospectus-2021'>Click Here!</a> </p>
        </div>
    </div>

    <div class="box">
        <p class="thumbnail">
            <img src="images/mi_logo.png" alt="MI Logo">
        </p>
        <div class="content">
            <a target="_blank" href="https://www.millenniainstitute.moe.edu.sg/" class="title">Millennia Institute (MI)</a>
            <p>Millennia Institute is a centralised institute in Singapore offering three-year pre-university education. It is currently the only pre-university centre to offer the Commerce stream apart from the traditional arts and science streams offered by pre-university institutions.</p>
            <p class="jc-curr"> <em>Want to find out more about their academic curriculum?</em> <a class="instiButton" target="_blank" href='https://www.millenniainstitute.moe.edu.sg/admission/subject-combination'>Click Here!</a> </p>
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