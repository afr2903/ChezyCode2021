<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Elements</title>
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
<body class="single">

<!-- Navigation
    ==========================================-->
<nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"><img src="img/logo-top.png" class="img-responsive"><span>Grit</span></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
      
      <!--nav icon--> 
      <a id="nav-icon"> <span></span> <span></span> <span></span> </a> 
      <!--nav icon end-->
      
      <ul id="nav-top" class="nav navbar-nav navbar-right">
		   <li><a href="index.html" class="page-scroll">Home</a></li>
			<li><a href="page.html" class="page-scroll">Page</a></li>
			<li><a href="blog.html" class="page-scroll">Blog</a></li>
			<li><a href="contact.html" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!--blog body-->

<div id="Blog-post"> 
  
  <!-- banner Page
    ==========================================-->
  
  <header class="entry-header" style="background-image: url(img/photo-1478.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container "> 
        <!--breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Templates</li>
        </ol>
        <!--/breadcrumb-->
        <h1>Bootstrap Elements in Action</h1>
        <hr>
        <a href="#"> </a><span class="date-article">JULY 13 2017</span> <span class="byline"> By <span class="author vcard"><a href="#">Rijo</a> ,<a href="#"> BLOG</a></span></span> </div>
    </div>
    <div class="arrow bounce"> <i class="fa fa-arrow-down fa-2x"></i> </div>
  </header>
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-12 col-sm-12 single-post">
        <article class="post">
         
    <!-- Alerts
    ================================================== -->
    
    <h1>Alerts</h1>
    <div class="alert alert-success"><strong>Well done!</strong> You successfully read <a class="alert-link" href="#">this important alert message</a>.</div>
    <div class="alert alert-info"><strong>Heads up!</strong> This <a class="alert-link" href="#">alert needs your attention</a>,but it's not super important.</div>
    <div class="alert alert-warning"><strong>Warning!</strong> Better check yourself, you're <a class="alert-link" href="#">not looking too good</a>.</div>
    <div class="alert alert-danger"><strong>Oh snap!</strong> <a class="alert-link" href="#">Change a few things up</a> and try submitting again.</div>
    <div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>Success!</strong> This alert box could indicate a successful or positive action.</div>
    
    <!-- labels
    ================================================== -->
    
    <h1>labels</h1>
    <h3>Text heading with a label <span class="label label-success">New</span></h3>
    <h4>Contextual variations</h4>
    <span class="label label-default">Default</span>&nbsp;<span class="label label-primary">Primary</span>&nbsp;<span 
class="label label-success">Success</span>&nbsp;<span class="label label-info">Info</span>&nbsp;<span class="label 
label-warning">Warning</span>&nbsp;<span class="label label-danger">Danger</span>&nbsp;<span class="label disabled label-default">Danger</span>
    <h4>Pill labels</h4>
    <span class="label label-pill label-default">Default</span>&nbsp;<span class="label label-pill label-primary">Primary</span>&nbsp;<span class="label label-pill label-success">Success</span>&nbsp;<span class="label label-pill label-info">Info</span>&nbsp;<span class="label label-pill label-warning">Warning</span>&nbsp;<span class="label label-pill label-danger">Danger</span> 
    
    <!-- Badges
    ================================================== -->
    <h1>Badges</h1>
    <span class="badge badge-default">5</span> &nbsp;<span class="badge badge-primary">blue</span> &nbsp;<span class="badge badge-success">green</span> &nbsp;<span class="badge badge-info">info</span>&nbsp;<span class="badge badge-warning">orange</span>&nbsp;<span class="badge badge-danger">red</span> &nbsp;<span class="badge  disabled">Disabled</span> 
    
    <!-- Breadcrumb
    ================================================== -->
    <h1>Breadcrumb</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
	
	   <h1>Buttons</h1>
    <h2>Button Styles</h2>
    
    
   
    <button type="button" class="btn">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-default">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-primary">DEFAULT SIZE</button>
    &nbsp;
    <button 
type="button" class="btn btn-success">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-info">DEFAULT SIZE</button>
    &nbsp;
    <p></p>
    <button type="button" class="btn btn-warning ">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-danger">DEFAULT SIZE</button>
       &nbsp;
    <button type="button" >without class</button>
    &nbsp;
    <input type="button" Value="Input type">
    
    
    <!-- button diasable
    ================================================== -->
    <h2>Button disable</h2>
    <button type="button" class="btn disabled">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-default disabled">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-primary disabled">DEFAULT SIZE</button>
    &nbsp;
    <button 
