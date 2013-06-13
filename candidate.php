<?php
ob_start();
require_once("class/conn.php");
require_once("class/mysql.php");

$conn = new Conn;
$mysql = new MySQL;

$conn->connect(); // Call MySQL Connection
$candidate_shortname = addslashes(strip_tags(htmlspecialchars($_GET['id'])));
if($candidate_shortname == "")
{
	header("Location: http://www.guildelections.co.uk");
}
else
{
	$candidate = mysql_fetch_array($mysql->get_candidate($candidate_shortname));
}
$mysql->update_views($candidate['id']);
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
				<li onclick="goto('candidates-div');"><?php echo $candidate['name'] ?></li>
				<li onclick="goto('more-candidates-div');">More Candidates</li>
				<li><a href="manifestos.php">Manifestos</a></li>
			</ul>
		</div>

		<div class="span10 span10-tablet bottom"><img src="img/logos.png" style="width:100%;" /><br />A collaborative project between Redbrick, BURN FM and Guild TV.<br /><br />&copy; <span class="bold">2013 - <a href="contact.php" style="color:#FFFFFF;">Contact</a></span> elections@redbrick.me</div>

	</div>

	<div class="content span10 offset2 span9-tablet offset3-tablet">


		<div class="box span12" id="candidates-div">

			

			<div class="span12 bottom-gap">
				<?php
				if($candidate['shortname'] == "")
				{
					$photo = "img/blank.png";
				}
				else
				{
					$photo = "img/candidates/" . $candidate['shortname'] . "-sml.png";
				}
				?>
				<div class="span2 span4-tablet center hide-mobile"><img src="<?php echo $photo ?>" style="width:60%;" /></div>
				<div class="span10 span8-tablet">
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
					<h1 class="light"><?php echo $candidate['name'] ?></h1>
					<h5><?php echo $candidate['campaign_name'] ?></h5>
				</div>
			</div>
			
			<div class="person span5 span6-tablet">
				<?php
				if($candidate['guildtvclip'] != "")
				{
					?>
					<div class="video-container">
						<iframe width="460" height="265" src="http://www.youtube.com/embed/<?php echo $candidate['guildtvclip'] ?>" frameborder="0" allowfullscreen></iframe>
					</div>
					<br /><br />
					<?
				}
				?>

				<?php
				if($candidate['soundcloud'] != "")
				{
					?>
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F<?php echo $candidate['soundcloud'] ?>"></iframe>
					<br /><br />
					<?
				}
				?>

				<?php
				if($candidate['twitter'] != "")
				{
					?>
					<a href="https://twitter.com/<?php echo $candidate['twitter'] ?>" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @<?php echo $candidate['twitter'] ?></a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					<br /><br />
					<?
				}
				?>
				
				<?php
				if($candidate['website'] != "")
				{
					?>
					<a href="http://<?php echo $candidate['website'] ?>"><?php echo $candidate['website'] ?></a>
					<?
				}
				?>
				
				
			</div>

			<div class="description span7 span6-tablet">	

				<img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" />
				
				<?php 
				if($candidate['description'] != "")
				{
					?>
					<br /><br /><h4 class="bold">Personal Statement</h4>
					<?
					echo nl2br($candidate['description']);
				}
				?>

			</div>

		</div>

		<div class="box span12" id="more-candidates-div">

			<div class="bottom-gap">
				<h1 class="light">Other Candidates</h1>
				<h5><?php echo $mysql->do_role($candidate['position']) ?></h5>
			</div>

			<div class="candidates show span12">
				<?php
				$more_candidates = $mysql->get_candidates($candidate['position']);
				while($more_candidate = mysql_fetch_assoc($more_candidates))
				{
					if($more_candidate['id'] == $candidate['id'])
					{
						//
					}
					else
					{
						if($more_candidate['shortname'] == "")
						{
							$photo = "img/blank.png";
						}
						else
						{
							$photo = "img/candidates/" . $more_candidate['shortname'] . "-sml.png";
						}
						?>
						<div class="candidate span3 span4-tablet span6-mobile"><a href="candidate.php?id=<?php echo $more_candidate['shortname'] ?>"><img src="<?php echo $photo ?>" /><br /><?php echo $more_candidate['name'] ?></a></div>
						<?
					}
				}
				?>
				<div class="candidate span3 span4-tablet span6-mobile"><img src="img/blank.png" /><br />RON</div>
			</div>

		</div>

	</div>

</body>
</html>