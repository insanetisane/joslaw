<?php
/**
 * @package MemilyM Designs
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('primary'); ?>>
    <div class="post-img"><?php the_post_thumbnail(); ?></div>
    <div class="entry-content">
      <?php if (is_front_page()): ?>
        <h1 class="page-title"><?php the_field('title_text'); ?></h1>
      <?php else: ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
      <?php endif; ?>
      <?php the_content(); ?>
    </div>

    <?php if (is_front_page()):
      if( have_rows('linked_pages') ): ?>
        <section class="home-links clearfix">

          <?php while ( have_rows('linked_pages') ) : the_row(); ?>

            <div class="home-link-wrap">
              <a href="<?php the_sub_field('linked_page'); ?>" class="home-link"><?php the_sub_field('link_title'); ?></a>
              <div class="home-link-description">
                <?php the_sub_field('link_text'); ?>
              </div>
            </div>

          <?php endwhile; ?>
        </section>

      <?php else :
      endif; ?>

      <section class="events clearfix">
        <img class="events-icon" src="<?php bloginfo('template_url') ?>/img/mic.svg" width="60px" alt="">
        <div class="events-content">
          <h2 class="h3 events-title">Upcoming Events</h2>
          <ul class="events-list">
            <li class="event"><a href="#">Event Name : 2 April 2015, 3pm, 123 Some Street, Toronto</a></li>
            <li class="event"><a href="#">Event Name : 2 April 2015, 3pm, 123 Some Street, Toronto</a></li>
            <li class="event"><a href="#">Event Name : 2 April 2015, 3pm, 123 Some Street, Toronto</a></li>
          </ul>
        </div>
      </section>

    <?php endif ?>
  </article><!-- #post-<?php the_ID(); ?> -->
