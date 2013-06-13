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
	<title>Guild Elections 2013</title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset='utf-8'> 
	<link rel="stylesheet" href="css/default.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 900px)" />
	<link rel="stylesheet" href="css/tablet.css" media="screen and (min-width: 600px) and (max-width: 899px)" />
	<link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 599px)" />
	<link rel="stylesheet" href="css/custom.css" />
	<meta property="og:title" content="Guild Elections 2013" />
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
				<li onclick="goto('latest-div');">Latest</li>
				<li onclick="goto('candidates-div');">Candidates</li>
				<li><a href="manifestos.php">Manifestos</a></li>
				<!--<li>Results Night</li>
				<li onclick="goto('help-div');">Help!</li>-->
				<li onclick="goto('dates-div');">Key Dates</li>
			</ul>
		</div>

		<div class="span10 span10-tablet bottom"><img src="img/logos.png" style="width:100%;" /><br />A collaborative project between Redbrick, BURN FM and Guild TV.<br /><br />&copy; <span class="bold">2013 - <a href="contact.php" style="color:#FFFFFF;">Contact</a></span> elections@redbrick.me</div>
	</div>

	<div class="content span10 offset2 span9-tablet offset3-tablet">

		<div class="box span12" style="text-align:center;">

			<a href="http://my.bham.ac.uk"><img src="img/votingopens.png" style="width:100%; max-width:1000px;" /></a><br />
			
		</div>

		<?php
		if($_GET['showlivevideo'] == "yesplease")
		{
		?>
		<div class="box span12">
			<div class="bottom-gap">
				<h1 class="light">Elections Update</h1>
				<h5>Live at 10am every morning</h5>
			</div>

			<div class="span9 span9-tablet">
				<div class="video-container">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/Gux5Jx9aUCo" frameborder="0" allowfullscreen></iframe>
				</div>

				<br /><h5>Tweet your thoughts on the elections into the studio using the hashtag #GuildElections13</h5>
			</div>

			<div class="span3 span3-tablet hide-mobile" style="padding-left:20px;">
				
				The two hosts will be talking to the current Officer Team about important issues surrounding the campaigning and voting process. Our reporters will explore political issues surrounding the Guild Elections and keep us up to date with events happening around campus.
				<br /><br />
				<!--<img src="img/vpad.png" class="show-desktop" onclick="goto('candidates-div'); changeto('vpad')" style="width:100%; cursor:pointer;" /><br /><br />

				<a href="manifestos.php#wo"><img src="img/wo.png" class="show-desktop" style="width:100%;" /></a>-->
				
				
				<div class="video-container">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/_yFgQzClvvw" frameborder="0" allowfullscreen></iframe>
				</div>
				Elections Update - Friday 1st March<br /><br />
				<a href="#presidential">Presidential Debate - Saturday 2nd March</a>
			</div>
		</div>

		<div class="box span12">
			
			<div class="span12" style="padding-right:10px;">
				<div class="bottom-gap">
					<h1 class="light">University Square Hustings</h1>
					<h5>1.30pm, Monday 4th March</h5>
				</div>
				<iframe src='http://embed.scribblelive.com/Embed/v5.aspx?Id=86337&ThemeId=6860' width='100%' height='450' frameborder='0' style='border: 0px solid #000'></iframe>
			</div>

		</div>
		<?php
		}
		?>

		<?php
		if($_GET['showliveblog'] != "yesplease")
		{
			?>

			<div class="box span12">
				<div class="span6 span6-tablet" style="padding-right:15px;">
					<div class="bottom-gap">
						<h1 class="light">Elections Update</h1>
						<h5>Live at 10am every morning</h5>
					</div>
					<div class="video-container">
						<iframe width="560" height="315" src="http://www.youtube.com/embed/dhg6EcQLEhk" frameborder="0" allowfullscreen></iframe>
					</div>
					<br />
					The two hosts will be talking to the current Officer Team about important issues surrounding the campaigning and voting process. Our reporters will explore political issues surrounding the Guild Elections and keep us up to date with events happening around campus.
					<br /><br />
					<h5 class="bold">Previous Shows</h5>
					<a href="http://www.youtube.com/watch?v=Gux5Jx9aUCo">Elections Update - Wednesday 6th March</a><br />
					<a href="http://www.youtube.com/watch?v=boUTDxog9ng">Elections Update - Monday 4th March</a><br />	
					<a href="http://www.youtube.com/watch?v=_yFgQzClvvw">Elections Update - Friday 1st March</a><br />					
					<a href="http://www.youtube.com/watch?v=8XA8q31n880">Elections Update - Thursday 28th February</a><br />
					<a href="http://www.youtube.com/watch?v=7LPGLxF-3A0">Elections Update - Wednesday 27th February</a>
				</div>

				<div class="span6 span6-tablet">
					<div class="bottom-gap">
						<h1 class="light">University Square Hustings</h1>
						<h5>1.30pm - 4th March 2013</h5>
					</div>
					<iframe src='http://embed.scribblelive.com/Embed/v5.aspx?Id=86337&ThemeId=6860' width='100%' height='400' frameborder='0' style='border: 0px solid #000'></iframe>
					<br /><br />
					<h5 class="bold">Previous Live Events</h5>
					<a href="http://www.redbrick.me/2013/03/vice-presidential-question-time/">Vice Presidential Question Time</a><br />
					<a href="http://www.redbrick.me/2013/02/mermaid-square-hustings/">Mermaid Square Hustings</a>
				</div>
			</div>
			<?php
		}
		?>

		<div class="box-dark span12" style="text-align:center;">
			<a name="presidential"></a>
			<img src="img/presidentialdebate.png" style="width:100%; max-width:1000px;" /><br />
			
			<div class="span6" style="padding-right:10px;">
				<iframe src='http://embed.scribblelive.com/Embed/v5.aspx?Id=86340&ThemeId=6860' width='100%' height='350' frameborder='0' style='border: 0px solid #000'></iframe>
			</div>
			
			<div class="span6">
				<div class="video-container">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/mCm9QwsvxL4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<div class="box span12" id="latest-div">

			<!--<div class="span4">
				<div class="bottom-gap">
					<h1 class="light">Live Feed</h1>
					<h5>All the latest from campus</h5>
				</div>

				<div class="updates">
					<div class="update">
						<h4><img src="http://www.uco.edu/cece/pulse/systemImages/web_icon.png" /> <a href="#">Week 1 Campaigning - Vice President Democracy and Resources</a></h4>
						By Beth Clarke, 20 minutes ago
						
					</div>

					<div class="update">
						<h4><img src="http://www.bbc.co.uk/scotland/sportscotland/asportingnation/images/player/icon_video.gif" /> The Sunday Edition</h4>
						<div class="video-container"><iframe width="560" height="315" src="http://www.youtube.com/embed/ZnSIrHW6K80" frameborder="0" allowfullscreen></iframe></div>
						1 hour ago
					</div>

					<div class="update">
						<h4><img src="http://www.thedigitalbeyond.com/wp-content/uploads/2011/03/audio.gif" /> Guid Elections 2012 Presidential Debate</h4>
						<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F38361099"></iframe>
						1 hour ago
					</div>

					<div class="update">
						<h4><img src="http://www.uco.edu/cece/pulse/systemImages/web_icon.png" /> <a href="#">Week 1 Campaigning - Vice President Democracy and Resources</a></h4>
						By Beth Clarke, 20 minutes ago
					</div>

					<div class="update">
						<h4><img src="http://www.bbc.co.uk/scotland/sportscotland/asportingnation/images/player/icon_video.gif" /> The Sunday Edition</h4>
						<div class="video-container"><iframe width="560" height="315" src="http://www.youtube.com/embed/ZnSIrHW6K80" frameborder="0" allowfullscreen></iframe></div>
						1 hour ago
					</div>

					<div class="update">
						<h4><img src="http://www.thedigitalbeyond.com/wp-content/uploads/2011/03/audio.gif" /> Guid Elections 2012 Presidential Debate</h4>
						<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F38361099"></iframe>
						1 hour ago
					</div>
				</div>

			</div>-->

			<div class="span12">

				<!--<div class="bottom-gap right">
					<h1 class="light">Candidates announced</h1>
					<h5>Patrick McGhee &amp; Beth Clarke - 13th February 2013</h5>
				</div>

				<div class="article columns3">
					<span class="bold">The candidates for this year's Guild Officer elections have been revealed.</span> <br /><br />

