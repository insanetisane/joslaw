<?php
/** 
 * @package MemilyM Designs
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('primary'); ?>>
        <div class="entry-content">
            <?php the_content(); ?>              
        </div>              
	</article><!-- #post-<?php the_ID(); ?> -->
