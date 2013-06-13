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
	<title>Guild Elections 2013 / <?php echo $candidate['name'] ?></title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset='utf-8'> 
	<link rel="stylesheet" href="css/default.css" />
	<link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 900px)" />
	<link rel="stylesheet" href="css/tablet.css" media="screen and (min-width: 600px) and (max-width: 899px)" />
	<link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 599px)" />
	<link rel="stylesheet" href="css/custom.css" />
	<meta property="og:title" content="Guild Elections 2013 / <?php echo $candidate['name'] ?>" />
	<meta property="og:description" content="The latest from Redbrick, Guild TV and BURN FM on the 2013 Guild Elections" />
	<meta property="og:image" content="http://www.guildelections.co.uk/img/logo4.png" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
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

	});
    </script>
</head>

<body>
	<?php include('analytics.php') ?>
	<div class="hashtag">Twitter: #GuildElections13</div>

	<div class="sidebar span2 span3-tablet hide-mobile">

		<div class="span12 center bottom-gap">
			<a href="index.php"><img src="img/logo4-sml.png" style="width:80%;" /></a><br />
			<h3>Guild Elections 2013</h3>
		</div>


		<div class="span12">
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="manifestos.php">Manifestos</a></li>
			</ul>
		</div>

		<div class="span10 span10-tablet bottom"><img src="img/logos.png" style="width:100%;" /><br />A collaborative project between Redbrick, BURN FM and Guild TV.<br /><br />&copy; <span class="bold">2013 - <a href="contact.php" style="color:#FFFFFF;">Contact</a></span> elections@redbrick.me</div>

	</div>

	<div class="content span10 offset2 span9-tablet offset3-tablet">


		<div class="box span12">
			<h2>Contact</h2>
		</div>

		<div class="box-candidate span12">
			<div class="span4">
				<h3>Redbrick</h3>
				<span class="bold">Chris Hutchinson</span><br />Digital Editor &amp; Webmaster<br />digital@redbrick.me<br /><br />
				<span class="bold">News Team</span><br />news@redbrick.me
			</div>

			<div class="span4">
				<h3>Guild TV</h3>
				<span class="bold">Ellie Dunbar</span><br />Station Manager<br />gtv@guild.bham.ac.uk
			</div>

			<div class="span4">
				<h3>BURN FM</h3>
				<span class="bold">Nick Williams</span><br />Station Manager<br />stationmanager@burnfm.com
			</div>

		</div>

	</div>

</body>
</html>