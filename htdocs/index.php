<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>Fox Valley Theological Society</title>
</head>

<body>
<div id="container">
	<div id="header">
		<div id="logo_w1">Fox Valley Theological Society</div>
		<!--<div id="logo_w2">Theological Society</div>-->
		<div id="header_text">
			<p>A forum for open, respectful, sincere, and honest dialogue</p>
		</div>
		<img id="logo" src="images/fvts_logo.gif" />
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?q=who_are_we" onclick="$('#content').load('pages/who_are_we.html');">Who are we?</a></li>
			<!--<li><a href="javascript:">Events</a></li>-->
			<li><a href="javascript:">Discussions &amp; Feedback</a></li>
			<li><a href="index.php?q=talk_to_me" onclick="$('#content').load('pages/talk_to_me.html');">I'd like to talk to someone</a></li>
		</ul>
	</div>
	<div id="content">
		<?php
			if($_GET['q'] AND file_exists("pages/{$_GET['q']}.html")) {
				include "pages/".$_GET['q'].".html";
			} else {
				include 'pages/main.html';
			}
		?>
	</div>
	<div id="footer">Copyright &copy; 2010 Fox Valley Theological Society.  All rights reserved.&nbsp;
		Designed by <a href="http://kevingustavson.info/">Kevin Gustavson</a>.
	</div>	
</div>
<script type='text/javascript' src='js/jquery.js'></script>
<script type="text/javascript">
<!--
	$('#bio_switch').show();
	$('#bio').hide();
    $('#bio_switch').click(function () {
    	if(this.text == 'More...') {
			$('#bio_switch').text('Less...');
			$('#bio').show();
    	} else {
			$('#bio_switch').text('More...');
			$('#bio').hide();
    	}
    	return false;
    });
-->
</script>
</body>
</html>
