<?php
/**
 * Displays the footer widget area.
**/

if ( is_active_sidebar( 'footer-top' ) ) : ?>

  <aside class="widget-area">
    <?php dynamic_sidebar( 'footer-top' ); ?>
  </aside>

<?php endif; ?>
