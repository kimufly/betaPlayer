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
<!-- betaPlayer -->
<script type="text/javascript" src="js/video.js"></script>
<link rel="stylesheet" type="text/css" href="css/cover.css">
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
<!-- player & command list-->
<div style="height: 520px;">
<div class="col-lg-8">
<video id="video" preload="auto" onLoad="videoData()" width="100%">
<source src="video/K-ON!%202009%20-%20EP01%20%5bBD%201920x1080%2023.976fps%20AVC-yuv420p10%20FLACx3%20Chap%5d%20-%20mawen1250.webmhd.webm">
</video>
<div class="control">
<input type="hidden" id="video_dur">
<input type="hidden" id="video_pos">
<div class="btnPlay"><span class="glyphicon glyphicon-play playbtn"></span></div>
<div class="progressBar">
<div class="bufferBar"></div>
<div class="timeBar"></div>
</div>
<div class="time">
<span class="current"></span>/
<span class="duration"></span>
</div>
<div class="sound"><span class="glyphicon glyphicon-volume-up soundbtn"></span></div>
<div class="volume">
<span class="volumeBar" style="width: 100%;"></span>
</div>
</div>
<!-- /player & command list-->
</div>
</body>
</html>