type="button" class="btn btn-success disabled">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-info disabled">DEFAULT SIZE</button>
    &nbsp;
    <p></p>
    <button type="button" class="btn btn-warning disabled ">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-danger disabled">DEFAULT SIZE</button>
    
    
    
    
        <!-- button Secodary
    ================================================== -->
    <h4>Buttons secondry vb4</h4>

   
       <button type="button" class="btn-secondry btn">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-secondry btn-default">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-secondry btn-primary">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-secondry btn-success">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-secondry btn-info">DEFAULT SIZE</button>
    &nbsp;
    <p></p>
    <button type="button" class="btn btn-secondry btn-warning ">DEFAULT SIZE</button>
    &nbsp;
    <button type="button" class="btn btn-secondry btn-danger">DEFAULT SIZE</button>
       &nbsp;
    
    
    
    
    <!-- button Outline
    ================================================== -->
    <h4>Outline Buttons vb4</h4>
    <button class="btn btn-outline-primary" type="button">Primary</button>
    &nbsp;
    <button class="btn btn-outline-secondary" type="button">Secondary</button>
    &nbsp;
    <button class="btn btn-outline-success" 
type="button">Success</button>
    &nbsp;
    <button class="btn btn-outline-info" type="button">Info</button>
    &nbsp;
    <button 
class="btn btn-outline-warning" type="button">Warning</button>
    &nbsp;
    <button class="btn btn-outline-danger" type="button">Danger</button>
    
    <!-- button size
    ================================================== -->
    
    <h4>Large Buttons</h4>
    <button class="btn btn-primary btn-lg" type="button">Large button</button>
    &nbsp;
    <button class="btn btn-secondary btn-lg" type="button">Large button</button>
    <h4>Small Buttons</h4>
    <button class="btn btn-primary btn-sm" type="button">Small button</button>
    &nbsp;
    <button class="btn btn-secondary btn-sm" type="button">Extra Small</button>
    <h4>Extra Small Buttons</h4>
    <button class="btn btn-primary btn-xs" type="button">Extra Small</button>
    &nbsp;
    <button class="btn btn-secondary btn-xs" type="button">Extra Small</button>
    <h4>Full Width Button</h4>
    <button class="btn btn-default btn-lg btn-block" type="button">Block level button</button>
    &nbsp;
    <button class="btn btn-secondary btn-lg btn-block" type="button">Block level button</button>
    <h4>Half Width Button</h4>
    <button class="btn btn-default btn-lg btn-half-block" type="button">Half Block button</button>
    &nbsp;
    <button class="btn btn-secondary btn-lg btn-half-block" type="button">Half Block button</button>
    
    <!-- dropdown button 
    ================================================== -->
    
    <h1>Dropdowns</h1>
    <div class="dropdown">
      <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-
haspopup="true" aria-expanded="true">Dropdown&nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
    
    <!-- button groups
    ================================================== -->
    
    <h1>Button Groups</h1>
    <div class="btn-group">
      <button class="btn btn-outline-secondary" type="button">Left</button>
      <button class="btn btn-outline-secondary" type="button">Middle</button>
      <button class="btn btn-outline-secondary" type="button">Right</button>
    </div>
    
    <!-- Collapse
    ================================================== -->
    
    <h1>Collapse</h1>
    <a class="btn btn-primary" href="#collapseExample" data-toggle="collapse">Link with href</a>
    <button class="btn btn-
primary" type="button" data-toggle="collapse" data-target="#collapseExample">Button with data-target</button>
    <div id="collapseExample" class="collapse">
      <div class="well">Text here</div>
    </div>
  </div>

    
    <!-- Basic Accordions
    ================================================== -->
    
    <h1>Basic Accordions</h1>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-warning">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Collapsible Group Item #1 </a> </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Collapsible Group Item #2 </a> </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Collapsible Group Item #3 </a> </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
        </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapseThree"> Collapsible Group Item #3 </a> </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
        </div>
      </div>
      <div class="panel panel-danger">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapseThree"> Collapsible Group Item #3 </a> </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
        </div>
      </div>
    </div>
    
    <!-- Dropdowns
    ================================================== -->
    
    <h1>Dropdowns</h1>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-
haspopup="true" aria-expanded="true">Dropdown&nbsp;<span class="glyphicon glyphicon-chevron-down"></span></button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
    <h1>Forms</h1>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <textarea></textarea>
      </div>
      <div class="form-group">
        <div class="radio radio-success">
          <input type="radio" name="ON" id="Radios1" value="Yes" checked>
          <label> Radiobutton is on </label>
        </div>
        <div class="radio radio-info">
          <input type="radio" name="OFF" id="Radios2" value="No">
          <label> Radiobutton is OFF </label>
        </div>
      </div>
      <div class="checkbox checkbox-success">
        <input type="checkbox" value="yes" checked>
        <label> I agree to your terms. </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <!-- Input Groups
    ================================================== -->
    
    <h2>Input Groups</h2>
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group"><span class="input-group-addon">
          <div class="checkbox checkbox-success">
            <input type="checkbox" value="yes" >
            <label></label>
          </div>
          </span>
          <input class="form-control" type="text" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="input-group"><span class="input-group-addon">
          <div class="radio radio-success">
            <input type="radio"  id="Radios1" value="Yes" checked>
            <label></label>
          </div>
          </span>
          <input class="form-control" type="text" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group"><span class="input-group-btn">
          <button class="btn btn-success" 
