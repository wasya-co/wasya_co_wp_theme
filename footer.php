
      </main>
    </div><!-- .content-area -->
  </div><!-- #content -->

  <div class='footers'>


    <? if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
      <footer class='footer-top' >
        <aside class="widget-area alignwide max-width">
          <? if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <section class='widget widget_nav_menu' ><? dynamic_sidebar( 'footer-1' ); ?></section>
          <? endif; ?>
          <? if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <section class='widget widget_nav_menu' ><? dynamic_sidebar( 'footer-2' ); ?></section>
          <? endif; ?>
          <? if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <section class='widget widget_nav_menu' ><? dynamic_sidebar( 'footer-3' ); ?></section>
          <? endif; ?>
        </aside>
      </footer>
    <? endif; ?>




    <footer class="site-footer" >
      <div class='alignwide max-width site-info'>
        <span>Copyright (c) 2017-2022 Wasya Co</span>
        <?php if ( has_nav_menu( 'footer' ) ) : ?>
          <nav aria-label="Secondary menu" class="footer-navigation" >
            <ul class="footer-navigation-wrapper">
              <? wp_nav_menu(array( 'theme_location' => 'footer',
                                    'items_wrap'     => '%3$s',
                                    'container'      => false,
                                    'depth'          => 1,
                                    'link_before'    => '<span>',
                                    'link_after'     => '</span>',
                                    'fallback_cb'    => false,
              ) ); ?>
            </ul>
          </nav>
        <?php endif; ?>
        <span>v2.1.0</span>
      </div>
    </footer>

</div>

</div><!-- #page -->

<?php wp_footer(); ?>


<!-- Boostrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


</body>
</html>
