<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact</title>
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
      <a class="navbar-brand" href="/"><img src="img/logoLamBot.png" class="img-responsive"><span>CTEST</span></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
      
      <!--nav icon--> 
      <a id="nav-icon"> <span></span> <span></span> <span></span> </a> 
      <!--nav icon end-->
      
      <ul id="nav-top" class="nav navbar-nav navbar-right">
        <li><a href="/" class="page-scroll">Home</a></li>
        <li><a href="/test" class="page-scroll">Test</a></li>
        <li><a href="/map" class="page-scroll">Map</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(img/codo.jpg);">
  <div class="content  wow fdeInUp">
    <div class="container ">
      <h1>Let's get a certificate!</h1>
    </div>
  </div>
</div>

<!--page body-->

<div id="page-body">
  <div class="container">
    <div class="row"> 
      <!--blog posts container-->
      <div class="col-md-offset-3 col-md-6 page-block">
        <h1>Commit yourself</h1>
        <h2>By filling in the next blank, you are committing yourself to taking action against the spread of COVID-19 by staying home and taking the necessary measures:</h2>
            <form method="post" action="sign" name="Certificate" style="padding-bottom:80px">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <div class="form-group">                    
                    <label for="exampleInputName">Name</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                    <!--<input type="email" class="form-control" id="exampleInputName" placeholder="Name">-->
                <!--</div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input id="Email" name="Email" type="text" class="form-control" placeholder="Email">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>-->
                <!--<div class="form-group">
                    <label for="exampleInputMessage">Comments</label>
                    <input id="Comment" name="Comment" type="text" class="form-control" placeholder="Comment">-->
                    <!--<textarea placeholder="Tell us something"></textarea>
                </div>-->
                <!--<div class="checkbox checkbox-success">
                    <input type="checkbox" value="yes" checked="">
                    <label> Send me a copy. </label>
                </div>-->
                <p>Note: your data will not be stored</p>
                <button type="submit" class="btn btn-primary">Get the certificate</button>
             </form>

      <!--blog posts container-->
   
    </div>
  </div>
 </div>
</div>
<div class="clearfix"></div> 
<footer id="bottom-footer">
  <div class="container">
    <div class="row wow fdeInUp">
      <div class="col-md-4 col-sm-4 col-xs-12"> 
        <!--copyright-->
        <!--<p class="copyright">© 2018. All rights reserved</p>-->
        <!--/copyright--> 
      </div>
      
      <!--powered by-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="social-link">
        <li><a href="https://www.youtube.com/user/LamBot3478"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://www.facebook.com/TeamLamBot3478"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/lambot3478/"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://github.com/FRCTeam3478/"><i class="fa fa-github"></i></a></li>
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