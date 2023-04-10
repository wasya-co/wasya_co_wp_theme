<?
/**
 * Template part for displaying posts
 *
 * Displays each in category (archive_php)
**/
?>

<!-- template-parts / content / content.php -->
<article id="post-<? the_ID(); ?>" class="content_php Card <?= implode(" ", get_post_class()); ?>" >
  <header class="page-header">
    <? if ( is_singular() ) : ?>
      <? the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
    <? else : ?>
      <? the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <? endif; ?>

    <? twenty_twenty_one_post_thumbnail(); ?>
  </header>

  <div class="entry-content">
    <?
    the_content(twenty_twenty_one_continue_reading_text());

    wp_link_pages(array(
      'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
      'after'    => '</nav>',
      /* translators: %: Page number. */
      'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
    ) );

    ?>
  </div>

  <footer class="entry-footer default-max-width">
    <? twenty_twenty_one_entry_meta_footer(); ?>
  </footer>
</article>
