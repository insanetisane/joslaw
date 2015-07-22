<?php
/**
 * @package MemilyM Designs
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('primary'); ?>>
    <div class="post-img"><?php the_post_thumbnail(); ?></div>
    <div class="entry-content">
      <h1 class="home-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <?php if (is_front_page()): ?>
      <section class="home-links clearfix">
        <div class="home-link-wrap">
          <a href="<?php echo get_page_link(6); ?>" class="home-link">Contact</a>
          <div class="home-link-description">
            Learn how to get in touch with us.
          </div>
        </div>
        <div class="home-link-wrap">
          <a href="<?php echo get_page_link(27); ?>" class="home-link">Referral Advocacy</a>
          <div class="home-link-description">
            We assist solicitors with litigation. Keep the client, lose the headache.
          </div>
        </div>
      </section>

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
