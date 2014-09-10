<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<!-- if no Java script -->

	<title><?php echo get_field('page-title'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

    <link rel="shortcut icon" href="<?php echo site_url('images/ico/favicon.png'); ?>">
	
    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('css/bootstrap.css'); ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
    <link href="<?php echo site_url('css/netkick.css'); ?>" rel="stylesheet">
<!--[if IE]>
    <link href="<?php echo site_url('css/netkick_ie.css'); ?>" rel="stylesheet">
<![endif]-->
    <link href="<?php echo site_url('css/style.css'); ?>" rel="stylesheet">
	
    <link href="<?php echo site_url('fonts/boogaloo/stylesheet.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('fonts/architectsdaughter/stylesheet.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('fonts/carroisgothic-regular/stylesheet.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('fonts/nunito/stylesheet.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('fonts/panefresco/stylesheet.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('fonts/allura/stylesheet.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('fonts/lubalingraphstd-bold/stylesheet.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('fonts/lubalingraphstd-book/stylesheet.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('fonts/officinasansitcstd/stylesheet.css'); ?>" rel="stylesheet">

    <script src="<?php echo site_url('js/jquery-1.10.2.min.js'); ?>"></script>
	
	<!-- Google Map -->
    <style>
		html, body, #map-canvas {
			height: 300px;
			margin: 0px;
			padding: 0px
		}
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
		var map;
		var wandsworth = new google.maps.LatLng(51.463954, -0.194864);

		var MY_MAPTYPE_ID = 'custom_style';

		function initialize() {

		  var featureOpts = [
			{
			  stylers: [
				{ hue: '#b08040' },
				{ visibility: 'simplified' },
				{ gamma: 0.5 },
				{ weight: 0.5 }
			  ]
			},
			{
			  elementType: 'labels',
			  stylers: [
				{ visibility: 'off' }
			  ]
			},
			{
			  featureType: 'water',
			  stylers: [
				{ color: '#444477' }
			  ]
			}
		  ];

		  var mapOptions = {
			zoom: 13,
			center: wandsworth,
			mapTypeControlOptions: {
			  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
			},
			mapTypeId: MY_MAPTYPE_ID,
			disableDefaultUI: true,
			scaleControl: true,
			scrollwheel: false,
		  };

		  map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);

		  var styledMapOptions = {
			name: 'Custom Style'
		  };

		  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

		  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<!-- End Google Map -->

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-91893-11', 'netkick.co.uk');
		ga('require', 'linkid', 'linkid.js');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	</script>

	<?php wp_head(); ?>
</head>

<?php
function detect_ie()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}
function old_ie()
{
	if(preg_match('/(?i)msie [2-8]/',$_SERVER['HTTP_USER_AGENT']))
		// if IE<=8
        return true;
    else
        return false;
}
?>

<body style="background:#fff;">
	<noscript>
		<div class="container" style="padding-top: 300px">
			<div class="row main-content">
				<h3>It looks like your browser doesn't support JavaScript. Please click <a href="noscript/">here</a> for a No JavaScript version of the website</h3>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
		</div>
	</noscript>

