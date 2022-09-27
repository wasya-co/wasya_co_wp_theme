<?php
/*
 * Template part for displaying page content in page.php
**/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header"
      style="background-image: url('<?= get_post_meta( get_the_ID(), 'wco_hero_url', true) ?>'); "
    >
      <div class="entry-header-inner">
        <h1 class="entry-title alignwide"><? the_title(); ?></h1>
      </div>
    </header>
  <?php elseif ( has_post_thumbnail() ) : ?>
    <header class="entry-header alignwide">
      <?php twenty_twenty_one_post_thumbnail(); ?>
    </header>
  <?php endif; ?>

  <div class="entry-content">
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
  </div>

  <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer default-max-width">
      <?php
      edit_post_link(
        sprintf(
          /* translators: %s: Post title. Only visible to screen readers. */
          esc_html__( 'Edit %s', 'twentytwentyone' ),
          '<span class="screen-reader-text">' . get_the_title() . '</span>'
        ),
        '<span class="edit-link">',
        '</span>'
      );
      ?>
    </footer>
  <?php endif; ?>
</article>
