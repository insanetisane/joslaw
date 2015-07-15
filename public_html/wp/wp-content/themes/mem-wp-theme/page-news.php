<?php

// Template Name: News Landing Page

get_header(); ?>

<section class="page-main-section clearfix">
  <div class="primary">
    <?php the_post_thumbnail(); ?>
    <h1 class="page-title"><?php the_title(); ?></h1>

    <section class="news-section padded clearfix">
      <h2 class="h3 news-section-title">Latest Publications</h2>
      <div class="articles">
        <article class="news-article">
          <header class="article-header">
            <h3 class="article-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, libero!</a></h3>
            <span class="date">10 July 2015</span>
          </header>
          <div class="article-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id similique praesentium dolor nostrum. Cum animi, nisi quaerat aut aspernatur distinctio cupiditate. Eum quo facilis quia alias minima fugit, nostrum sint hic natus nesciunt odio dolores corporis illo accusantium esse.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, illo!</p>
          </div>
        </article>
        <hr class="hr-half">
        <article class="news-article">
          <header class="article-header">
            <h3 class="article-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, libero!</a></h3>
            <span class="date">10 July 2015</span>
          </header>
          <div class="article-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id similique praesentium dolor nostrum. Cum animi, nisi quaerat aut aspernatur distinctio cupiditate. Eum quo facilis quia alias minima fugit, nostrum sint hic natus nesciunt odio dolores corporis illo accusantium esse.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, illo!</p>
          </div>
        </article>
        <hr class="hr-half">
        <a href="#" class="btn article-more-btn">Read More ></a>
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
              <h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <span class="date"><?php the_date('d M Y'); ?></span>
            </header>
            <div class="article-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id similique praesentium dolor nostrum. Cum animi, nisi quaerat aut aspernatur distinctio cupiditate. Eum quo facilis quia alias minima fugit, nostrum sint hic natus nesciunt odio dolores corporis illo accusantium esse.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, illo!</p>
            </div>
          </article>
          <hr class="hr-half">
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->

        <a href="#" class="btn article-more-btn">Read More ></a>
      </div>
    </section>

    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <?php endif; ?>


  </div> <!-- .primary -->
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
