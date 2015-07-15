<?php

if ( 'content' != $current_layout ) :

?>

        <aside class="secondary">

          <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
          <a href="#" class="btn">Read More ></a>
	        <?php endif; // end sidebar widget area ?>

        </aside>



<?php endif; ?>

