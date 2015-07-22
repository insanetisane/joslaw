<?php
/**
 * @package JD Supra (www.jdsupra.com)
 * @subpackage supralegal theme 1
 * @since 2012
 */

get_header(); ?>

<section class="page-main-section clearfix">
  <div class="primary">
    <?php the_post_thumbnail(); ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
  </div>
  <?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>
