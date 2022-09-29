<?php
/**
 * Displays the site footer widget area.
**/

if ( is_active_sidebar( 'footer-top' ) ) : ?>

  <footer class='footer-top' >
    <aside class="widget-area alignwide">
      <?php dynamic_sidebar( 'footer-top' ); ?>
    </aside>
  </footer>

<?php endif; ?>
