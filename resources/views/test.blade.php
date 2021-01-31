<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Page</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">
<link href="css/animate.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="style.css">
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="page">

<!-- Navigation
    ==========================================-->
<nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="/home"><img src="img/logo-top.png" class="img-responsive"><span>CTEST</span></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
      
      <!--nav icon--> 
      <a id="nav-icon"> <span></span> <span></span> <span></span> </a> 
      <!--nav icon end-->
      
      <ul id="nav-top" class="nav navbar-nav navbar-right">
        <li><a href="/home" class="page-scroll">Home</a></li>
        <li><a href="/test" class="page-scroll">Test</a></li>
        <li><a href="/map" class="page-scroll">Map</a></li>
        <li><a href="contact.html" class="page-scroll">Recommendations</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(img/photo-typo.jpg);">
  <div class="content  wow fdeInUp">
    <div class="container ">
      <h1>Let us know how can we help you </h1>
    </div>
  </div>
</div>

<!--page body-->

<div id="page-body">
  <div class="container">
    <div class="row wow fdeInUp"> 
      <!--blog posts container-->
      <div class="col-md-12 page-block">
        <h1>General information about</h1>
        <h3>For the next questions try to answer HONESTY and with the most suitable opcions according to your actual state. This information will help us to give you the best Recommendations</h3>
        <form action="/results"> <!--cambiar-->
          <h5>How old are you? </h5>
          <input type="radio" id="respuesta11" name="pregunta1" value="respuesta11">
          <label for="respuesta11">Under 18</label><br>
          <input type="radio" id="respuesta12" name="pregunta1" value="respuesta12">
          <label for="respuesta12">18 - 29 </label><br>
          <input type="radio" id="respuesta13" name="pregunta1" value="respuesta13">
          <label for="respuesta13">30 - 64</label><br>
          <input type="radio" id="respuesta14" name="pregunta1" value="respuesta14">
          <label for="respuesta14">65 or older</label><br>

          <h5>Do you suffer from a chronic disease, such as hypertension, diabetes, asthma, immunodeficiency, obesity/overweight, or anything related?</h5>
          <input type="radio" id="respuesta21" name="pregunta2" value="respuesta21">
          <label for="respuesta21">Yes</label><br>
          <input type="radio" id="respuesta22" name="pregunta2" value="respuesta22">
          <label for="respuesta22">No</label><br>

          <h5>Have you had contact with people or groups of people without the proper hygiene measures (face masks, physical distancing, and the like)?</h5>
          <input type="radio" id="respuesta32" name="pregunta3" value="respuesta31">
          <label for="respuesta31">Yes</label><br>
          <input type="radio" id="respuesta31" name="pregunta3" value="respuesta32">
          <label for="respuesta32">No</label><br>

          <h5>Have you interacted with people who have recently travelled?</h5>
          <input type="radio" id="respuesta41" name="pregunta4" value="respuesta41">
          <label for="respuesta41">Yes</label><br>
          <input type="radio" id="respuesta42" name="pregunta4" value="respuesta42">
          <label for="respuesta42">No</label><br>

          <h5>Have you spent time in a group setting (for example public event, school, concert, airport, public transport, or gym) over the last two weeks?</h5>
          <input type="radio" id="respuesta51" name="pregunta5" value="respuesta51">
          <label for="respuesta51">Yes</label><br>
          <input type="radio" id="respuesta52" name="pregunta5" value="respuesta52">
          <label for="respuesta52">No</label><br>

          <h5>Question 6: In the last two weeks, which of the following symptoms have you had?</h5>
          <input type="checkbox" id="respuesta61" name="respuesta61" value="r61">
          <label for="respuesta61">Fever or chills</label><br>
          <input type="checkbox" id="respuesta62" name="respuesta62" value="r62">
          <label for="respuesta62">Cough</label><br>
          <input type="checkbox" id="respuesta63" name="respuesta63" value="r63">
          <label for="respuesta63">Difficulty breathing</label><br>
          <input type="checkbox" id="respuesta64" name="respuesta64" value="r64">
          <label for="respuesta64">Fatigue</label><br>
          <input type="checkbox" id="respuesta65" name="respuesta65" value="r65">
          <label for="respuesta65">Headache</label><br>
          <input type="checkbox" id="respuesta66" name="respuesta66" value="r66">
          <label for="respuesta66">Loss of taste or smell</label><br>
          <input type="checkbox" id="respuesta67" name="respuesta67" value="r67">
          <label for="respuesta67">Body aches</label><br>
          <input type="checkbox" id="respuesta68" name="respuesta68" value="r68">
          <label for="respuesta68">Sore throat</label><br>
          <input type="checkbox" id="respuesta69" name="respuesta69" value="r69">
          <label for="respuesta69">Runny nose</label><br> 
          <input type="checkbox" id="respuesta610" name="respuesta610" value="r610">
          <label for="respuesta610">Nausea or vomiting</label><br>
          <input type="checkbox" id="respuesta611" name="respuesta611" value="r611">
          <label for="respuesta611">Diarrhea</label><br>
          <input type="checkbox" id="respuesta612" name="respuesta612" value="r612">
          <label for="respuesta612">Pain or pressure in the chest</label><br>
          <p>Thank you for your answers!</p><br><br> 
          <a href="/results"><button type="submit" class="btn btn-primary">Submit</a>
        </form>
      </div>
      <!--blog posts container-->
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<footer id="bottom-footer">
  <div class="container">
    <div class="row wow fdeInUp">
      <div class="col-md-4 col-sm-4 col-xs-12"> 
        <!--copyright-->
        <p class="copyright">© 2018. All rights reserved</p>
        <!--/copyright--> 
      </div>
      <!--bottom nav-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <nav class="bottom-nav">
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pricing</a></li>
          </ul>
        </nav>
      </div>
      <!--/bottom nav--> 
      
      <!--powered by-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="social-link">
        <li><a href="https://www.youtube.com/user/LamBot3478"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://www.facebook.com/TeamLamBot3478"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/lambot3478/"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://github.com/davidmtzt/FRC-LAMBOT3478"><i class="fa fa-github"></i></a></li>
        </ul>
      </div>
      <!--/powered by--> 
      
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script> 
<script src="js/wow.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script> 
<script>
new WOW().init();
</script>
</body>
</html>