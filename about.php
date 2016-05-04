<!DOCTYPE html>

<?php require_once('config/sd_helper.php');?>

<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!-- true source <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
		<script src="config/jquery.min.1.11.1.js"></script>
		<link 	rel="stylesheet" type="text/css" href="config/sd_style.css"/>
		<script src="config/sd_interaction.js"></script>
		
		<title>Shon Diaz - About</title>
	</head>
	

	<body>

		<h1 id="navigation_title">Shon Diaz</h1>
		
		<?php BuildNavigationBar();?>

		<img id="animated_menu_mini" class="spinner" src="images/CentralDistrict.gif">


		<div class="story_section">
			<h2>Contact</h2>
			<p>
			If you have an idea that we can grow from or take over the world together, then contact me!<br>
			The best method of communication is email then skype on appointment.<br>
			Skype: ShonDiaz<br>
			Email: shon@shondiaz.com<br>
			</p>
		</div>

<!--
		<div class="story_section">
			<h2>About The Website Design</h2>
			<p>
			Do you remember back in the 90s when sites had plenty of awful textures for your eyes to vomit on? Or maybe in the 00s when we discovered gradients then over killed them?<br>
			Maybe my dates are wrong, however, I firmly believe that less is more when it comes to interface designs and color selection. You will witness my programmer art which is far inferior to artist art. Don't hate on my artwork. You should be like: "oh look at how this awesome subpar art made at 1am after a full day of labor. whoaaaa!"
			</p>
		</div>
-->

		<div class="story_section">
			<h2>Website Graphics Credits</h2>
			<p>
			The Logo was designed by my brother (thanks bro!)<br>			
			The game sprites are grabbed from spriters-resource.com. I took the time to animate everything into something cool using various graphics tools (mostly Photoshop).<br>
			<br>
			Other images from the projects page:<br>
			Cyclops - screenshot and recolor of terminal standard output. The ascii artist of the robot is unknown. Perhaps LGB/fsc is the name<br>
			Secret Santa - Free images gathered over the net<br>
			DragonBall Z - other DBZ fan artist (especially AngryBoy)<br>
			Pokemon Tactics - Deviant Artist beccerberry<br>
			Temperal Reflection - somewhere on the internet...<br>
			Database Magic - logos from Microsoft, MySql, Sqlite and a dash of programmer art<br>
			Pokemon Black - Deviant Artist VongolaLeader recolored with an added "R"<br>
			Portfolio - Some random googled images combined in photoshop<br>
			Khan Academy - Khan Academy Logo <br>
			Graphite - screenshot of graphite <br>
			Regal Arbor - painted by Ethan Becker<br>
			Soldering Station - iconfinder.com<br>
			Nunchakus - shutterstock<br>
			Exchange 2010 - akadia.com<br>
			Security Policy - HIPAA Logo<br>
			Migration - i combined the google logo with a popular fish migration image<br>
			Dark Solution - pulled from game assets. The art was done by BadAssBill<br>
			CISSP - the official logo<br>
			Perpetual Motion - amherst.edu extracted from article submitted by Nicholas C. Darnton<br>
			Internal Forums - iconfinder.com<br>
			Anthonys' Assets - slideshare.net<br>
			Use Perl - Perl icon<br>
			</p>
		</div>

		<div class="story_section">
			<h2>About The Author</h2>
			<p>
			<!--
				It is difficult to talk about yourself isn't it? Until this section is updated by someone else writing the paragraph. These numeric points will do.<br>
			-->
				My favorite quote ever:<br>
				<br>
				All men dream: but not equally.<br>
				Those who dream by night in the dusty recesses of their minds wake up in the day to find it was vanity, but the dreamers of the day are dangerous men, for they may act their dreams with open eyes, to make it possible.<br>
				~T.E. Lawrence<br>
			<!--	
				<br>
				0. Practice effort, it becomes effortless. (quote I made up! cool!)<br>
				0. My astrological sign is Aquarius. My Chinese zodiac is dragon.<br>
				0. I've made 3 Pokemon fan games and one Dragon Ball Z fan game and been involved in about 12 other game making projects.<br>
				0. I don't own a TV and spend my extra time in lab learning new programming languages, software or other various other new techniques that people are trying.<br>
				1. I enjoy Mexican food, love Texas, and the Alamo. Once upon a time we had to sing our allegiance to the... Texas every morning.<br>
				9. I dislike mosquitoes.<br>
				8. Program or be programmed.<br>
				9. I prefer direct interaction with others without technology.<br>
			-->
			</p>
		</div>


		<div class="story_section">
			<h2>Known Bugs / Potential Improvements In The Site</h2>
			<p>
			1. <strike>When viewing from a desktop computer, the total height of the page is altered dynamically due to the div rotation. This reveals a white area at the very bottom of the webpage when the div reaches a 270 or 90 degree angle. Looks ugly. Only visible if you are scrolled to the bottom of the home page</strike><br>
			2. <strike>When on some mobile devices, it can take a second to load causing an ugly white background before the black shows up.</strike><br>
			3. Hover effects can not be experienced from mobile devices easily. Only by the occasional failed input will users see the animations on the home page and image captions on projects page.<br>
			4. <strike>Mobile devices with super small screens squeeze the world graphic making it look oval instead of circle.</strike><br>
			5. This paragraph section (known bugs) would be better structured as a list using ol li.<br>
			6. Make projects page data driven so that I can add new project records and the projects page be updated automatically.<br>
			7. Need to add in links on most of the project tiles in order to provide additional detail on a project.<br>
			8. Add in more failures to project page.<br>
			9. Get a real talented designer (like Scott or Leanne!) to fix my programmer art and standardize look.<br>
			10. Some devices measure "ems" in a unpredicted way (particularly windows phone IE), making the text too small or way too large at times.<br>
			11. the projects page does not center all the time on some devices.<br>
			</p>
		</div>


		<div class="story_section">
			<h2>About The Website Code</h2>
			<p>
			I built out everything in this site myself from scratch using sublime text and blank text files. That means I used no additional 3rd party tool like word press or any other template machine.<br>
			PHP, HTML, JAVASCRIPT, CSS are the spices of choice.<br>
			<!--
			I like to keep tight control over things that I make. As a result, pieces of the project are very light and separated.<br>
			For instance:<br>
			PHP is in the background. There is a tiny helper script that acts like a partial for components in the site. That is as complicated as the PHP gets for this simple portfolio.<br>
			HTML is used only for structure of the page. You will not see any dreaded &#60;tables&#62; used to handle element positioning, nor will unmanageable inline css styles, and definitely no confusing javascript script sections in the middle of the webpage structure.<br>
			I hate all that. Its messy.<br>
			JAVASCRIPT is used for functionality and animations.<br>
			<br>
			There is always room for improvement. I could get sharper with my JS on this simple portfolio and have a listener check for an event on a specific div id instead of the inline mouse events. When should I stop? Complexity can increase forever it seems, yet still only accomplish the same end.<br>
			<br>
			To restate everything again, because I feel so strongly about it:<br>
			CSS source file is where all the styling lives. JS source is where all the functionality lives. No horrific inline styling or anonymous functions in the html. No more endless &#60;table&#62; elements unless there is actual tabular data to behold!<br>

			</p>
			-->
		</div>

		<?php BuildFooter();?>
	</body>
	

	
</html>