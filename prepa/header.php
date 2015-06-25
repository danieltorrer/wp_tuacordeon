<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style type="text/css">@-ms-viewport{width: device-width;}</style>
	<title>
		<?php bloginfo('name'); // show the blog name, from settings ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
		// so if you want to load other stylesheets,
		// I would load them with an @import call in your style.css
	?>

	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); 
	// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
	// (right here) into the head of your website. 
	// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
	// Move it if you like, but I would keep it around.
	?>
	<link rel="icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">

</head>

<body>

    <header role="banner" class="transparent light">
        <div class="row">
            <div class="nav-inner row-content buffer-left buffer-right even clear-after">
                <div id="brand">
                    <h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="/">Entra a la prepa</a></h1>
                </div><!-- brand -->
            </div><!-- row-content -->  
        </div><!-- row -->  
    </header>

	<main role="main">