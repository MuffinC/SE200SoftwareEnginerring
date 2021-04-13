<?php  
    include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaching Website</title>

<!--Login + register-->
    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

<!-- header section starts  -->
<header>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="homepage.php" class="logo"><img src="images/KachingLogo_nowords.png"></a>
        <ul>
            <li class="active"><a href="homepage.php">home</a></li>
            <li class="navlist"><a href="subPages/aboutUs.php">about</a></li>
            <li class="navlist"><a href="subPages/courses.php">course</a>
            	<i class="fa fa-angle-down"></i>
                <nav class="navcourse">
                    <ul>
                       <li><a href="subPages/poly.php">Polytechnic</a></li>
                       <li><a href="subPages/jc.php">Junior Collegue</a></li>
                       <li><a href="subPages/uni.php">University</a></li>
                    </ul>
                </nav>
            </li>
            <li  class="navlist"><a href="subPages/internship.php">internship</a><i class="fa fa-angle-down"></i>
            	<nav class="navcourse">
                    <ul>
                       <li><a href="subPages/internship.php">Engineering</a></li>
                       <li><a href="subPages/internship.php">IT</a></li>
                       <li><a href="subPages/internship.php">Accounting</a></li>
                    </ul>
                </nav>
            </li>
            <li class="navlist"><a href="subPages/aptitude.php">aptitude</a></li>
            <li class="navlist"><a href="subPages/feedback.php">feedback</a></li>
        </ul>
        <div class="login-msg">
	        <div>Welcome <?php echo $_SESSION['username'];?></div>
			<a href="logout.php"> LOGOUT</a>
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

<!-- home section starts  -->
<section class="home" id="home">

	
	<div class="container">
        <img src="images/course.jpg" alt="">
    	<div class="content">
	        <a href="subPages/courses.php"><h3>Course</h3>
	        <p>We have collated the courses offered by various Universities, Polytechnics and Junior Colleges all for your viewing convenience. Discover them now!</p></a>
	        <a href="subPages/courses.php"><button class="btn">Learn more</button></a>
    	</div>
    </div>

	<div class="container">
        <img src="images/Internships.jpg" alt="">
    	<div class="content">
	        <a href="subPages/internship.php"><h3>Internship</h3>
	        <p>We have collated the courses offered by various companies all for your viewing convenience. Discover them now!</p></a>
	        <a href="subPages/internship.php"><button class="btn">Learn more</button></a>
    	</div>
    </div>

	<div class="container">
        <img src="images/aptitude.png" alt="">
    	<div class="content">
	        <a href="subPages/aptitude.php"><h3>Aptitude Test</h3>
	        <p>Try out our own aptitude test here! Find out what course you may be suitable for!</p></a>
	        <a href="subPages/aptitude.php"><button class="btn">Learn more</button></a>
    	</div>
    </div>

</section>
<!-- home section ends -->

<!-- footer section starts  -->

<div class="footer">

    <footer>
        <div class="footer-container2">
            <div class="container-foot2">
                    <a class="footer-button" href="subPages\tos.php">Terms of Service</a>
                    <a class="footer-button" href="subPages\pp.php">Privacy Policy</a>
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
                    <a class="footer-button2 fas fa-question-circle" href="subPages/faq.php" title="FAQ"></a>
            </div>
        </div>
    </footer>
</div>

<!-- Footer section end -->

<!-- <script src="js/searchBar.js"></script> -->
<script>
    $(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('subPages/poly/polydata.json', function(polydata) {
   var resp = polydata;
        for(kk in resp)
        {
                var j = resp[kk];
                for(k in j)
                {
                        var i = j[k];
                        for(key in i)
                        {
                            if (key.search(expression) != -1 || i[key].course_code.search(expression) != -1 || k.search(expression) != -1 || kk.search(expression) != -1) {
                                $('#result').append('<li class="list-group-item list-group"><strong class="courseHeader">'+kk+'</strong> | <strong class="courseHeader">'+k+'</strong> | <strong class="courseHeader">'+key+'</strong> | <strong class="courseHeader"> Year: '+i[key].year+'</strong> | <strong class="courseHeader"> Type: '+i[key].elr2b2_type+'</strong> | <strong class="courseHeader"> ELR2B2: '+i[key].elr2b2+'</strong> | <strong class="courseHeader"> Planned Intake: '+i[key].planned_intake+'</strong> | <span><strong class="courseHeader"> Course Code: '+i[key].course_code+'</strong></span> | <p>'+i[key].course_description+'</p> <a target="_blank" href = "'+i[key].reference+'"><em>Click Here to Learn More</em></a></li>');
                            }
                        }
                    
                }
            
        }
       
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});
</script>

<!-- custom js file link  -->
<!-- <script src="js/script.js"></script> -->

<script src="//code.tidio.co/k6sjn4zehamzr5plcq2lwzebmaktdfsk.js" async></script>
</body>
</html>
