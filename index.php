<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>betaPlayer</title>

<!-- JQuery -->
<script type="text/javascript" src="jquery/dist/jquery.min.js"></script>
<!-- Mini Colors-->
<script type="text/javascript" scr="jquery-minicolors/jquery.minicolors.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-minicolors/jquery.minicolors.css">

<script type="text/javascript" src="colorpicker/jquery.ui.colorPicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="colorpicker/css/jquery.ui.colorPicker.css">
<!-- Bootstrap -->
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap-theme.min.css">
<!-- betaPlayer -->
<script type="text/javascript" src="js/video.js"></script>
<link rel="stylesheet" type="text/css" href="css/cover.css">
</head>

<body onLoad="startTime()">
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
<div class="player_win">
<!-- player -->
<div class="player_main">
<video id="video" preload="auto" onLoad="videoData()" width="850px">
<source src="http://beta.moe/video/%5bKTXP%5d%5bAldnoah.Zero%5d%5b02%5d%5bBIG5%5d%5b720p%5d.mp4">
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
<span class="current"></span> /
<span class="duration"></span>
</div>
<div class="sound"><span class="glyphicon glyphicon-volume-up soundbtn"></span></div>
<div class="volume">
<span class="volumeBar" style="width: 100%;"></span>
</div>
</div>

</div>
<!-- /player -->
<!-- Command Input -->

<!-- /Command Input -->
<!-- command list -->
<div class="commandList">
<div class="display" style="height:1px"></div>
<div class="list-header">
<div id="time">
</div>
</div>
<table style="width: inherit;" id="head">
<th class="tm-list">Time</th>
<th class="cmd-list">Command</th>
<th class="dt-list">Date</th>
</table>
</div>
<!-- /player & command list-->
</div>
</div>

</body>
</html>