A total of 21 candidates have been nominated to run for the seven available sabbatical positions, while 16 people are running for the 10 non-sabbatical roles. Five candidates, Malia Bouattia, Areeq Chowdhury, Tim Lucas, Poppy Wilkinson and Mark Williams are vying for the role of Guild President. Four candidates, David Charles, Sean Farmelo, Amy Hegarty, Josh Llewellyn, are contending for the position of Vice President (Housing & Community). Six candidates are running for the role of Vice-President (Sports), including Tim Barsellotti, Vicki Harris, Sara Henderson, Dan Jaenicke, Sam Travell and current VPS James Hughes, who is running for a second term. Running for Vice President (Activities & Development) are Elio Di Muccio and Molly Wright, while contending for Vice President (Welfare) are Jennifer Kirk and Jethro Lee. Two candidates have only RON (Re-Open Nominations) to contend with, as Hattie Craig and Thomas Wragg are running unopposed for the role of Vice-President (Education) and Vice-President (Democracy and Resources) respectively.

<div class="pullquote">A total of 21 candidates have been nominated to run for the seven available sabbatical positions</div>

For non-sabbatical roles, running for Disabled Students' Officer are Ellis Palmer and Chames Zaimeche. Two candidates, Tracy Makale and Olivia Ogolo are running for the role of Ethnic Minority Officer. Running for LGBTQ Students' Officer are Leilani Rabemananjara and Isobel Stevenson. Two candidates are running for the role of Home Students' Officer, including Mohammed Mumit and Jagpal Pahal. Two candidates, Bihe Chen and Deborah Hermanns are running for the role of International Students' Officer.  Running for the role of Anti-Racism Anti-Fascism Officer are Georgia Levine and Zarah Sultana. Four candidates are up against the RON (Re-Open Nominations) option. Mae Rohani is running for Womens' Officer, Erin Lee for Mature and Part-Time Students' Officer, Roz Burgin for Community Action Officer, and Rachel Cavet for Ethical and Environmental Officer. <br /><br />

