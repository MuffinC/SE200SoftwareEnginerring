<?php  
    include("../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grades</title>
	<!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <link rel="stylesheet" href="css/subStyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<!-- ABOUT US section starts  (need to shift the image to the right, also take group photo)-->
<section>
	<div class="form-box grades-container" style="border: 2px solid purple;">
		
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="l1r4()">L1R4</button>
            <button type="button" class="toggle-btn" onclick="l1r5()">L1R5</button>
        </div>
		<form id="l1r4" class="input-group">
            <h1 class="grade-head"> Enter L1R4 Results </h1>
            <div class="subject-box">
                <select class="form-select s1" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
                <select class="form-select s2" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
                <select class="form-select s3" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
                <select class="form-select s4" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
            </div>
            <div class="grade-box">
                <select class="form-select g1" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
                <select class="form-select g2" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
                <select class="form-select g3" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
                <select class="form-select g4" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
            </div>
        </form>

        <form id="l1r5" class="input-group">
            <h1 class="grade-head"> Enter L1R5 Results </h1>
            <div class="subject-box">
                <select class="form-select s1" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
                <select class="form-select s2" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
                <select class="form-select s3" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
                <select class="form-select s4" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
                <select class="form-select s5" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Subject</option>
                    <option value="1">English</option>
                    <option value="2">Mathematics</option>
                    <option value="3">Additional Mathematics</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">Biology</option>
                    <option value="7">Geography</option>
                    <option value="8">History</option>
                    <option value="9">Social Studies</option>
                    <option value="10">Chinese</option>
                </select>
            </div>
            <div class="grade-box">
                <select class="form-select g1" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
                <select class="form-select g2" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
                <select class="form-select g3" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
                <select class="form-select g4" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
                <select class="form-select g5" aria-label="Default select example" style="border: 1px solid black;">
                    <option selected>Grade</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B3</option>
                    <option value="4">B4</option>
                    <option value="5">C5</option>
                    <option value="6">C6</option>
                    <option value="7">D7</option>
                    <option value="8">F</option>
                </select>
            </div>
        </form>
	</div>

</section>
<!-- ABOUT US section END  -->

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

<script>
    var x = document.getElementById("l1r4");
    var y = document.getElementById("l1r5");
    var z = document.getElementById("btn");

    function l1r5(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
    }
    function l1r4(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
    }

</script>

<!-- Footer section end -->
<script src="../js/searchBar.js"></script>

<script src="../js/script.js"></script>

<script src="../js/jquery-3.6.0.js"></script>

<!-- Help bot -->
<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>

</body>
</html>