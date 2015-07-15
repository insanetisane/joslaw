<?php
/**
 * @package JD Supra (www.jdsupra.com)
 * @subpackage supralegal theme 1
 * @since 2012
 */

get_header(); ?>
<section class="">
  <?php if ( have_posts() ) : ?>
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
  <?php endif; ?>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
