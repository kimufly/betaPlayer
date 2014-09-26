<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CeCe test</title>
<!--jQuery-->
<script src="../jquery-1.11.1.min.js"></script>

<!--MiniColors-->
<script src="jquery.minicolors.js"></script>
<link rel="stylesheet" href="jquery.minicolors.css">

<!-- Bootstrap 3 -->
<link href="../bootstrap-3.1.1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="../bootstrap-3.1.1/dist/js/bootstrap.min.js"></script>

<!-- cece-video -->
<link rel="stylesheet" href="cece_video.css">
<script src="cece_video.js"></script>
</head>
<body onload="start()">
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">CeCe</a> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
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
<!--------------------------------------nav---------------------------------------->
<div class="container"><!--head--> 
</div>
<!--/head-->
<div class="container">
<!--main-->
<div class="container intro"><!--intro-->
  <h2> &nbsp;&nbsp;&nbsp;&nbsp;Aldnoah.Zero [01]</h2>
</div>
<!--intro-->
<div class="container" style="position: relative;">
<!--bfq-->
<div class="col-lg-8">
  <div class="danmu"><div id="123" style="color: #66FFCC;z-index: 2;position: relative;left: 715px;">test</div></div>
  <video id="movie" width="740" height="408" preload="auto" onLoad="videoData()">
    <source src="../video/[KTXP][Aldnoah.Zero][01][BIG5][720p].mp4" />
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
  <!--<div class="progressTime">
  Current play time: <span class="current"></span>
  Video duration: <span class="duration"></span>
  </div>-->
  <div class="input-group" style="position: relative;"> <span class="input-group-addon input-group-btn">
    <input type="hidden" id="col-c" class="demo" value="#fff">
    </span>
    <input type="text" class="form-control" placeholder="Comment" name="Comment" id="in-com" required>
    <span class="input-group-btn">
    <!--<button class="btn btn-default" type="button" id="invb">inv</button>-->
    <button class="btn btn-default" type="button" id="sub">发射></button>
    </span> </div>
</div>
<div class="col-lg-2"> 
  <!--<table class="table-bordered text-center">
        <tr>
          <td>时间</td>
          <td>评论</td>
          <td>发送时间</td>
        </tr>
        <tr>
      </table>-->
  <div class="panel panel-default">
    <div class="panel-heading">
    <div id="txt"></div>
    </div>
    <div>
      <table class="table tbhd">
        <tr>
          <td>&nbsp;时间</td>
          <td class="pl">&nbsp;评论</td>
          <td>发送日期</td>
        </tr>
      </table>
    </div>
    <div class="plb">
      <table class="table" id="list">
        <?php
		// Create connection
		$con=mysqli_connect("127.0.0.1","root","12345","webtest");
		// Check connection
		if (mysqli_connect_errno($con))
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
		   // echo "connect to MySQL success\n";
		}
		
		//create tables
		$sql = $sql="CREATE TABLE cece_video(user TEXT,comment_style TEXT,comment TEXT,time TIME,date TEXT, sec DOUBLE)";
		// Execute query
		if (mysqli_query($con,$sql))
		{
		echo "Table comments created successfully";
		}
		else
		{
		//echo "Error creating table: " . mysqli_error($con);
		}
		
		
		
		$result = mysqli_query($con,"SELECT * FROM cece_video");
		
		/*echo "<table border='1'>
		<tr>
		<th>user</th>
		<th>comments</th>
		<th>time</th>
		</tr>";*/
		
		while($row = mysqli_fetch_array($result))
		{
		$ouser = base64_decode($row['user']);
		$ocomment = base64_decode($row['comment']);
		/*echo "<tr>";
		echo "<td>" . $row['user'] . "</td>";
		echo "<td>" . $row['comment'] . "</td>";
		echo "<td>" . $row['time'] . "</td>";
		echo "</tr>";*/
		echo"  <tr class=\"hang\">";
		echo"    <td style=\"position:relative;\">&nbsp;".$row['time']."</td>";
		echo"    <td class=\"pl\" style=\"position:relative;\"><div class=\"pl\">&nbsp;&nbsp;".$ocomment."</div></td>";
		echo"    <td class=\"c_time\" style=\"position:relative;\"><div class=\"sj\">&nbsp;&nbsp;".$row['date']."</div></td>";
		echo"  </tr>";
		}
		?>
      </table>
    </div>
  </div>
  <!--bfq--> 
</div>
<!--/main-->
</body>
</html>
