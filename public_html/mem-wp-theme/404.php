<?php
/** 
 * @package JD Supra (www.jdsupra.com)
 * @subpackage supralegal theme 1
 * @since 2012
 */

get_header(); ?>
	<section id="primary" class="contentWidth">
    



			<article id="post-0" class="post error404 not-found">
				<header class="margbottom">
					<h1><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'supralegal' ); ?></h1>
				</header>

				<div class="entry-content clear">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'supralegal' ); ?></p>

					<?php get_search_form(); ?><br class="clearfix" />
                    </div>
                    <div class="padtopbottom">
					<?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => '', 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>

					<div class="widget">
						<h2><?php _e( 'Most Used Categories', 'supralegal' ); ?></h2>
						<ul>
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
						</ul>
					</div>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

	</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
