# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.10)
# Database: elections
# Generation Time: 2013-06-13 21:21:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table candidates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `candidates`;

CREATE TABLE `candidates` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `position` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `campaign_name` varchar(100) DEFAULT NULL,
  `shortname` varchar(255) NOT NULL,
  `description` text,
  `twitter` varchar(40) DEFAULT NULL,
  `facebook` varchar(40) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `guildtvclip` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `sabb` int(1) DEFAULT NULL,
  `2014` int(1) DEFAULT NULL,
  `views` int(255) NOT NULL,
  `soundcloud` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `candidates` WRITE;
/*!40000 ALTER TABLE `candidates` DISABLE KEYS */;

INSERT INTO `candidates` (`id`, `position`, `name`, `campaign_name`, `shortname`, `description`, `twitter`, `facebook`, `website`, `guildtvclip`, `photo`, `sabb`, `2014`, `views`, `soundcloud`)
VALUES
	(1,'president','Malia Bouattia','Malia \'2014\' Bouattia','malia-bouattia','I\'m Malia \'2014\' Bouattia and I\'m hoping to be your next President. My main policies include recognizing the guild\'s diversity and therefore organizing a range of inclusive events as well as making services more accessible. I wish to break down barriers to education, prioritising issues faced by students and empowering them to actively effect change. Finally I hope to make this a Guild which fights for students\' rights and interests whether this includes fighting dodgy landlords or UK boarder agency! I have 7 years of experience with the student movement. I\'m currently on the NUS national executive council, I have co-founded the Postgraduate and Mature students\' association, served as Guild councillor for 2 years, on various society committees including ethnic minorities\' associations committees at the university and with the NUS. I share the vision for liberation, diversity, co-operation and public education which the Guild of \'2014\' hopes to deliver!','maliabouattia','voteguildof2014','www.guildof2014.com','BJ8UnnoqaNQ','',1,1,956,'81035886'),
	(2,'president','Areeq Chowdhury','Areeq Chowdhury','areeq-chowdhury','I am a final year, Economics and Political Science student from Manchester and I am currently the President of BEMA, the Ethnic Minorities Association. As President, I have led BEMA to become a stronger, more relevant, and more sustainable Liberation Association. As well as organising events such as Black History Month and Love Talent: Hate Racism, BEMA has also had a focus on \'alternative\' events with our successful Alternative Freshers\' and Refreshers\' Weeks.\r\n\r\nI am committed to pushing for positive change in our communities and this extends to our student union here in Birmingham. In Guild Council, I have had motions passed relating to creating annual winter food drives, creating a substantial Black History Month grant, and one which clamps down on racism on campus. With your support, backing, and vote, we can make massive improvements to the academic services and social experience at our University.','AreeqChowdhury','groups/voteareeq','www.voteareeq.com','PxC4VgGv7Fk','',1,0,770,'81037135'),
	(3,'president','Tim Lucas','Tetris Tim Lucas','tim-lucas','My name is Tim Lucas (Tetris Tim), I\'m 28 and a final year PhD student. Despite being a postgrad ive been on the Freshers Fest organising committee for the past three years and ive been stewarding it since 2006, hopefully this shows I\'m not over the hill!\r\n\r\nMy four manifesto points are; Easier access to Gradball and FAB tickets, value for money from your course and union, abolishing postgrad development needs analysis forms and writing a new strategic plan for the guild. There is something for everyone in those, be you a postgrad, undergrad and/or someone who doesn\'t engage with the farce that is guild politics. I\'ve have an extreme wealth of experience of the university and the guild and I do not get involved in the factionalism associated with Guild politics, this will help if elected.\r\n\r\nI would definitely recommend checking out my youtube channel: www.youtube.com/votetetristim','TetrisTim','','www.tetristim.com','dioGcHuMvGM','',1,0,944,'81036692'),
	(4,'president','Poppy Wilkinson','Poppy Wilkinson','poppy-wilkinson','','VotePoppy4Pres','','','BZacpxDFJc8','',1,0,1270,'81036472'),
	(5,'president','Mark Williams','Mark Williams','mark-williams','My name is Mark Williams, I am 21 years old and I am a third year philosophy student. In the Guild Officer Elections I am running for the position of president.\r\n\r\nMy three main policies are:\r\n1. An improved library service with regard to short-term loans and the availability of core texts. \r\n\r\n2. Increased transparency within Guild Council with regard to the availability of motions and results from meetings. They should be far easier to access, in a much simpler format.\r\n\r\n3. Better food across campus - That means cheaper, higher quality, and more healthy food.\r\n\r\nYou should vote for me because I am a hardworking, tenacious and diligent individual. However, I never lose sight of the fact that university should be a really fun experience for everyone. I want to make changes to the university and the Guild, based on what you want. I am willing to work non-stop, to make this happen.','MarkForPres2013','groups/MarkForPresident','mark4president.wordpress.com','3lHDrf6bOsA','',1,0,780,'81036000'),
	(6,'vpdr','Thomas Wragg','Tom \'2014\' Wragg','thomas-wragg','I\'m Tom \'2014\' Wragg, a 22-year old final year Civil & Energy Engineering undergraduate student. I\'m running for Vice President (Democracy & Resources).\r\n\r\nMy three main policies are the following:\r\n1. Cheap student housing, food and transport - using collective purchasing power for cheaper energy and better food; creating a network of student housing co-ops, starting in Birmingham; promoting cycling skills and participation at all levels.\r\n\r\n2. Increase student control of budgeting and events - better transparency and suggestions for students to improve the way our Guild works; democratically controlled events and services that cater to all students.\r\n\r\n3. A Guild for financial and environmental sustainability - changing investment to focus on responsibility; looking to social enterprise and ethical alternatives in the Guild as part of a long term vision.\r\n\r\nWe need a Guild that values co-operation, liberation and public education. Vote Tom \'2014\' Wragg VPDR.','T_Wragg','voteguildof2014','www.guildof2014.com','j36TjvQ5l78','',1,1,490,'81036752'),
	(7,'vpad','Elio Di Muccio','Elio \'2014\' Di Muccio','elio-di-muccio','My name is Elio Di Muccio, I am 20 years old and I am running with the Guild of 2014 for Vice President Activities and Development. I\'m originally from Italy and moved to NYC when I was 10. I then came to do my undergrad here in Birmingham and I am now doing a Masters in Social and Political Theory. I want to make sure that the Guild of 2014 goes digital, scraps needless paperwork, provides great entertainment and fosters an active community of informed volunteers, campaigners and fundraisers. Students should vote for me because I am part of a group of candidates with a shared vision - inspired to realise new ambitious projects and encourage the sharing of resources across the student body. If voted, Guild of 2014 candidates and I will use cooperation to achieve what has previously been unachievable.','eliodimuccio','voteguildof2014','www.guildof2014.com','SiGG3Jux5Pg','',1,1,360,'81037261'),
	(8,'vpad','Molly Wright','Good Golly Miss Molly','molly-wright','Hi! I\'m Good Golly Miss Molly (aka Molly Wright.) I have been on committees of Jazz and Blues Society and BurnFM, Guild Councillor for two years and a Student Groups Committee member.\r\n\r\nMy three main policies are:\r\n1. \'Pay Your Bills With Society Skills\'. This will address the lack of graduate employment advice offered by JobZone. I will work closely with Careers Network, creating regular workshops and direct advice for anyone considering a career as a result of their student groups experiences. Missed a group at Freshers Fair?\r\n\r\n2. Society Saturdays give you a second chance. Different groups every Saturday in term time will spend a few hours at the Vale, discussing and demonstrating their events and how to get involved.\r\n\r\n3. A better Guild website. Initially, it will improve the events calendar, streamline required paperwork and deliver fast, clear and up-to-date information. A go-to hub for everything you need.','MissMolly4VPAD','Molly4VPAD','www.molly4vpad.com','3rnfPM5WOvs','',1,0,518,'81036221'),
	(9,'vphc','Dave Charles','Domino\'s Dave Charles','dave-charles','I\'m Domino\'s Dave and I\'m running to be your next VPHC. I\'ve been involved with the Guild since I became Maple Bank Volunteering Officer 2012, I\'ve also become heavily involved with Carnival RAG sitting on the 2012/13 committee and the National RAG Conference committee. I\'ve organised huge events such as a LOST which raised over &pound;7000 for a local charity and have worked with RA from all halls to put on joint events such as the winter ball, I also train with the University\'s Aussie Rules squad. My policies are all based upon what students want having spoken to students and RAs from multiple years listening to their concerns and problems to come up with a realistic, achievable manifesto which will benefit students in Birmingham. My policies will affect all students not just a targeted minority and they will help improve experiences in halls, houses and benefit the community.','Dominos_Dave','','www.dominosdave.co.uk','MY-8x2WxenI','',1,0,546,'81037336'),
	(10,'vphc','Sean Farmelo','Sean \'2014\' Farmelo','sean-farmelo','I\'m Sean \'2014\' Farmelo, a final year philosophy student running to be Vice President Housing and Community, on a platform of actively improving housing for students and cutting rent costs.\r\n\r\nI will set up a tenants association to fight against dodgy landlords and give easy access to advice for students living in difficult situations. Allowing you to report agencies and landlords anonymously, giving the Guild a strong bargaining base for better quality and more affordable housing.\r\n\r\nI will work to create student housing cooperatives; living in a housing co-op can be as cheap as &pound;40pw saving students over &pound;1000 a year on average rent prices.\r\n\r\nFurther, I will lobby the university to ensure that all new halls are afforddable and that RAs and their residents are at the heart of decision-making for halls, and I will give them greater autonomy and less bureaucracy with the events they put on.','seanfarmelo','voteguildof2014','www.guildof2014.com','Erq_rAt09cU','',1,1,338,'81036997'),
	(11,'vphc','Amy Hegarty','Amy \'Hegz\' Hegarty','amy-hegarty','Hey, I\'m Amy \'Hegz\' Hegarty and I\'m a second year political science and philosophy student. I\'m running on 3 main policies; \'ratemylandlord.com\', selly oak spirit, and car permit crackdown. To find out more about these, check out www.guildelections.co.uk, look on my Facebook/Twitter pages or just come and find me on campus for a chat!. I\'m really passionate about the role and know that my manifesto points out some really big issues, but I can ram my manifesto down your throats all I like and you are still going to have more problems than I can even think of. I want to find out what you think about your local community so we can really be proud of our Guild and where we live! I\'m friendly, I work well in a team and I sure love housing and community! #Hegz4Housing','#hegsforhousing','','','7rRTAlyvstQ','',1,0,434,'81036653'),
	(12,'vphc','Josh Llewellyn','Josh Llewellyn','josh-llewellyn','I am \'Indiana Josh\' and I am running for Vice President of Housing and Community. My main manifesto points are, firstly, to crack the whip on dodgy landlords in Selly Oak and try to sort out the many Temples of Doom. Too many student houses are below the standard that we should be expecting and demanding, whilst other are just dangerous and not fit to be lived in. Secondly, I will ensure that crime figures are reduced. I intend to do this by increasing the awareness of the general population of students, but also by liaising with local authorities to provide an organised crack down on crime. Thirdly, I want to increase the amount of recycling and the ease in which rubbish can be collected around Selly Oak through increasing the number of wheelie bins and recycling bins. Vote Indiana Josh and keep track at www.twitter.com/indianajoshVPHC.','IndianaJoshVPHC','','','pTMVaoz-N7g','',1,0,416,'81035946'),
	(13,'vpw','Jennifer Kirk','Captain Jen Kirk','jennifer-kirk','Hey guys, my name is Jen Kirk and I\'m running for VP Welfare because I care about the students and the support you get at University.\r\n\r\nI have three main policies:\r\n1. I will review and reform the welfare tutor system.\r\n\r\n2. I will continue to campaign to change the extenuating circumstances procedures to make it easier for students to get the support they need for academic success.\r\n\r\n3. I will improve and co-ordinate welfare campaigns for the guild, including SHAG week and Mental Health Awareness. I will support liberation campaigns and other hard to reach groups.\r\n\r\nYou should vote for me because I am passionate about the welfare of students. I have the experience needed to make an impact, as I was the Disabled Students\' Officer last year.\r\n\r\nI am \'Captain\' Jen Kirk looking after the next generation!\r\n\r\nIf you want to know more please find me on Facebook and follow me on Twitter.','votecaptainkirk','votecaptainkirkvpw','','eB1f3Qu99Pc','',1,0,341,'81035806'),
	(14,'vpw','Jethro Lee','Jet Lee','jethro-lee','My name is Jethro (Jet) Lee and I am going to fight for your welfare. I am 21 and I am about to graduate. My main policies are improving student\'s health by providing more funding for student councillors, introducing more water fountains in departments and improving accessibility to sexual health services, for example, launching a monthly sexual health clinic on campus. I also want to improve academic welfare by introducing universal mitigations and appeals procedures across all departments and a fair fit to sit procedure for all. Finally I will improve safety for all students by reinforcing set student taxi fares and the emergency student taxi fare system. If voted as Vice President Welfare I will strive to achieve my policies and try my upmost to ensure that all students are aware of the welfare assistance available to them at the Guild of Students.','votejetleevpw','','','CGWLiGUhMUc','',1,0,479,'81036285'),
	(15,'vpe','Hattie Craig','Hattie \'2014\' Craig','hattie-craig','I\'m Hattie \'2014\' Craig and I\'m running to be your next VP Education. My policies can be divided into three main points. Firstly, I want to increase the Guild\'s ability to campaign on issues surrounding the marketization and corporatisation of our university which puts money and profit, not students, at the heart of the education system and empower students who want to protect their courses and the quality of education they receive. I also believe that learning should be a collaborative process between students and staff. I want to strengthen the links between these two groups, improve feedback and create democratic structures to give students greater control over their courses and own education. Finally, I want to ensure that no student is unfairly disadvantaged by widening the bursary scheme, increasing awareness of and lessening hidden course costs, providing a diversity of assessment styles and ensuring better training for personal tutors.','hattie_craig','voteguildof2014','www.guildof2014.com','rDgWh1uLyb0','',1,1,541,'81037050'),
	(16,'vps','Tim Barsellotti','Tim \'2014\' Barsellotti','tim-barsellotti','My name is Tim Barsellotti and I\'m a 3rd year Physiotherapy student striving to be Vice-President Sport 13-14.\r\n\r\nMy 3 key policies are: \r\n1. A \'Fruit and Veg Box Service\' throughout Selly Oak, affordable nutritious food on campus and a fruit and veg stall on the Vale with FREE Circuits, Zumba and Yoga accessible to residents on the Vale, Selly Oak and Campus.\r\n\r\n2. To improve the UoB Alumni Scheme. Achieved through training from and with professionals and integrating Sports clubs into the development of the New Munrow Centre to produce a world-class facility for students.\r\n\r\n3. To engineer frequent large-scale Sporting Tournaments, enabling participation for every student no matter their ability, and pioneering Paralympic events.\r\n\r\nVote \'Tim Barsellotti\' to have a VPS who will aspire to radically transform student lifestyles through facilitating exercise/sports for all students, encouraging community and healthy foods.','timbarsellotti','voteguildof2014','www.guildof2014.com','hd4QXRc3YIc','',1,1,502,'81037104'),
	(17,'vps','Vicki Harris','Vicki \'VA VA VOOM\' Harris','vicki-harris','My name is Vicki \'VA VA VOOM\' Harris, I\'m 20 and a 3rd year English and Drama student.\r\n\r\nMy VISION: an engaged and representative Athletic Union and accessible sport for everyone, no matter what your shape, size or ability.\r\n\r\n#1 Create an Athletic Union Committee to increase student OWNERSHIP and ENGAGEMENT in the delivery of student sport Representation, Event organisation and Promotion.\r\n\r\n#2 \'Focus on ACCESS - set up a Disability Sport Working Group and create a \'Sport for All\' survey to break down the barriers that marginalised students face when participating in sport.\r\n\r\n#3 SportsFest - bringing together 2nd Sports Fair, open-club Taster sessions and Sports Night to boost PARTICIPATION in social sport. Support more charity and community sport fundraisers.\r\n\r\nI have strong experience in sport development and volunteering, and believe I can make a positive impact in the role of Vice-President SPORT for YOU.','','','','9pYgvkP2GPQ','',1,0,550,'81037186'),
	(18,'vps','Sara Henderson','Sara \"Sport Relief\" Henderson','sara-henderson','My name is Sara \"Sport Relief\" Henderson, and I am standing for Vice President Sport. I compete in the heptathlon with the athletics club of which I was the treasurer last year. I am currently the secretary of the Natural Sciences Society.\r\n \r\nMy policies are about giving everybody opportunities to access sport. This includes introducing female only swim and gym time within the Munrow sports centre, and introducing a disability sports program to run parallel to the current sports programme, enabling students with disabilities to try different sports. Finally I want to ensure that all the universities sports clubs have access to usable and suitable facilities equal or better than those that we currently have access to on campus.\r\n \r\nI should win because I will embrace the challenges ahead and stand up for each and every student allowing them to access sports clubs and facilities suitable to their needs.','','','','4sU4WOO-DVw','',1,0,351,'81036068'),
	(19,'vps','James Hughes','James \'And The Giant Peach\' Hughes','james-hughes','James \'and the Giant Peach\' is back, back to fight to be re-elected for a second year in office to continue the progress that has begun this year. As well as continuing with my current policies of increasing sporting participation, healthy eating and fighting for value in sport I promise to increase accessibility in sport for disabled students as well as pushing volunteering in sport so us as students can get involved in sport in our local community in order to make a difference.\r\n\r\nHaving already served one successful year as Vice-President (Sport) I believe I have the experience and have shown the drive and dedication over 2012/2013 to show that I\'m highly capable of having another year in office working for students over 2013/2014. This year I have demonstrated 100% commitment, or \'VPS dedication\' and it has been an absolute pleasure.','reelectthepeach','reelectthepeach','reelectthepeachvpsport.wordpress.com','GU7rtu036JQ','',1,0,399,'81036508'),
	(20,'vps','Dan Jaenicke','Action\' Dan Jaenicke','dan-jaenicke','I\'m Daniel Jaenicke and a 3rd year Political Science student. I\'ve participated in sport since joining UoB, being on the committee for Men\'s Basketball for the last two years, and played for the first team all three years. This has given me a great insight into the inner workings of the Athletic Union, the Munrow, and UBSport, and I feel strongly that I can utilize the knowledge I have gained through my experiences to make positive change for UoB students. My policies show awareness of students\' needs and by bringing a new Pay as You Go Gym membership to the Munrow, making it more affordable for students. More water machines improve students\' access to water making sure they stay hydrated without the cost of buying water. Increasing participation using the schemes we have in place such as Try Sport and Activelifestyles through campus wide advertising and listening to student needs.','ActionDan4VPS','ActionDan4VPS','','GK6tEV-3xGI','',1,0,316,'81036340'),
	(21,'vps','Sam Travell','Sam \'Travie\' Travell','sam-travell','I\'m Sam Travell and a 3rd year Sport and Exercise Student. My policies are all about promoting sport on campus, showcasing what we have and thanking those who make it happen!\r\n\r\nSports days will be a celebration of all we have on campus and will involve local clubs, associations and our own clubs showcasing across campus. Rewarding those who partake and incentivising exercise shall increase participation. A my.sport platform will enable media groups to promote their work, students to find out everything that\'s going on and an area to promote free sessions and activities!\r\n\r\nI\'ve got a great insight of University Sport, partaking at all levels. I\'ve been the Elgar sports officer (Most Outstanding RA 2011), mixed netball intra-league rep and the 2nds tennis captain (league champions 2012). Being an RA, Guild Staff and Senior Fresher\'s Fest assistant, I\'ve seen the many aspects of how the guild works.','travnfresh','','','qQ8_FDCODZE','',1,0,406,'81036940'),
	(22,'dso','Ellis Palmer','Ellis Palmer','ellis-palmer','','','','','','',0,0,58,''),
	(23,'dso','Chames Zaimeche','Chames \'2014\' Zaimeche','chames-zaimeche','','','','','','',0,1,62,''),
	(24,'emo','Tracy Makale','Tracy Makale','tracy-makale','','','','','','',0,0,45,''),
	(25,'emo','Olivia Ogolo','Olivia \'2014\' Ogolo','olivia-ogolo','','','','','','',0,1,57,''),
	(26,'lgbtqso','Leilani Rabemananjara','Leilani Rabemananjara','leilani-rabemananjara','','','','','','',0,0,72,''),
	(27,'lgbtqso','Isobel Stevenson','Issy \'Even\' Stevenson','issy-stevenson','','','','','','',0,0,70,''),
	(28,'wo','Mae Rohani','Mae \'2014\' Rohani','mae-rohani','','','','','','',0,1,57,''),
	(29,'hso','Mohammed Mumit','Mohammed \'2014\' Mumit','mohammed-mumit','','','','','','',0,1,59,''),
	(30,'iso','Bihe Chen','Bihe Chen','bihe-chen','','','','','','',0,0,60,''),
	(31,'iso','Deborah Hermanns','Deborah \'2014\' Hermanns','deborah-hermanns','','','','','','',0,1,64,''),
	(32,'mptso','Erin Lee','Erin Lee','erin-lee','','','','','','',0,0,59,''),
	(33,'arafo','Georgia Levine','Georgia Levine','georgia-levine','','','','','','',0,0,64,''),
	(34,'arafo','Zarah Sultana','Zarah \'2014\' Sultana','zarah-sultana','','','','','','',0,1,66,''),
	(35,'cao','Roz Burgin','Roz \'2014\' Burgin','roz-burgin','','','','','','',0,1,57,''),
	(36,'eeo','Rachel Cavet','Rachel \'2014\' Cavet','rachel-cavet','','','','','','',0,1,48,''),
	(37,'hso','Jagpal Pahal','Jagpal Pahal','jagpal-pahal','','','','','','',0,0,57,'');

/*!40000 ALTER TABLE `candidates` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table winners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `winners`;

CREATE TABLE `winners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `winners` WRITE;
/*!40000 ALTER TABLE `winners` DISABLE KEYS */;

INSERT INTO `winners` (`id`, `role`, `name`)
VALUES
	(1,'president','poppy-wilkinson'),
	(2,'vpdr','thomas-wragg'),
	(3,'vpad','molly-wright'),
	(4,'vps','vicki-harris'),
	(5,'vpw','jethro-lee'),
	(6,'vphc','dave-charles'),
	(7,'vpe','hattie-craig'),
	(8,'arafo',''),
	(9,'cao',''),
	(10,'dso',''),
	(11,'eeo',''),
	(12,'emo',''),
	(13,'hso',''),
	(14,'iso','bihe-chen'),
	(15,'lgbtqso','leilani-rabemananjara'),
	(16,'mtpso',''),
	(17,'wo','');

/*!40000 ALTER TABLE `winners` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