type="button">Go!</button>
          </span>
          <input class="form-control" type="text" placeholder="Search for..." />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." />
          <span class="input-group-btn">
          <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
          </span></div>
      </div>
    </div>
    
    <!-- checkbox
    ================================================== -->
    
    <h2>checkbox</h2>
    <p>
    <input type="checkbox" value="yes" >
    <label> Checked Option one is this and that&mdash;be sure (primary) </label>
    </p>
    
    <div class="checkbox checkbox-primary">
      <input type="checkbox" value="yes" checked>
      <label> Checked Option one is this and that&mdash;be sure (primary) </label>
    </div>
    <div class="checkbox checkbox-success">
      <input type="checkbox" value="yes" checked>
      <label> Checked Option one is this and that&mdash;be sure (success) </label>
    </div>
    <div class="checkbox checkbox-info">
      <input type="checkbox" value="yes" checked>
      <label> Checked Option one is this and that&mdash;be sure (info) </label>
    </div>
    <div class="checkbox checkbox-warning">
      <input type="checkbox" value="yes" checked>
      <label> Checked Option one is this and that&mdash;be sure (warning) </label>
    </div>
    <div class="checkbox checkbox-danger">
      <input type="checkbox" value="yes" checked>
      <label> Checked Option one is this and that&mdash;be sure (danger) </label>
    </div>
    <div class="checkbox checkbox-danger">
      <input type="checkbox" value="yes" >
      <label> Un Checked Option one is this and that&mdash;be sure </label>
    </div>
    <div class="checkbox checkbox-danger">
      <input type="checkbox" value="yes"  disabled>
      <label> disabled Option one is this and that&mdash;be sure </label>
    </div>
    
    <!-- radio
    ================================================== -->
    <h2>radio</h2>
    <p>
    <input type="radio"  id="Radios1" value="Yes" >
    <label> Radiobutton is ON(free radio) </label>
    </p>
    
    <div class="radio radio-primary">
      <input type="radio"  id="Radios1" value="Yes" >
      <label> Radiobutton is ON(primary) </label>
    </div>
    <div class="radio radio-success">
      <input type="radio"  id="Radios1" value="Yes" checked>
      <label> Radiobutton is ON(success) </label>
    </div>
    <div class="radio radio-info">
      <input type="radio"  id="Radios1" value="Yes" checked>
      <label> Radiobutton is ON(info) </label>
    </div>
    <div class="radio radio-warning">
      <input type="radio"  id="Radios1" value="Yes" checked>
      <label> Radiobutton is ON(warning) </label>
    </div>
    <div class="radio radio-danger">
      <input type="radio"  id="Radios1" value="Yes" checked>
      <label> Radiobutton is ON(danger) </label>
    </div>
    <div class="radio radio-info">
      <input type="radio" id="Radios2" value="yes">
      <label> Radiobutton is OFF() </label>
    </div>
    <div class="radio radio-d">
      <input type="radio"  id="Radios2" value="No" checked disabled>
      <label> Radiobutton is disabled </label>
    </div>
    
    <!-- Validation states
    ================================================== -->
    <h2>Validation states</h2>
    <div class="form-group has-success has-feedback">
      <label class="control-label" for="inputSuccess2">Input with success</label>
      <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess2Status" class="sr-only">(success)</span> </div>
    <div class="form-group has-success has-feedback">
      <label class="control-label" for="inputSuccess2">Input with success</label>
      <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess2Status" class="sr-only">(success)</span> </div>
    <div class="form-group has-warning has-feedback">
      <label class="control-label" for="inputWarning2">Input with warning</label>
      <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
      <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span> <span id="inputWarning2Status" class="sr-only">(warning)</span> </div>
    <div class="form-group has-error has-feedback">
      <label class="control-label" for="inputError2">Input with error</label>
      <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
      <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> <span id="inputError2Status" class="sr-only">(error)</span> </div>
    <div class="form-group has-success has-feedback">
      <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
      <div class="input-group"> <span class="input-group-addon">@</span>
        <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
      </div>
      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess1Status" class="sr-only">(success)</span> </div>
    
    <!-- Modal
    ================================================== -->
    
    <h1>Modal</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal </button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
            <h4 class="modal-title" id="myModalLabel">Success!</h4>
          </div>
          <div class="modal-body"> <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them would not be at all to my purpose.</p> </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Click Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Panel
    ================================================== -->
    
    <h1>Panel</h1>
    <div class="bs-example" data-example-id="contextual-panels">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">Panel content</div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">Panel content</div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">Panel content</div>
      </div>
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">Panel content</div>
      </div>
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">Panel content</div>
      </div>
    </div>
    
    <!-- PopOver
    ================================================== -->
    
    <h1>PopOver</h1>
    <div class="btn-group">
      <button class="btn btn-outline-secondary" type="button" data-container="body" data-toggle="popover" data-placement="left" 
