<?php  
    include("../auth.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Terms of Service</title>
	<!-- google fonts cdn link  -->
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/tosStyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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
        <h1 class="page-header">Website Terms and Conditions of Use</h1>

        <h2>1. Terms</h2>

        <p>By accessing this Website, accessible from https://muffinc.github.io/SE200SoftwareEnginerring/, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>

        <h2>2. Use License</h2>

        <p>Permission is granted to temporarily download one copy of the materials on Kaching's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>

        <ul>
            <li>modify or copy the materials;</li>
            <li>use the materials for any commercial purpose or for any public display;</li>
            <li>attempt to reverse engineer any software contained on Kaching's Website;</li>
            <li>remove any copyright or other proprietary notations from the materials; or</li>
            <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
        </ul>

        <p>This will let Kaching to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format. These Terms of Service has been created with the help of the <a href="https://www.termsofservicegenerator.net">Terms Of Service Generator</a> and the <a href="https://www.generateprivacypolicy.com">Privacy Policy Generator</a>.</p>

        <h2>3. Disclaimer</h2>

        <p>All the materials on Kaching’s Website are provided "as is". Kaching makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, Kaching does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>

        <h2>4. Limitations</h2>

        <p>Kaching or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on Kaching’s Website, even if Kaching or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>

        <h2>5. Revisions and Errata</h2>

        <p>The materials appearing on Kaching’s Website may include technical, typographical, or photographic errors. Kaching will not promise that any of the materials in this Website are accurate, complete, or current. Kaching may change the materials contained on its Website at any time without notice. Kaching does not make any commitment to update the materials.</p>

        <h2>6. Links</h2>

        <p>Kaching has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by Kaching of the site. The use of any linked website is at the user’s own risk.</p>

        <h2>7. Site Terms of Use Modifications</h2>

        <p>Kaching may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>

        <h2>8. Your Privacy</h2>

        <p>Please read our Privacy Policy.</p>

        <h2>9. Governing Law</h2>

        <p>Any claim related to Kaching's Website shall be governed by the laws of sg without regards to its conflict of law provisions.</p>
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
                    <a class="footer-button2 fas fa-paper-plane" href="feedback.php" title="Give us Feedback!"></a>
                    <a class="footer-button2 fas fa-question-circle" href="faq.php" title="FAQ"></a>
            </div>
        </div>
    </footer>
<script src="js/searchBar.js"></script>
<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>

</body>
</html>