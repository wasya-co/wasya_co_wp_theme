<?php
/**
 * Displays a post
**/

$description = get_the_archive_description();
global $hero_url_default;
$hero_url = get_post_meta( get_the_ID(), 'wco_hero_url', true);
if (strlen($hero_url) == 0) {
  $hero_url = $hero_url_default;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="page-header"
    style="background-image: url('<?= $hero_url ?>'); "
  >
    <div class="page-header-inner">
      <h1 class="entry-title alignwide"><? the_title(); ?></h1>
      <?php twenty_twenty_one_post_thumbnail(); ?>
    </div>
  </header>

  <div class="flex-row alignwide">

    <div class="entry-content overflow-margin articles">

      <?php
      the_content();

      wp_link_pages(
        array(
          'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
          'after'    => '</nav>',
          /* translators: %: Page number. */
          'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
        )
      );
      ?>

      <footer class="entry-footer default-max-width">
        <?php twenty_twenty_one_entry_meta_footer(); ?>
      </footer>

      <?php
        if ( ! is_singular( 'attachment' ) ) { get_template_part( 'template-parts/post/author-bio' ); }
        if ( comments_open() || get_comments_number() ) { comments_template(); }
        the_post_navigation(array(
          'next_text' => '<p class="meta-nav">Next post' . twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) . '</p><p class="post-title">%title</p>',
          'prev_text' => '<p class="meta-nav">' . twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) . 'Previous Post</p><p class="post-title">%title</p>',
        ) );
      ?>

    </div>

    <? if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
      <section class='sidebar-right' >
        <?php dynamic_sidebar( 'sidebar-right' ); ?>



<style>
#PiousboxComWidget {
  text-align: center;
}
#PiousboxComWidget .W0 {
  border: 1px solid gray;
  border-radius: 10px;

  width: 200px;
  height: 200px;
}
#PiousboxComWidget .W1 {
  background: url('https://piousbox.com/wp-content/themes/piousbox_wp_theme/assets/images/60x100_paladin.png');
}
</style>
<div id="PiousboxComWidget">
  <div class="W0">
    <div class="W1">
      &nbsp;
    </div>
    <h1><a href="https://piousbox.com">Piousbox</a></h1>
    <div class='subheader'><a href="https://piousbox.com">Elements of Personal-Corporate Culture</a></div>
  </div>
</div>


      </section>
    <? endif; ?>

  </div>

</article>
