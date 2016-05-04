<!DOCTYPE html>

<?php require_once('config/sd_helper.php');?>

<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<script src="config/jquery.min.1.11.1.js"></script>
		<link 	rel="stylesheet" type="text/css" href="config/sd_style.css"/>
		<script src="config/sd_interaction.js"></script>
		
		<title>Shon Diaz - Resume</title>
	</head>
	

	<body>
		
		<h1 id="navigation_title">Shon Diaz</h1>

		<?php BuildNavigationBar();?>
		
	
		<img id="animated_menu_mini" class="spinner" src="images/Sonic.gif">

		<div class="resume_section">
			<h2>Resume</h2>
			<a href="data/Shon_Diaz_Res.pdf" download="Shon_Diaz_Res.pdf">Downloadable PDF Version</a>
			<img src="images/Shon_Diaz_Res.png">
			<a href="data/Shon_Diaz_Res.pdf" download="Shon_Diaz_Res.pdf">Downloadable PDF Version</a>
		</div>


		<?php BuildFooter();?>
	</body>
	

	
</html>