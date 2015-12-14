<?php

// Template Name: News Landing Page

get_header(); ?>

<section class="page-main-section clearfix">
  <div class="primary">
    <?php the_post_thumbnail(); ?>
    <h1 class="page-title">
      <?php $blog_page_id = get_option('page_for_posts');
      echo get_page($blog_page_id)->post_title; ?>
    </h1>

    <section class="news-section padded clearfix">
      <h2 class="h3 news-section-title">Latest Publications</h2>
      <div class="articles">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="news-article clearfix">
            <header class="article-header">
              <h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <span class="date"><?php the_date(); ?></span>
            </header>
            <div class="article-content">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn article-more-btn">Read More <i class="fa fa-arrow-right"></i></a>
          </article>
          <hr class="hr-half">

        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </div>
    </section>

    <?php
    $args = array(
      'category_name' => 'interesting-cases',
    );
    // the query
    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>
    <section class="news-section padded clearfix">
      <h2 class="h3 news-section-title">Interesting Cases</h2>
      <div class="articles">
        <!-- pagination here -->
        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <article class="news-article">
            <header class="article-header">
              <figure class="article-figure">
                <?php the_post_thumbnail(); ?>
              </figure>
              <h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <span class="date"><?php the_date('d M Y'); ?></span>
            </header>
            <div class="article-content">
              <?php the_content(); ?>
            </div>
            <a href="#" class="btn article-more-btn">Read More <i class="fa fa-arrow-right"></i></a>
          </article>
          <hr class="hr-half">
        <?php endwhile; ?>
        <!-- end of the loop -->
        <!-- pagination here -->

      </div>
    </section>

    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <?php endif; ?>


  </div> <!-- .primary -->
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
