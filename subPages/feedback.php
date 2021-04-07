<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback</title>
	<!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/fbStyle.css">

</head>
<body>
<!-- header section starts  -->
<header>
    <div id="menu" class="fas fa-bars"></div>
    <a href="../index.html" class="logo"><img src="images/KachingLogo_nowords.png"></a>
    <nav class="navbar">
        <ul>
            <li><a class="navbutton" href="../index.html">home</a></li>
            <li><a class="navbutton" href="aboutUs.html">about</a></li>
            <li><a class="navbutton" href="courses.html">course</a></li>
            <li><a class="navbutton" href="internship.html">internship</a></li>
            <li><a class="navbutton" href="aptitude.html">aptitude</a></li>
            <li><a class="navbutton active" href="feedback.php">feedback</a></li>
        </ul>
    </nav>
    <div></div> <!-- For formatting -->
</header>
<!-- header section end-->

<!-- feedback section start-->
<section class="feedback">

<div class="row">
    <h1 class="page-header">FEEDBACK</h1>

    <form id="feedbkr" action="sendfeed.php" method="post">
        <div class="form-group">
        <h3>Email: </h3>
        <input type="email" name="email" placeholder="your email" class="box input-field" required>
        </div>

        <div class="form-group">
        <h3>Title: </h3>
        <input type="text" name="subject" placeholder="Subject" class="box input-field" required>
        </div>

        <div class="form-group">
        <h3>Feedback: </h3>
        <textarea type= "text" name="feedback" cols="30" rows="10" class="box input-field"required></textarea>
        </div>
        <input type="submit" class="btn" value="Send it!">

    </form>
<!--
    <div class="image">
        <img src="images/contact-img.png" alt="">
    </div>
-->

</div>

</section>

<!-- feedback section end  -->

<!-- footer section starts  -->

<div class="footer">

    <footer>
        <div class="footer-container2">
            <div class="container-foot2">
                    <a class="footer-button" href="tos.html">Terms of Service</a>
                    <a class="footer-button" href="pp.html">Privacy Policy</a>
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
                    <a class="footer-button2 fas fa-question-circle" href="faq.html" title="FAQ"></a>
            </div>
        </div>
    </footer>
</div>

<!-- Footer section end -->
<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>

</body>
</html>
