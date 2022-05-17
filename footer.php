
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
      </div>
    </div>
  </div><!-- #content -->

  <?php do_action('sydney_before_footer'); ?>

  <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
    <?php get_sidebar('footer'); ?>
  <?php endif; ?>

  <?php $container     = get_theme_mod( 'footer_credits_container', 'container' ); ?>
  <?php $credits         = sydney_footer_credits(); ?>

  <footer id="colophon" class="site-footer">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="site-info">
        <div class="row">
          <div class="col-md-6">
            <?php echo wp_kses_post( $credits ); ?>
          </div>
          <div class="col-md-6">
            <?php sydney_social_profile( 'social_profiles_footer' ); ?>
          </div>
        </div>
      </div>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->

  <?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-53077236-2', 'auto'); // wasya co, _vp_ 20170725
  ga('send', 'pageview');
</script>

</body>
</html>

