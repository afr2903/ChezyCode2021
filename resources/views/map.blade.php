<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <a class="navbar-brand" href="/home"><img src="img/logoLamBot.png" class="img-responsive"><span>CTEST</span></a> </div>
        
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
    <div id="page-banner" style="background-image: url(img/M2.png);">
      <div class="content  wow fdeInUp">
        <div class="container ">
          <h1>Heat Map </h1>
          <h3 style="color:white">This heat map helps us to scheme the geological distribution of the people who have taken our test, as well as their results. As you can see, people are getting more aware of the current situation of COVID-19 and how to take action against the spread of this disease.</h3>
        </div>
      </div>
    </div>
    <title>Heatmaps</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGUqu0xbN4fcwCd09XqLjIwEOhRMjCYgE&callback=initMap&libraries=visualization&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: "Roboto", "sans-serif";
        line-height: 30px;
        padding-left: 10px;
      }

      #floating-panel {
        background-color: #fff;
        border: 1px solid #999;
        left: 25%;
        padding: 5px;
        position: absolute;
        top: 10px;
        z-index: 5;
      }
    </style>

    <link rel="stylesheet" type="text/css" href= <?php echo asset('css/map.css')?> />
    <script></script>
    <script>
        function getPoints() {
            return [
                @foreach ($locations as $location)
                    new google.maps.LatLng( {{$location['latitude']}}, {{$location['longitude']}}),
                @endforeach
            ];
        }
    </script>
    <script src=<?php echo asset('js/map.js')?>></script>
    
  </head>
  <body>
      <div id="map"></div> 
  </body>
</html>