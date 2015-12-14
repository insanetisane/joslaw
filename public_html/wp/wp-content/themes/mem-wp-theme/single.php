<?php
/**
 * @package JD Supra (www.jdsupra.com)
 * @subpackage supralegal theme 1
 * @since 2012
 */

get_header(); ?>

<section class="page-main-section clearfix">
  <div class="primary">
    <div class="entry-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_post_thumbnail(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>
