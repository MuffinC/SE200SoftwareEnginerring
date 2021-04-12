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
        <div id="search-bar" class="col-sm-100">
            <!-- <h3 id="search-title"><strong>Data Search of Courses and Schools</strong></h3> -->
                <input type="text" name="search" id="search" placeholder="Search using course name, course code or school name" class="form-control">
            <ul class="list-group" id="result"></ul>
        </div>
    </div>
    <!-- Login Page section starts  -->

</header>
<!-- header section end-->

<!-- uni Page section starts  -->
<section class="uni">
<h1 class="page-header">LOCAL UNIVERSITY LISTING</h1>    
<div class="box-container">
    <div class="box">
        <img src="images/ntu_logo.png" alt="NTU Logo">
        <div class="content">
            <a target="_blank" href="https://www.ntu.edu.sg/" class="title">Nanyang Technological University (NTU)</a>
        	<ul>
	            <li><a target="_blank" class="programme" href="https://www.ntu.edu.sg/business">College of Business</a></li>
	            <li><a target="_blank" class="programme" href="https://www.ntu.edu.sg/engineering">College of Engineering</a></li>
	            <li><a target="_blank" class="programme" href="https://www.ntu.edu.sg/hass">College of Humanities, Arts & Social Sciences</a></li>
	            <li><a target="_blank" class="programme" href="https://www.ntu.edu.sg/science">College of Science</a></li>
	            <li><a target="_blank" class="programme" href="https://www.ntu.edu.sg/medicine">Lee Kong Chian School of Medicine</a></li>
	            <li><a target="_blank" class="programme" href="https://www.rsis.edu.sg/">S. Rajaratnam School of International Studies</a></li>
	            <li><a target="_blank" class="programme" href="https://nie.edu.sg/">National Institute of Education</a></li>
	            <li><a target="_blank" class="programme" href="https://www.ntu.edu.sg/admissions/undergraduate-programmes?listingKeyword=&disciplines=all&programmelevels=double-major&programmetypes=all&page=1">Double Majors Programmes</a></li>
	            <li><a target="_blank" class="programme" href="https://www.ntu.edu.sg/admissions/undergraduate-programmes?listingKeyword=&disciplines=all&programmelevels=double-degree&programmetypes=all&page=1">Double Degree Programmes</a></li>
	            <li><a target="_blank" class="programme" href="https://www.ntu.edu.sg/admissions/undergraduate-programmes?listingKeyword=&disciplines=all&programmelevels=all&programmetypes=part-time&page=1">Part-Time Programmes</a></li>
        	</ul>
        </div>
    </div>

    <div class="box">
        <img src="images/nus_logo.jpg" alt="NUS Logo">
        <div class="content">
            <a target="_blank" href="https://www.nus.edu.sg/" class="title">National University of Singapore (NUS)</a>
	        <ul>
	            <li><a target="_blank" class="programme" href="https://chs.nus.edu.sg/">College of Humanities and Sciences</a></li>
	            <li><a target="_blank" class="programme" href="https://bschool.nus.edu.sg/">Business & Accountancy</a></li>
	            <li><a target="_blank" class="programme" href="https://www.comp.nus.edu.sg/">Computing</a></li>
	            <li><a target="_blank" class="programme" href="https://www.dentistry.nus.edu.sg/">Dentistry</a></li>
	            <li><a target="_blank" class="programme" href="https://www.sde.nus.edu.sg/">Design & Environment</a></li>
	            <li><a target="_blank" class="programme" href="https://www.eng.nus.edu.sg/">Engineering</a></li>
	            <li><a target="_blank" class="programme" href="https://law.nus.edu.sg/">Law</a></li>
	            <li><a target="_blank" class="programme" href="https://medicine.nus.edu.sg/">Medicine</a></li>
	            <li><a target="_blank" class="programme" href="https://medicine.nus.edu.sg/nursing/">Nursing</a></li>
	            <li><a target="_blank" class="programme" href="https://pharmacy.nus.edu.sg/">Pharmacy</a></li>
	            <li><a target="_blank" class="programme" href="https://www.ystmusic.nus.edu.sg/">Music</a></li>
	            <li><a target="_blank" class="programme" href="https://www.nus.edu.sg/oam/docs/default-source/admissions/a-dmp.pdf">Double Majors Programmes</a></li>
	            <li><a target="_blank" class="programme" href="https://www.nus.edu.sg/registrar/academic-information-policies/undergraduate-students/special-programmes/double-degree-programmes">Double Degree Programmes</a></li>
	            <li><a target="_blank" class="programme" href="https://scale.nus.edu.sg/programmes/undergraduate-programmes">Part-Time Programmes</a></li>
	        </ul>
        </div>
    </div>

    <div class="box">
        <img src="images/sit_logo.png" alt="SIT Logo">
        <div class="content">
            <a target="_blank" href="https://www.singaporetech.edu.sg/" class="title">Singapore Institute of Technology (SIT)</a>
	        <ul>
	            <li><a target="_blank" class="programme" href="https://www.singaporetech.edu.sg/undergraduate-programmes/engineering">Engineering</a></li>
	            <li><a target="_blank" class="programme" href="https://www.singaporetech.edu.sg/undergraduate-programmes/chemical-engineering-and-food-technology">Chemical Engineering and Food Technology</a></li>
	            <li><a target="_blank" class="programme" href="https://www.singaporetech.edu.sg/undergraduate-programmes/infocomm-technology">Infocomm Technology</a></li>
	            <li><a target="_blank" class="programme" href="https://www.singaporetech.edu.sg/undergraduate-programmes/health-and-social-sciences">Health and Social Sciences</a></li>
	            <li><a target="_blank" class="programme" href="https://www.singaporetech.edu.sg/undergraduate-programmes/design-and-specialised-businesses">Design and Specialised Businesses</a></li>
	            <li><a target="_blank" class="programme" href="https://sitlearn.singaporetech.edu.sg/">Part-Time Programmes</a></li>
	        </ul>
        </div>
    </div>

    <div class="box">
        <img src="images/smu_logo.png" alt="SMU Logo">
        <div class="content">
            <a target="_blank" href="https://www.smu.edu.sg/" class="title">Singapore Management University (SMU)</a>
	        <ul>
	            <li><a target="_blank" class="programme" href="https://admissions.smu.edu.sg/programmes/school-accountancy/school-accountancy">School of Accountancy</a></li>
	            <li><a target="_blank" class="programme" href="https://admissions.smu.edu.sg/programmes/lee-kong-chian-school-business/lee-kong-chian-school-business">Lee Kong Chian School of Business</a></li>
	            <li><a target="_blank" class="programme" href="https://admissions.smu.edu.sg/programmes/yong-pung-how-school-law/yong-pung-how-school-law">School of Law</a></li>
	            <li><a target="_blank" class="programme" href="https://admissions.smu.edu.sg/programmes/school-economics/school-economics">School of Economics</a></li>
	            <li><a target="_blank" class="programme" href="https://admissions.smu.edu.sg/programmes/school-computing-and-information-systems/school-computing-and-information-systems-0">School of Computing and Information Systems</a></li>
	            <li><a target="_blank" class="programme" href="https://admissions.smu.edu.sg/programmes/school-social-sciences/school-social-sciences">School of Social Sciences</a></li>
	        </ul>
        </div>
    </div>

    <div class="box">
        <img src="images/suss_logo.jpg" alt="SUSS Logo">
        <div class="content">
            <a target="_blank" href="https://www.suss.edu.sg/" class="title">Singapore University of Social Sciences (SUSS)</a>
	          <ul>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-accountancy-ftacc">Bachelor of Accountancy</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-early-childhood-education-with-minor-ftece">Bachelor of Early Childhood Education with Minor</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-human-resource-management-with-minor-fthrm">Bachelor of Human Resource Management with Minor</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-public-safety-and-security-ftpss">Bachelor of Public Safety and Security with Minor</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-science-in-business-analytics-with-minor-ftbsba">Bachelor of Science in Business Analytics with Minor</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-science-in-finance-with-minor-ftfnce">Bachelor of Science in Finance with Minor</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-science-in-marketing-with-minor-ftmktg">Bachelor of Science in Marketing with Minor</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-science-in-supply-chain-management-with-minor-ftscm">
	            Bachelor of Science in Supply Chain Management with Minor</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/programmes/detail/bachelor-of-social-work-with-minor-ftswk">Bachelor of Social Work with Minor</a></li>
	            <li><a target="_blank" class="programme" href="https://www.suss.edu.sg/part-time-undergraduate?utm_source=suss_website&utm_medium=homepage&utm_campaign=homepage_card_part_time_undergraduate&utm_content=part_time_undergraduate">Part-Time Programmes</a></li>
	        </ul>
        </div>
    </div>

    <div class="box">
        <img src="images/sutd_logo.png" alt="SUTD Logo">
        <div class="content">
            <a target="_blank" href="https://www.sutd.edu.sg/" class="title">Singapore University of Technology and Design (SUTD)</a>
        </div>
        <div class="subcontent">
			<ul>
	            <li><a target="_blank" class="programme" href="https://asd.sutd.edu.sg/programme/bachelor-of-science-architecture-and-sustainable-design/">Architecture and Sustainable Design</a></li>
	            <li><a target="_blank" class="programme" href="https://dai.sutd.edu.sg/">Design and Artificial Intelligence</a></li>
	            <li><a target="_blank" class="programme" href="https://epd.sutd.edu.sg/education/undergraduate/curriculum-structure/">Engineering Product Development</a></li>
	            <li><a target="_blank" class="programme" href="https://esd.sutd.edu.sg/academics/undergraduate-programme/">Engineering Systems and Design</a></li>
	            <li><a target="_blank" class="programme" href="https://istd.sutd.edu.sg/education/undergraduate/curriculum-overview/">Information Systems Technology and Design</a></li>
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