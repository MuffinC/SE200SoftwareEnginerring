<?php  
    include("../../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerospace Internships Directory</title>
    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="css/polyCourseStyle.css">

    <!-- ajax/jQuery library dependency cdn link -->
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
<section> 
    <h1 class="page-header">Aerospace Internships Directory</h1>
    <div class="courseDir">
        <ul id="courseData"></ul>
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

<script>
    $.getJSON('internshipData.json', function (internshipData) {
        var resp = internshipData;
        for(kk in resp)
        {
            if(kk=="Aerospace")
            {
                var j = resp[kk];
                for(k in j)
                {
                        var i = j[k];
                        for(key in i)
                        {
                            $('#courseData').append('<li class="list-group-item list-group"><strong class="courseHeader"> Company Name:'+k+'</strong> | <strong class="courseHeader"> Position Name:'+key+'</strong> | <strong class="courseHeader"> Duration: '+i[key].Duration+'</strong> | <strong class="courseHeader"> Qualification: '+i[key].Qualification+'</strong> | <p>'+i[key].Job_Description+'</p></li>');
                        }
                    
                }
            }
        }
    });
</script>

</html>