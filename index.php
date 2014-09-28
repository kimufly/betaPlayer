<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>betaPlayer</title>

<!-- JQuery -->
<script type="text/javascript" src="jquery/dist/jquery.min.js"></script>
<!-- Mini Colors-->
<script type="text/javascript" scr="js/jquery.minicolors.js"></script>
<link rel="stylesheet" type="text/css" href="js/jquery.minicolors.css">
<!-- Bootstrap -->
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap-theme.min.css">
<style>
.navbar .nav > li .dropdown-menu {
	margin: 0;
}
.navbar .nav > li:hover .dropdown-menu {
	display: block;
}
.carousel-indicators {
	bottom: -400px;
}
.navbar-default {
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),0 1px 5px rgba(0, 0, 0, 0.075);
}
body {
	background-color:#eee;
}
.main {
	margin-left:10%;
	margin-right:10%;
	margin-top: 45px;
	margin-bottom: -11px;
	min-height:2000px;
	background-color:rgba(255, 255, 255, 0.64);
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),0 1px 5px rgba(0, 0, 0, 0.075);
}
</style>
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">CeCe</a> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <div class="nav navbar-nav navbar-right">
        <li><a href="#">Sign in</a></li>
      </div>
    </div>
    <!--/.nav-collapse --> 
  </div>
</div>
<div class="main">
<h1>Hello Wordl!</h1>
</div>
</body>
</html>