Redbrick will be covering the Presidential Debate on the evening of Saturday 2nd March. We will also be bringing you live coverage of the election season in association with Burn FM and Guild TV at www.guildelections.co.uk, a dedicated website featuring the latest news, videos and photos from the campaign trail.
					
					<div class="more-top">
						<h3 class="light">More Top Stories</h3>
						<ul class="stories">
							<li><h4><a href="#">Title 1</a></h4></li>
							<li><a href="#">Title 2</a></li>
							<li><a href="#">Title 3</a></li>
						</ul>
					</div>
					
				</div>
			</div>-->

			<div class="bottom-gap right">
					<h1 class="light">Campaigning begins</h1>
					<h5>Patrick McGhee, Zahra Damji &amp; Beth Clarke - 27th February 2013</h5>
				</div>

				<div class="article columns3">
					<span class="bold">Campaigning for this year's Guild Officer Elections began today.</span><br />

					After a short breakfast at the Guild of Students, candidates began planting signs and banners around campus to promote their policies. Many candidates have adopted costumes and gimmicks, and  have been speaking to students about their campaigns. <br />

					Redbrick spoke to current President David Franklin, who gave some advice to candidates.  He said, ‘From personal experience, firstly take care of yourself, it’s very important, and you don’t, make sure someone else is. Secondly when you’re campaigning just focus on what you’re doing, and if you’re getting distracted by what other people are doing, trying to compete with other people, you’re probably going to be wasting your time. Be positive, be happy, have fun, enjoy it and just focus on your own campaign.’ He added that students should ‘take all the free sweets you can’ and ‘focus on policies’ during the campaigning season.<br />

					<div class="pullquote">‘I guess it’s getting yourself out there, get amongst it all, try to talk to as many students and tell them why they should vote for you.’</div>

					Vice-President (Activities and Development) also advised candidates, commenting that, ‘I guess it’s getting yourself out there, get amongst it all, try to talk to as many students and tell them why they should vote for you.’<br />

					Candidate websites and social media accounts for many candidates have gone live, and information on these can be access via each candidate’s page on this website. <br />

					The first major event during the campaign period, a candidate hustings, took place today at 1:30pm in Mermaid Square at the Guild. At this event, candidates addressed an audience of students, speaking about their policies and explaining why they think they should be elected. <br />

					Redbrick will be conducting interviews and providing live coverage of the campaigning season until 9th March, on which the results of this year's elections will be announced.
					
					<div class="more-top">
						<h3 class="light">More Stories</h3>
						<ul class="stories">
							<li><h4><a href="http://www.redbrick.me/2013/02/guildelections13/">Candidates announced</a></h4></li>
							<li><h4><a href="http://www.redbrick.me/2013/03/what-orwell-tells-us-about-the-guild-elections/">What Orwell tells us about the Guild Elections</a></h4></li>
							<!--<li><a href="#">Title 2</a></li>
							<li><a href="#">Title 3</a></li>-->
						</ul>
					</div>
					
				</div>
			</div>

		</div>

		<!--<div class="box span12">

			<div class="bottom-gap">
				<h1 class="light"><a href="debate.php">The Presidential Debate</a></h1>
				<h5>2nd March, The Debating Hall, Evening (Time to be confirmed)</h5>
			</div>

			<div>
				<h5>Submit your question to the presidential candidates.</h5>
			</div>

		</div>-->

		<!--<div class="box-dark span12" style="text-align:center;">

			<a href="debate.php" style="color:#FFFFFF;"><img src="img/presidentialdebate.png" style="width:100%; max-width:1000px;" /></a><br />
			<h5>Submit your question to the presidential candidates.</h5>

		</div>-->

		<div class="box span12" id="candidates-div">

			<div class="bottom-gap">
				<h1 class="light">The Sabbatical Candidates</h1>
				<h5>Select a role to see who's running - <a href="manifestos.php">Click here for non-sabbatical Candidates</a></h5>
			</div>

			<ul class="span12 selector">
				<li data-id="president" id="choose-president" class="selected change-candidate">President</li>
				<li data-id="vpdr" id="choose-vpdr" class="change-candidate">Democracy &amp; Resources</li>
				<li data-id="vpad" id="choose-vpad" class="change-candidate">Activities &amp; Development</li>
				<li data-id="vpe" id="choose-vpe" class="change-candidate">Education</li>
				<li data-id="vphc" id="choose-vphc" class="change-candidate">Housing &amp; Community</li>
				<li data-id="vpw" id="choose-vpw" class="change-candidate">Welfare</li>
				<li data-id="vps" id="choose-vps" class="change-candidate">Sport</li>
			</ul>

			<div id="president" class="candidates span12 show">

				<div class="bottom-gap span12">
					<h3 class="light">Presidential Updates</h3>
					<ul style="list-style:none;">
						<li><a href="http://www.redbrick.me/2013/03/president-candidates/">Candidate Update, March 6th</a></li>
					</ul>
				</div>

				<?php
				$candidates = $mysql->get_candidates("president", "1");
				while($candidate = mysql_fetch_assoc($candidates))
				{
					if($candidate['shortname'] == "")
					{
						$photo = "img/blank.png";
					}
					else
					{
						$photo = "img/candidates/" . $candidate['shortname'] . "-sml.png";
					}
					?>
					<div class="candidate span3 span4-tablet span6-mobile"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><img src="<?php echo $photo ?>" /><br /><?php echo $candidate['name'] ?></a></div>
					<?php
				}
				?>
				<div class="candidate span3 span4-tablet span6-mobile"><img src="img/blank.png" /><br />RON</div>
			</div>

			<div id="vpdr" class="candidates span12">

				<div class="bottom-gap span12">
					<h3 class="light">Vice President (Democracy &amp; Resources) Updates</h3>
					<ul style="list-style:none;">
						<li><iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F82137903"></iframe></li>
						<li><a href="http://www.redbrick.me/2013/03/vice-president-democracy-and-resources-candidate/">Candidate Update, March 6th</a></li>
					</ul>
				</div>
				<?php
				$candidates = $mysql->get_candidates("vpdr", "1");
				while($candidate = mysql_fetch_assoc($candidates))
				{
					if($candidate['shortname'] == "")
					{
						$photo = "img/blank.png";
					}
					else
					{
						$photo = "img/candidates/" . $candidate['shortname'] . "-sml.png";
					}
					?>
					<div class="candidate span3 span4-tablet span6-mobile"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><img src="<?php echo $photo ?>" /><br /><?php echo $candidate['name'] ?></a></div>
					<?php
				}
				?>
				<div class="candidate span3 span4-tablet span6-mobile"><img src="img/blank.png" /><br />RON</div>
			</div>

			<div id="vpad" class="candidates span12">

				<div class="bottom-gap span12">
					<h3 class="light">Vice President (Activities &amp; Development) Updates</h3>
					<ul style="list-style:none;">
						<li><a href="http://www.redbrick.me/2013/03/vice-president-activities-and-development-candidates/">Candidate Update, March 6th</a></li>
					</ul>
				</div>

				<?php
				$candidates = $mysql->get_candidates("vpad", "1");
				while($candidate = mysql_fetch_assoc($candidates))
				{
					if($candidate['shortname'] == "")
					{
						$photo = "img/blank.png";
					}
					else
					{
						$photo = "img/candidates/" . $candidate['shortname'] . "-sml.png";
					}
					?>
					<div class="candidate span3 span4-tablet span6-mobile"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><img src="<?php echo $photo ?>" /><br /><?php echo $candidate['name'] ?></a></div>
					<?php
				}
				?>
				<div class="candidate span3 span4-tablet span6-mobile"><img src="img/blank.png" /><br />RON</div>
			</div>

			<div id="vpe" class="candidates span12">

				<div class="bottom-gap span12">
					<h3 class="light">Vice President (Education) Updates</h3>
					<ul style="list-style:none;">
						<li><a href="http://www.redbrick.me/2013/03/vice-president-education-candidate/">Candidate Update, March 6th</a></li>
					</ul>
				</div>

				<?php
				$candidates = $mysql->get_candidates("vpe", "1");
				while($candidate = mysql_fetch_assoc($candidates))
				{

					if($candidate['shortname'] == "")
					{
						$photo = "img/blank.png";

					}
					else
					{
						$photo = "img/candidates/" . $candidate['shortname'] . "-sml.png";
					}
					?>
					<div class="candidate span3 span4-tablet span6-mobile"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><img src="<?php echo $photo ?>" /><br /><?php echo $candidate['name'] ?></a></div>
					<?php
				}
				?>
				<div class="candidate span3 span4-tablet span6-mobile"><img src="img/blank.png" /><br />RON</div>
			</div>

			<div id="vphc" class="candidates span12">

				<div class="bottom-gap span12">
					<h3 class="light">Vice President (Housing &amp; Communities) Updates</h3>
					<ul style="list-style:none;">
						<li><iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F82090720"></iframe></li>
						<li><a href="http://www.redbrick.me/2013/03/vice-president-housing-and-community-candidates/">Candidate Update, March 6th</a></li>
					</ul>
				</div>
				<?php
				$candidates = $mysql->get_candidates("vphc", "1");
				while($candidate = mysql_fetch_assoc($candidates))
				{
					if($candidate['shortname'] == "")
					{
						$photo = "img/blank.png";
					}
					else
					{
						$photo = "img/candidates/" . $candidate['shortname'] . "-sml.png";
					}
					?>
					<div class="candidate span3 span4-tablet span6-mobile"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><img src="<?php echo $photo ?>" /><br /><?php echo $candidate['name'] ?></a></div>
					<?php
				}
				?>
				<div class="candidate span3 span4-tablet span6-mobile"><img src="img/blank.png" /><br />RON</div>
			</div>

			<div id="vpw" class="candidates span12">

				<div class="bottom-gap span12">
					<h3 class="light">Vice President (Welfare) Updates</h3>
					<ul style="list-style:none;">
						<li><iframe width="100%" height="166" src="//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2FFinaC%2Fvice-president-of-welfare-interview-guild-elections-2013%2F&embed_uuid=7a7201a7-fae3-457c-a6b5-838d92fbcfe6&stylecolor=&embed_type=widget_standard" frameborder="0"></iframe></li>
					</ul>
				</div>
				<?php
				$candidates = $mysql->get_candidates("vpw", "1");
				while($candidate = mysql_fetch_assoc($candidates))
				{
					if($candidate['shortname'] == "")
					{
						$photo = "img/blank.png";
					}
					else
					{
						$photo = "img/candidates/" . $candidate['shortname'] . "-sml.png";
					}
					?>
					<div class="candidate span3 span4-tablet span6-mobile"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><img src="<?php echo $photo ?>" /><br /><?php echo $candidate['name'] ?></a></div>
					<?php
				}
				?>
				<div class="candidate span3 span4-tablet span6-mobile"><img src="img/blank.png" /><br />RON</div>
			</div>

			<div id="vps" class="candidates span12">

				<div class="bottom-gap span12">
					<h3 class="light">Vice President (Sport) Updates</h3>
					<ul style="list-style:none;">
						<li><iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F82167787"></iframe></li>
					</ul>
				</div>
				<?php
				$candidates = $mysql->get_candidates("vps", "1");
				while($candidate = mysql_fetch_assoc($candidates))
				{
					if($candidate['shortname'] == "")
					{
						$photo = "img/blank.png";
					}
					else
					{
						$photo = "img/candidates/" . $candidate['shortname'] . "-sml.png";
					}
					?>
					<div class="candidate span3 span4-tablet span6-mobile"><a href="candidate.php?id=<?php echo $candidate['shortname'] ?>"><img src="<?php echo $photo ?>" /><br /><?php echo $candidate['name'] ?></a></div>
					<?php
				}
				?>
				<div class="candidate span3 span4-tablet span6-mobile"><img src="img/blank.png" /><br />RON</div>
			</div>

		</div>

		<div class="box span12" id="help-div">

			<div class="bottom-gap">
				<h1 class="light">Help! What are the Guild Elections?</h1>
			</div>

			<div class="span8 offset2 span10-tablet offset1-tablet bold" style="margin-top:30px; margin-bottom:40px; color:#0071bb; text-align:center;">
			During the Guild Elections, you'll be electing 7 full time Sabbatical Officers, students who have graduated or are taking a year out to fulfil the position. The candidates you elect will have a manifesto of goals which they aim to complete during their twelve months in office. There are also 12 non-sabbatical positions open during the Guild Elections that are fulfilled by current students alongside their degree.
			</div>

			<div class="span4 center" style="padding-left:30px; padding-right:30px;">
				<h3 style="color:#32507c;">Representation</h3>
				<img src="img/mermaid.png" style="width:60%; margin-top:15px; margin-bottom:15px;" /><br />
				The Guild Officer Team will represent you and your opinions to your school, the University and the wider community.
			</div>
			<div class="span4 center" style="padding-left:30px; padding-right:30px;">
				<h3 style="color:#32507c;">£4.3 million</h3>
				<img src="img/ballot.png" style="width:60%; margin-top:15px; margin-bottom:15px;" /><br />
				The officers you vote in will lead the Guild of Students, a charity with an annual turnover of £4.3 million, in providing value, fun, support and representation to you as students.
			</div>
			<div class="span4 center" style="padding-left:30px; padding-right:30px;">
				<h3 style="color:#32507c;">University Life</h3>
				<img src="img/clock.png" style="width:60%; margin-top:15px; margin-bottom:15px;" /><br />
				Successful candidates will have the chance to work towards improving your life at University, whether that is your education, experience in the Guild, or your time at home.
			</div>

			<div class="span4 offset8 span4-tablet offset8-tablet right" style="margin-top:20px;">
				<span style="font-size:13px;">Illustrations by Anita Baumgärtner</span>
			</div>

		</div>
			
		<div class="box span12" id="dates-div">

			<div class="bottom-gap">
				<h1 class="light">Key Dates</h1>
			</div>

			<h3 class="bold">Campaigning Period</h3>
			27th February - 8th March<br /><br />

			<h3 class="bold">Hustings</h3>
			27th February, Mermaid Square 1pm-5pm (All positions)<br />

			4th March, Campus 1pm-4pm (All positions)<br /><br />

			<h3 class="bold">Presidential Debate</h3>
			2nd March, The Debating Hall Evening (To Be Confirmed)<br /><br />

			<h3 class="bold">Voting</h3>
			4th March 10am - 8th March 4pm<br /><br />

			<h3 class="bold">Results Night</h3>
			9th March, The Debating Hall 7.30pm

		</div>

	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script>
	/*function Parallax(){
		var top = $(document).scrollTop();
		$("body").css({'background-position': '0px -' + top/4 + 'px'});
	}*/

	var hash = location.hash.replace("#","");
	if(hash != "")
	{
		goto('candidates-div');
		changeto(hash);
	}
	
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

	function changeto(id){
		$(".selected").removeClass("selected");
		$("#choose-" + id).addClass("selected");
		$(".candidates").fadeOut("fast").removeClass("show");
		$("#" + id).fadeIn("slow").addClass("show");
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