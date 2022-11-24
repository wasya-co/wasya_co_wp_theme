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
    </div>
  </header>

  <div class="flex-row alignwide">

    <div class="entry-content overflow-margin articles">

      <footer class="entry-footer default-max-width">
        <?php twenty_twenty_one_entry_meta_footer(); ?>
      </footer>

      <img src="<?= get_the_post_thumbnail_url( get_the_ID() ); ?>" alt='' />
      <?
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



      <? if ( ! is_singular( 'attachment' ) ) { get_template_part( 'template-parts/post/author-bio' ); } ?>
      <hr />
      <?

        the_post_navigation(array(
          'next_text' => '<p class="meta-nav">Next post' . twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) . '</p><p class="post-title">%title</p>',
          'prev_text' => '<p class="meta-nav">' . twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) . 'Previous Post</p><p class="post-title">%title</p>',
        ) );

        if ( comments_open() || get_comments_number() ) { comments_template(); }

      ?>

    </div>

    <? if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
      <section class='sidebar-right' >
        <?php dynamic_sidebar( 'sidebar-right' ); ?>
      </section>
    <? endif; ?>

  </div>

</article>
