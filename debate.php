<?php
ob_start();
require_once("class/conn.php");
require_once("class/mysql.php");

$conn = new Conn;
$mysql = new MySQL;

$conn->connect(); // Call MySQL Connection
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guild Elections 2013 / Presidential Debate</title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset='utf-8'> 
	<link rel="stylesheet" href="css/default.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 900px)" />
	<link rel="stylesheet" href="css/tablet.css" media="screen and (min-width: 600px) and (max-width: 899px)" />
	<link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 599px)" />
	<link rel="stylesheet" href="css/custom.css" />
	<meta property="og:title" content="Guild Elections 2013 / Presidential Debate" />
	<meta property="og:description" content="The latest from Redbrick, Guild TV and BURN FM on the 2013 Guild Elections" />
	<meta property="og:image" content="http://www.guildelections.co.uk/img/logo4.png" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
</head>

<body>
	<?php include('analytics.php') ?>
	<div class="hashtag">Twitter: #GuildElections13</div>

	<div class="sidebar span2 span3-tablet hide-mobile">

		<div class="span12 center bottom-gap">
			<a href="index.php"><img src="img/logo4-sml.png" style="width:80%;" id="logo" /></a><br />
			<h3>Guild Elections 2013</h3>
		</div>


		<div class="span12">
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
			</ul>
		</div>

		<div class="span10 span10-tablet bottom"><img src="img/logos.png" style="width:100%;" /><br />A collaborative project between Redbrick, BURN FM and Guild TV.<br /><br />&copy; <span class="bold">2013 - <a href="contact.php" style="color:#FFFFFF;">Contact</a></span> elections@redbrick.me</div>
	</div>

	<div class="content span10 offset2 span9-tablet offset3-tablet">

		<div class="box span12">

			<div class="bottom-gap">
				<h1 class="light">The Presidential Debate</h1>
				<h5>2nd March, The Debating Hall, Evening (Time to be confirmed)</h5>
			</div>

			<iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dDdoOXVBNjlvd3ZxNVhrWFQwSWNidHc6MQ" style="width:100%; max-width:1000px;" height="900" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

		</div>

	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script>
	/*function Parallax(){
		var top = $(document).scrollTop();
		$("body").css({'background-position': '0px -' + top/4 + 'px'});
	}*/

	function goto(id){
		if(id == "top")
		{
			$('html,body').animate({
			    scrollTop: '0px'
			}, 1000);
		}
		else
		{
			$('html,body').animate({
			    scrollTop: $('#' + id).offset().top + 'px'
			}, 1000);
		}
	}

	$(document).ready(function(){
		var h = $(".article").css("height");
		$(".updates").css({height: h});

		$(".change-candidate").click(function(){
			var which = $(this).attr("data-id");
			$(".selected").removeClass("selected");
			$(this).addClass("selected");

			$(".candidates").fadeOut("fast").removeClass("show");
			$("#" + which).fadeIn("slow").addClass("show");
		});

		setTimeout(function (){

             $("#logo").addClass("animated bounce");

         }, 2000);


	});
    </script>
</body>
</html>