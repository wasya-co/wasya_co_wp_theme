
      </main>
    </div><!--content-area-->
  </div><!-- #content -->

  <div class='footers'>

    <div class='footers-fog'></div>

    <? if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
      <footer class='footer-top' >
        <div class='alignwide max-width'>
          <div class='do-expand'>[Expand Menu]</div>
        </div>
        <aside class="widget-area alignwide max-width">

          <div>

            <? if ( is_active_sidebar( 'footer-1' ) ) : ?>
              <? dynamic_sidebar( 'footer-1' ); ?>
            <? endif; ?>
          </div>

          <? if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <div><? dynamic_sidebar( 'footer-2' ); ?></div>
          <? endif; ?>

          <? if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <div><? dynamic_sidebar( 'footer-3' ); ?></div>
          <? endif; ?>
        </aside>
      </footer>
    <? endif; ?>

    <footer class="site-footer" >
      <div class='alignwide max-width site-info'>
        <span class='copyright' >Copyright (c) 2023 Wasya Co</span>
        <?php if ( has_nav_menu( 'footer-tos' ) ) : ?>
          <nav aria-label="Secondary menu" class="footer-tos" >
              <? wp_nav_menu(array( 'theme_location' => 'footer-tos',
                                    'container'      => false,
                                    'depth'          => 1,
                                    'fallback_cb'    => false,
              ) ); ?>
          </nav>
        <?php endif; ?>
        <span class='version'>v2.1.0</span>
      </div>
    </footer>
  </div><!--footers-->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Boostrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>


</body>
</html>
