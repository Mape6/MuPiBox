<?php
	$string = file_get_contents('/etc/mupibox/mupiboxconfig.json', true);
	$data = json_decode($string, true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="view.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>MuPiBox Web Interface</title>
		<link rel="stylesheet" type="text/css" href="view.css" media="all">
		<script type="text/javascript" src="view.js"></script>
		<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
	</head>
	<body id="main_body" >
		<img id="top" src="images/top.png" alt="">
		<div id="container">
			<div class="topnav" id="myTopnav">
				<a href="index.php">Home</a>
				<a href="mupi.php">MuPi-Conf</a>
				<a href="bluetooth.php">Bluetooth</a>
				<a href="spotify.php">Spotify</a>
				<a href="network.php">Network</a>
				<a href="service.php">Services</a>
				<a href="tweaks.php">Performance</a>
				<a href="admin.php">Admin</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
			</div>

		