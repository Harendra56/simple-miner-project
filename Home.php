<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>

<!DOCTYPE HTML>
<html>

	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Home</title>
    <head>
    <link type="text/css" rel="stylesheet" href="prof.css" />
    </head>
<body> 
<div class="header1">
<b><span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userName']; ?>&nbsp;<span class="caret"></span></a></b>
              <ul 
<div id="img3" class="header1"><img src="proff.png" width="30px" height="30px"/></div>class="dr

<div id="searcharea" class="header1"><input placeholder="search here..." type="text" id="searchbox"/></div> 
<div id="profilearea" class="header1"><img src="proff.png" width="40px" height="40px"/></div>
<div id="profilearea1" class="header1">Home</div>
<div id="profilearea3" class="header1">|</div>
<div id="profilearea4" class="header1"><a href="Home11.html">Profile</a></div>
<div id="findfriends" class="header1"><a href="find friends.php"><img src="frn.png" width="40px" height="40px"></div>
<div id="message" class="header1"><a href="message.php"><img src="images.png" width="40px" height="40px"/></div>
<div id="notification" class="header1"><a href="notification.php"><img src="noti.png" width="40px" height="40px"></div>
<div id="profilearea2" class="header1">|</div>
<div id="setting" class="header1"><a href="setting.php"><img src="sett.png" width="40px" height="40px" /></div>
<div id="logout" class="header1"><span><a href="Logout.php"></span><img src="log.png" width="40px" height="40px" /></div>

	<div class="container">
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<hr>
		<form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
			<ul class="post-types">
				<li class="post-type">
					<a class="status" title="" href="#"><i class="icon icon-file"></i> Share an Update</a>
				</li>
				<li class="post-type">
					<a class="photos" href="#"><i class="icon icon-camera"></i> Add photos</a>
				</li>
			</ul>
			<div class="share">
				<div class="arrow"></div>
				<div class="panel panel-default">
                      <div class="panel-heading"><i class="fa fa-file"></i> Update Status</div>
                      <div class="panel-body">
                        <div class="">
                            <textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea> 
						</div>
                      </div>
						<div class="panel-footer">
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<div class="btn-group">
											  <button type="button" class="btn btn-default"><i class="icon icon-map-marker"></i> Location</button>
	  <button type="button" class="btn btn-default"><i class="icon icon-vidoe-"></i> Video</button>
		
											  <button type="button" class="btn btn-default"><i class="icon icon-picture"></i> Photo</button>
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<select name="privacy" class="form-control privacy-dropdown pull-left input-sm">
												<option value="1" selected="selected">Public</option>
												<option value="2">Only my friends</option>
												<option value="3">Only me</option>
											</select>                                    
											<input type="submit" name="submit" value="Post" class="btn btn-primary">                               
										</div>
									</div>
								</div>
						</div>
                    </div>
			</div>
			</div>
		</form>
	</div>
	</div>
	</div> 






