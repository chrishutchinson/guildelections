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
				<li onclick="goto('president-div');">President</li>
				<li onclick="goto('vpdr-div');">VPDR</li>
				<li onclick="goto('vpad-div');">VPAD</li>
				<li onclick="goto('vpe-div');">VPE</li>
				<li onclick="goto('vphc-div');">VPHC</li>
				<li onclick="goto('vpw-div');">VPW</li>
				<li onclick="goto('vps-div');">VPS</li>
				<li onclick="goto('nonsabbs-div');">Non-Sabbs</li>
			</ul>
		</div>

		
	</div>

	<div class="content span10 offset2 span9-tablet offset3-tablet">

		<div class="box span12" id="president-div"><h2>President</h2></div>
		<?php
		$candidates = $mysql->get_candidates("president");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="vpdr-div"><h2>Vice President (Democracy &amp; Resources)</h2></div>
		<?php
		$candidates = $mysql->get_candidates("vpdr");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9">
					<img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" />
				</div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="vpad-div"><h2>Vice President (Activities &amp; Development)</h2></div>
		<?php
		$candidates = $mysql->get_candidates("vpad");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="vpe-div"><h2>Vice President (Education)</h2></div>
		<?php
		$candidates = $mysql->get_candidates("vpe");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="vphc-div"><h2>Vice President (Housing &amp; Community)</h2></div>
		<?php
		$candidates = $mysql->get_candidates("vphc");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="vpw-div"><h2>Vice President (Welfare)</h2></div>
		<?php
		$candidates = $mysql->get_candidates("vpw");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="vps-div"><h2>Vice President (Sport)</h2></div>
		<?php
		$candidates = $mysql->get_candidates("vps");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="nonsabbs-div"><a name="araf"></a><h2>Anti-Racism Anti-Fascism Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("arafo");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="cao-div"><a name="cao"></a><h2>Community Action Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("cao");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="dso-div"><a name="dso"></a><h2>Disabled Students' Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("dso");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="eeo-div"><a name="eeo"></a><h2>Ethical &amp; Environmental Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("eeo");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="emo-div"><a name="emo"></a><h2>Ethnic Minority Students' Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("emo");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="hso-div"><a name="hso"></a><h2>Home Students' Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("hso");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="iso-div"><a name="iso"></a><h2>International Students' Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("iso");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="lgbtqso-div"><a name="lgbtqo"></a><h2>Lesbian, Gay, Bisexual, Trans and Queer Students’ Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("lgbtqso");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="mtpso-div"><a name="mtpso"></a><h2>Mature and Part-Time Students' Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("mptso");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>

		<div class="box span12" id="wo-div"><a name="wo"></a><h2>Women's Officer</h2></div>
		<?php
		$candidates = $mysql->get_candidates("wo");
		while($candidate = @mysql_fetch_assoc($candidates))
		{
			?>
			<div class="box-candidate span12" id="candidates-div">

				<div class="span3 right" style="padding:20px;">
					<h3 class="bold"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><?php echo $candidate['name'] ?></a></h3>
					<div><?php echo $candidate['campaign_name'] ?></div>
					<div class="role"><?php echo $mysql->do_role($candidate['position']) ?></div>
				</div>

				<div class="span9"><img src="img/manifestosfind/<?php echo $candidate['shortname'] ?>-manifesto-sml.png" style="width:100%; max-width:1000px;" /></div>

			</div>
			<?
		}
		?>
		
	</div>

</body>
</html>