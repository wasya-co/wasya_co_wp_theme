




      </main>
    </div><!-- .content-area -->
  </div><!-- #content -->

  <?php // get_template_part( 'template-parts/footer/footer-widgets' ); ?>

  <footer class="site-footer" >

    <?php if ( has_nav_menu( 'footer' ) ) : ?>
      <nav aria-label="Secondary menu" class="footer-navigation" >
        <ul class="footer-navigation-wrapper">
          <? wp_nav_menu(array(
              'theme_location' => 'footer',
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

  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