title="Popover title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>
      <button class="btn btn-outline-secondary" type="button" title="Popover title"  data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">top</button>
      <button class="btn btn-outline-secondary" type="button" data-container="body" title="Popover title" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>
      <button class="btn btn-outline-secondary" type="button" title="Popover title" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>
    </div>
    
    <!-- Tooltips
    ================================================== -->
    
    <h4>Tooltips</h4>
    <button class="btn btn-outline-primary"   title="Tooltip on left" data-toggle="tooltip" data-placement="left">Left</button>
    <button class="btn btn-outline-primary" title="Tooltip on top"  data-toggle="tooltip" data-placement="top">top</button>
    <button class="btn btn-outline-primary" title="Tooltip on bottom"  data-toggle="tooltip" data-placement="bottom">Bottom</button>
    <button class="btn btn-outline-primary" title="Tooltip on right"  data-toggle="tooltip" data-placement="right">Right</button>
    
    <!-- Progress bar
    ================================================== -->
    
    <h1>Progress bar</h1>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-
valuemax="100"></div>
    </div>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-
valuemax="100"></div>
    </div>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> 60% </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-
valuemax="100" style="width: 20%"> <span class="sr-only">40% Complete (success)</span> </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"> <span class="sr-only">20% Complete</span> </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-
valuemax="100" style="width: 40%"> <span class="sr-only">60% Complete (warning)</span> </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-
valuemax="100" style="width: 50%"> <span class="sr-only">80% Complete (danger)</span> </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">40% Complete (success)</span> </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> 40% </div>
    </div>
    <h3>Wordpress</h3>
    <div class="progress">
      <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> <span class="sr-only">20% Complete</span> </div>
    </div>
    <h3>HTML5</h3>
    <div class="progress">
      <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="80" aria-
valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">60% Complete (warning)</span> </div>
    </div>
    <h3>Photoshop</h3>
    <div class="progress">
      <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> <span class="sr-only">80% Complete (danger)</span> </div>
    </div>
       <!-- Tabs
    ================================================== -->
    
    <h1>Tabs</h1>
    <div>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
        <li><a href="#profile" data-toggle="tab">Profile</a></li>
        <li><a href="#messages" data-toggle="tab">Messages</a></li>
        <li><a href="#settings" data-toggle="tab">Settings</a></li>
      </ul>
      <div class="tab-content">
        <div id="home" class="tab-pane active">Quisque et pellentesque erat. Integer rutrum, quam at iaculis malesuada, purus ante fermentum massa, eu tempus ipsum leo at est. Ut iaculis, turpis quis aliquet ornare</div>
        <div id="profile" class="tab-pane">, massa ante molestie justo, vitae mollis erat sapien vitae urna. Sed elit metus, vestibulum non nulla eu, blandit pretium nunc. Cras dignissim tellus libero, at aliquam tortor tempus eget. Morbi sed imperdiet purus. Nam ut erat id dolor vehicula vehicula eu in tellus.</div>
        <div id="messages" class="tab-pane">, massa ante molestie justo, vitae mollis erat sapien vitae urna. Sed elit metus, vestibulum non nulla eu, blandit pretium nunc. Cras dignissim tellus libero, at aliquam tortor tempus eget. Morbi sed imperdiet purus. Nam ut erat id dolor vehicula vehicula eu in tellus.</div>
        <div id="settings" class="tab-pane">., massa ante molestie justo, vitae mollis erat sapien vitae urna. Sed elit metus, vestibulum non nulla eu, blandit pretium nunc. Cras dignissim tellus libero, at aliquam tortor tempus eget. Morbi sed imperdiet purus. Nam ut erat id dolor vehicula vehicula eu in tellus..</div>
      </div>
    </div>
	<span style="padding:80px;"></span>
          <!--footer tags--> 
          
        </article>
     
        
      </div>
      <!--blog posts container--> 
      
      
      <div class="clearfix"></div>
     </div>
  </div>
</div>
<footer id="bottom-footer">
  <div class="container">
    <div class="row wow fadeInUp">
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
      
      <!--social by-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="social-link">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
      <!--/social by--> 
      
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
      <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script> 
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});
</script>

</body>
</html>