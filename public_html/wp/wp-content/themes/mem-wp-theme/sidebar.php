<?php

if ( 'content' != $current_layout ) :

?>

        <aside class="secondary">

          <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
          <?php endif; // end sidebar widget area ?>
          <a class="btn article-more-btn" target="_blank" href="http://www.slaw.ca/author/osullivan/">Read More ></a>

        </aside>



<?php endif; ?>

