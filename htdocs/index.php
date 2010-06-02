<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="google-site-verification" content="1hkL-yUG1b7r6JKQU-kMsvVItqt6s8r4MQjGKW8PyoA" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>Fox Valley Theological Society</title>
</head>

<body>
<div id="container">
	<div id="header">
		<div id="logo_w1">Fox Valley Theological Society</div>
		<!--<div id="logo_w2">Theological Society</div>-->
		<div id="header_text">
			<p>A forum for sincere dialogue</p>
		</div>
		<img id="logo" src="images/fvts_logo.gif" alt="FVTS Logo"/>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?q=who_are_we" onclick="$('#content').load('pages/who_are_we.html');">Who are we?</a></li>
			<!--<li><a href="javascript:">Events</a></li>-->
			<li><a href="index.php?q=talk_to_me" onclick="$('#content').load('pages/talk_to_me.html');">I'd like to talk to someone</a></li>
			<li><a href="forums/">Discussions &amp; Feedback</a></li>
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3341219-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
