<?php
include ('includes/config.php');
include ('includes/functions.php');
if (!empty($title)) { $title = $title;} else {$title = '';}
?>
<!DOCTYPE html>
	<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" lang="en" dir="ltr"><![endif]-->
	<!--[if IE 7]><html class="lt-ie9 lt-ie8" lang="en" dir="ltr"><![endif]-->
	<!--[if IE 8]><html class="lt-ie9" lang="en" dir="ltr"><![endif]-->
	<!--[if gt IE 8]><!--><html lang="en" dir="ltr"><!--<![endif]-->
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="<?php echo $description ?>"></meta>
		<meta name="google-site-verification" content="<?php echo $googleVerify ?>" />
		<meta name="msvalidate.01" content="<?php echo $bingVerify ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
		<meta name="MobileOptimized" content="width" />
		<meta name="HandheldFriendly" content="1" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title><?php echo $siteName; ?> | <?php echo $title; ?></title>
		<link type="text/css" rel="stylesheet" href="css/phpwt.css" media="all" />
		<link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Homemade+Apple" media="all" />
		<link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
		<script src="js/phpwt.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>

	</head>
	<body>
		<div id="page-wrapper">

			<div id="header-wrapper">
				<div id="header">
					<div id="logo">
						<?php
							if (isset($siteLogo) && $siteLogo != ''){
								$logo = $siteLogo;
							} else {
								$logo = $siteName;
							}
						?>
						<a href="<?php echo $siteURL; ?>" title="<?php echo $siteName; ?>"><?php echo $logo; ?></a>
					</div>
				</div>
				<div id="menu">
					<?php echo HTMLMenu($menu,NULL); ?>
				</div>

				<div class="clear"></div>
			</div>

			<div id="content-wrapper">
				<div id="content">
					<div id="main-content">
						<?php
						// Check installation
						checkFiles($requiredFiles);
						//  Build breadcrumbs
						$current = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
						//echo $current;
						echo '<div class="breadcrumbs">';

						if ($current != "index") {
							echo '<a href="http://'.$_SERVER['SERVER_NAME'].'">Home</a>&nbsp;<i class="fa fa-angle-double-right"></i>';
							pathMenu($current);
						}
						echo '</div>';
						?>

						<h1><?php echo $title; ?></h1>