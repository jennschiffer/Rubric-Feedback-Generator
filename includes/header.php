<html>
<head>
	<title>RUBRIC CREATOR 9000XL Premium</title>
	
	<!-- global stylesheet -->
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	
	<!-- jquery-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
	
	<!-- allows tabs in textarea -->
	<script type="text/javascript" src="js/jquery.textarea.js"></script> 
	
	<!-- global scripts -->
	<script type="text/javascript" src="js/scripts.js"></script> 
	
	<?php 
		/* include all files in /function directory */
		foreach (glob("functions/*.php") as $filename) { 
			include $filename;
		}
		
		/* connect to the database */
		rubricCreatorConnect();
		
	?>
</head>