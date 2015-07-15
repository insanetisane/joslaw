<?php

if ( 'content' != $current_layout ) :

?>

        <aside class="secondary">

          <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
	        <?php endif; // end sidebar widget area ?>

        </aside>



<?php endif; ?>

