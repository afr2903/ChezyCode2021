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
        <h3>For the next questions try to answer honestly and with the most suitable opcions according to your actual state. This information will help us to give you the best recomendations</h3>
        <form action="results" method="POST"> <!--cambiar-->
          <h5>Question 1</h5>
          <input type="checkbox" id="respuesta11" name="respuesta11" value="r11">
          <label for="respuesta11"> r1</label><br>
          <input type="checkbox" id="respuesta12" name="respuesta12" value="r12">
          <label for="respuesta12"> r2</label><br>
          <input type="checkbox" id="respuesta13" name="respuesta13" value="r13">
          <label for="respuesta13"> r3</label><br>
          <input type="checkbox" id="respuesta14" name="respuesta14" value="r14">
          <label for="respuesta14"> r4</label><br>

          <h5>Question 2</h5>
          <input type="radio" id="respuesta21" name="pregunta2" value="respuesta21">
          <label for="respuesta21">r1</label><br>
          <input type="radio" id="respuesta22" name="pregunta2" value="respuesta22">
          <label for="respuesta22">r2</label><br>
          <input type="radio" id="respuesta23" name="pregunta2" value="respuesta23">
          <label for="respuesta23">r3</label><br>
          <input type="radio" id="respuesta24" name="pregunta2" value="respuesta24">
          <label for="respuesta24">r4</label><br>

          <h5>Question 3</h5>
          <input type="checkbox" id="respuesta31" name="respuesta31" value="r31">
          <label for="respuesta31"> r1</label><br>
          <input type="checkbox" id="respuesta32" name="respuesta32" value="r32">
          <label for="respuesta32"> r2</label><br>
          <input type="checkbox" id="respuesta33" name="respuesta33" value="r33">
          <label for="respuesta33"> r3</label><br>
          <input type="checkbox" id="respuesta34" name="respuesta34" value="r34">
          <label for="respuesta34"> r4</label><br>

          <h5>Question 4</h5>
          <input type="radio" id="respuesta41" name="pregunta4" value="respuesta41">
          <label for="respuesta41">r1</label><br>
          <input type="radio" id="respuesta42" name="pregunta4" value="respuesta42">
          <label for="respuesta42">r2</label><br>
          <input type="radio" id="respuesta43" name="pregunta4" value="respuesta43">
          <label for="respuesta43">r3</label><br>
          <input type="radio" id="respuesta44" name="pregunta4" value="respuesta44">
          <label for="respuesta44">r4</label><br>

          <h5>Question 5</h5>
          <input type="checkbox" id="respuesta51" name="respuesta51" value="r51">
          <label for="respuesta51"> r1</label><br>
          <input type="checkbox" id="respuesta52" name="respuesta52" value="r52">
          <label for="respuesta52"> r2</label><br>
          <input type="checkbox" id="respuesta53" name="respuesta53" value="r53">
          <label for="respuesta53"> r3</label><br>
          <input type="checkbox" id="respuesta54" name="respuesta54" value="r54">
          <label for="respuesta54"> r4</label><br>

          <h5>Question 6</h5>
          <input type="radio" id="respuesta61" name="pregunta6" value="respuesta61">
          <label for="respuesta61">r1</label><br>
          <input type="radio" id="respuesta62" name="pregunta6" value="respuesta62">
          <label for="respuesta62">r2</label><br>
          <input type="radio" id="respuesta63" name="pregunta6" value="respuesta63">
          <label for="respuesta63">r3</label><br>
          <input type="radio" id="respuesta64" name="pregunta6" value="respuesta64">
          <label for="respuesta64">r4</label><br>

          <h5>Question 7</h5>
          <input type="checkbox" id="respuesta71" name="respuesta71" value="r71">
          <label for="respuesta71"> r1</label><br>
          <input type="checkbox" id="respuesta72" name="respuesta72" value="r72">
          <label for="respuesta72"> r2</label><br>
          <input type="checkbox" id="respuesta73" name="respuesta73" value="r73">
          <label for="respuesta73"> r3</label><br>
          <input type="checkbox" id="respuesta74" name="respuesta74" value="r74">
          <label for="respuesta74"> r4</label><br>

          <h5>Question 8</h5>
          <input type="radio" id="respuesta81" name="pregunta8" value="respuesta81">
          <label for="respuesta81">r1</label><br>
          <input type="radio" id="respuesta82" name="pregunta8" value="respuesta82">
          <label for="respuesta82">r2</label><br>
          <input type="radio" id="respuesta83" name="pregunta8" value="respuesta83">
          <label for="respuesta83">r3</label><br>
          <input type="radio" id="respuesta84" name="pregunta8" value="respuesta84">
          <label for="respuesta84">r4</label><br>

          <h5>Question 9</h5>
          <input type="checkbox" id="respuesta91" name="respuesta91" value="r91">
          <label for="respuesta91"> r1</label><br>
          <input type="checkbox" id="respuesta92" name="respuesta92" value="r92">
          <label for="respuesta92"> r2</label><br>
          <input type="checkbox" id="respuesta93" name="respuesta93" value="r93">
          <label for="respuesta93"> r3</label><br>
          <input type="checkbox" id="respuesta94" name="respuesta94" value="r94">
          <label for="respuesta94"> r4</label><br>

          <h5>Question 10</h5>
          <input type="radio" id="respuesta101" name="pregunta10" value="respuesta101">
          <label for="respuesta101">r1</label><br>
          <input type="radio" id="respuesta102" name="pregunta10" value="respuesta102">
          <label for="respuesta102">r2</label><br>
          <input type="radio" id="respuesta103" name="pregunta10" value="respuesta103">
          <label for="respuesta103">r3</label><br>
          <input type="radio" id="respuesta104" name="pregunta10" value="respuesta104">
          <label for="respuesta104">r4</label><br><br>
          <p>Thanks for answering</p>
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