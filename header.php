<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
        <div id="wrapper">
            <header class="container" itemscope itemtype="http://schema.org/WPHeader">
                <nav class="navbar navbar-static-top">
                    <div id="logo" class="col-md-7">
                        <a href="<?php echo home_url(); ?>" rel="nofollow"><img src="/wp-content/themes/memory-shifters/library/images/logo.jpg" alt="logo" /></a>
                    </div>

                    <div class="col-md-2">
                        <button type="button" class="btn  btn-lg" onclick="window.location.href='submit.html'">
                            Submit content!
                        </button>
                    </div>

                    <div id="userNav" class="col-md-3">
                        <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar1' ); ?>
                        <?php else : ?>
                            <div class="no-widgets">
                                <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
                            </div><div>
                        <?php endif; ?>
                    </div>
                </nav>
            </header>
