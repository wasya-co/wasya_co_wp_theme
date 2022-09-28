<?php
/**
 * Displays a post
**/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="page-header"
    style="background-image: url('<?= get_post_meta( get_the_ID(), 'wco_hero_url', true) ?>'); "
  >
    <div class="page-header-inner">
      <h1 class="entry-title alignwide"><? the_title(); ?></h1>
      <?php twenty_twenty_one_post_thumbnail(); ?>
    </div>
  </header>

  <div class="entry-content alignwide overflow-margin articles">

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

</article>
