<?php

if ( 'content' != $current_layout ) :

?>

        <aside class="secondary">
          <div class="sidebar-section clearfix">
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
            <?php endif; // end sidebar widget area ?>
            <a class="btn article-more-btn" target="_blank" href="http://www.slaw.ca/author/osullivan/">Read More ></a>
          </div>

          <div class="sidebar-section clearfix">
            <?php
                $args = array(
                  'category_name' => 'interesting-cases',
                  'posts_per_page' => 2
                );
                // the query
                $the_query = new WP_Query( $args ); ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <section class="clearfix">
                  <h2 class="h3 widget-title">Interesting Cases</h2>
                  <div class="articles">
                    <!-- pagination here -->
                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <article class="news-article">
                        <header class="article-header">
                          <h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </header>
                        <div class="article-content">
                          <?php the_excerpt(); ?>
                        </div>
                      </article>
                      <hr class="hr-half">
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <a href="news" class="btn article-more-btn">Read More ></a>
                  </div>
                </section>

                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <?php endif; ?>
          </div>

        </aside>



<?php endif; ?>

