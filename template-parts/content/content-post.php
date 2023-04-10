<?
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

<!-- template-parts/content/content-post.php -->
<article id="post-<? the_ID(); ?>" class="<?= implode(" ", get_post_class()); ?>" >

  <header class="page-header"
    style="background-image: url('<?= $hero_url ?>'); "
  >
    <div class="page-header-inner">
      <h1 class="entry-title alignwide"><? the_title(); ?></h1>
    </div>
  </header>

  <div class="flex-row alignwide flex-wrap">

    <div class="entry-content overflow-margin Card">

      <footer class="entry-footer default-max-width">
        <? twenty_twenty_one_entry_meta_footer(array(
          'display edit-box' => false
        )); ?>
      </footer>

      <div class='feature-img-wrapper'>
        <img src="<?= get_the_post_thumbnail_url( get_the_ID() ); ?>" alt='' />
      </div>

      <? the_content(); ?>
      <? wp_link_pages(array(
        'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
        'after'    => '</nav>',
        'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
      ) ); ?>

      <? if ( ! is_singular( 'attachment' ) ) { get_template_part( 'template-parts/post/author-bio' ); } ?>
      <? if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
    </div>

    <? if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
      <section class='sidebar-right' >
        <? dynamic_sidebar( 'sidebar-right' ); ?>
      </section>
    <? endif; ?>

  </div>

</article>
