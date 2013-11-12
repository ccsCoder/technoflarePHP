<?php require "findurl.php"; 
if($_GET['f'] != '')
$file=$_GET['f'];
else
$file = 'Career Center';
?>
<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
        <title>Techno Flair Lab <?php echo '| '.$file;?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $home_url; ?>css/images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php echo $home_url; ?>css/flexdropdown.css" />
        <link rel="stylesheet" href="<?php echo $home_url; ?>css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $home_url; ?>css/flexslider.css" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />

        <link href='<?php echo $home_url; ?>css/sm-core-css.css' rel='stylesheet' type='text/css' />
        <link href='<?php echo $home_url; ?>css/sm-clean/sm-clean.css' rel='stylesheet' type='text/css' />

        <script src="<?php echo $home_url; ?>js/jquery-1.8.0.min.js" type="text/javascript"></script>
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>-->
        <!--<script type="text/javascript" src="js/flexdropdown.js"></script>-->
        <!--[if lt IE 9]>
                <script src="js/modernizr.custom.js"></script>
        <![endif]-->

        <script src="<?php echo $home_url; ?>js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="<?php echo $home_url; ?>js/functions.js" type="text/javascript"></script>
        <script src="<?php echo $home_url; ?>js/jquery.smartmenus.js" type="text/javascript"></script>
</head>
<body>
	<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<header id="header">
					<h1 id="logo"><a href="<?php echo $home_url; ?>index.php">Technoflair Lab</a></h1>
					<!-- search -->
					<div class="search">
						<form method="post">
							<span class="field"><input type="text" class="field" value="keywords here ..." title="keywords here ..." /></span>
							<input type="submit" class="search-btn" value="" />
						</form>
					</div>
					<!-- end of search -->
				</header>
				<!-- end of header -->
				
				<!-- navigation -->
				    <?php include 'nav.php' ?>
				<!-- end of navigation -->
				
				<!-- slider -->
					<?php include 'slider.php' ?>
				<!-- end of slider -->
				<!-- Start MainPage here-->
				<div class="main">