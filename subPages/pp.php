<?php  
    include("../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Privacy Policy</title>
	<!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/ppStyle.css">

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
            <li class="navlist"><a href="courses.php">course</a>
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
<section>
    <div class="container">
        <h1 class="page-header">Website Privacy Statement</h1>

        <p>1. Kaching Website is a private website created by students supported by government agency.</p>

        <p>2. We may use "cookies", where a small data file is sent to your browser to store and track information about you when you enter our websites. The cookie is used to track information such as the number of users and their frequency of use, profiles of users and their preferred sites. While this cookie can tell us when you enter our sites and which pages you visit, it cannot read data off your hard disk.</p>

        <p>3. You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>

        <p>4. If you provide us with personally identifiable data,</p>

        <ul>
            <li>We may share necessary data with other Government agencies, so as to serve you in the most efficient and effective way unless such sharing is prohibited by law.</li>
            <li>We will NOT share your Personal Data with non-Government entities, except where such entities have been authorised to carry out specific Government services.</li>
            <li>For your convenience, we may also display to you data you had previously supplied us or other Government agencies. This will speed up the transaction and save you the trouble of repeating previous submissions. Should the data be out-of-date, please supply us the latest data.NP's handling of personal data is appended in the table below.</li>
        </ul>

        <p>5. To safeguard your personal data, all electronic storage and transmission of personal data are secured with appropriate security technologies.</p>

        <p>6. This site may contain links to non-Government sites whose data protection and privacy practices may differ from ours. We are not responsible for the content and privacy practices of these other websites and encourage you to consult the privacy notices of those site.</p>

        <p>7. Please contact NP at np_qsm@np.edu.sg if you:</p>

        <ul>
            <li>have any enquiries or feedback on our data protection policies and procedures,</li>
            <li>need more information on or access to the data which you have provided to us in the past.</li>
        </ul>

        <h2>We Respect and Keep Your Data Safe</h2>

        <p>This website is guided by the Government ICT Security Policies on the Management and Use of IT services including the management of your Personal Data.</p>

        <div class="sub-container">
            <h1>HANDLING OF PERSONAL DATA</h1>

            <h2>Your Personal Data</h2>
            <p>Your Personal Data refers to any data from which you, as an individual, may be identified. This may include, but not limited to, your name, address, telephone numbers, email addresses, date of birth, gender, nationality, personal identification number, academic data, photographs and audio-visual material.</p>

            <h2>Collection of Personal Data</h2>
            <p>NP may collect your Personal Data in the following ways:.</p>
            <p>When you submit forms for or use any of NP's services such as courses, scholarships, financial assistance or events;
            When you interact with our customer service officers;
            When you provide feedback and request that we contact you.</p>

            <h2>Purposes for the Collection, Use and Disclosure of Your Personal Data</h2>
            <p>Generally, NP collects, uses and discloses your Personal Data for the following purposes:</p>

            <ul>
                <li>Administering, processing or responding to your requests or queries;</li>
                <li>Managing your relationship with the Polytechnic;</li>
                <li>Verifying your identity or matching any Personal Data held which relates to you;</li>
                <li>Collecting research data to inform and enhance quality of student learning experience and student development programs;</li>
                <li>Publishing in the Polytechnic's newsletters, publications, and marketing related materials;</li>
                <li>Enrolling you as an Alumni of the Polytechnic upon graduation;</li>
                <li>Facilitating your course of study and further studies;</li>
                <li>Complying with any applicable rules, laws and regulations, codes of practice or guidelines or to assist in law enforcement and investigations by relevant authorities; and/or</li>
                <li>Any other purposes relating to any of the above.</li>
            </ul>

            <p>Kaching will take reasonable steps to protect your data from unauthorised disclosure. Data will be securely disposed when the purpose has been met.</p>   
        </div>
    </div>
</section>



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
                    <a class="footer-button2 fas fa-paper-plane" href="subPages/feedback.php" title="Give us Feedback!"></a>
                    <a class="footer-button2 fas fa-question-circle" href="faq.php" title="FAQ"></a>
            </div>
        </div>
    </footer>
<script src="js/searchBar.js"></script>
<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>

</body>
</html>