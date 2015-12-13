<?php

/**

 * @package MemilyM Designs

 */

?>

<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php

	global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";

	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link href='//fonts.googleapis.com/css?family=Average|Magra:700,400|Neuton:400,700' rel='stylesheet' type='text/css'>

<script src="//johnosullivanlaw.com/js/libs/modernizr-2.5.3.min.js"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>

  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

<?php

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );

	wp_head();

?>

</head>

<body <?php body_class(); ?>>

	<header class="container center header">

    	<div class="media">

        	<div class="secondary textright"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/img/logo.jpg" /></a></div>

            <div class="bd header-title">

            	<img src="/img/title.jpg" />

                <nav class="clearfix">

                    <?php wp_nav_menu( array( 'container' => '','menu_class' => 'clearfix' ) ); ?>

                </nav>

            </div>

        </div>

    </header>

<div class="media container center">