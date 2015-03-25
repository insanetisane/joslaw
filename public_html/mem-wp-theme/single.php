<?php
/** 
 * @package JD Supra (www.jdsupra.com)
 * @subpackage supralegal theme 1
 * @since 2012
 */

get_header(); ?>

<div id="wrapper" class="hfeed maxWidth">
	<header id="header" class="textcenter">
    	<div id="topLine">&nbsp;</div>
        <hgroup class="pageWidth center">
            <time class="h4 white opensans upper"><?php echo date('l, F j, Y'); ?></time>
            <h1 id="site-title" class="white site-title"><a class="drkgraylink" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </hgroup>
	</header><!-- #header -->
    <div id="main" class="pageWidth clearfix center" role="main">
	<section id="primary" class="contentWidth">
		<?php get_template_part( 'content', 'singular' ); ?>
	</section><!-- #primary -->

<?php get_sidebar(); ?>    
<?php get_footer(); ?>
