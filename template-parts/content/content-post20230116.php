<?
/**
 * Displays a post - grayArticle
**/

$description = get_the_archive_description();
global $hero_url_default;
$hero_url = get_post_meta( get_the_ID(), 'wco_hero_url', true);
if (strlen($hero_url) == 0) {
  $hero_url = $hero_url_default;
}
?>

<div id="post-<? the_ID(); ?>" class="CardAsymm <?= implode(" ", get_post_class()); ?>">
  <div class='W1'>

    <h1><? the_title(); ?></h1>

    <div class='description'>
      <? the_content(); ?>
    </div>

    <? wp_link_pages(array(
      'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
      'after'    => '</nav>',
      'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
    ) ); ?>

    <? if ( ! is_singular( 'attachment' ) ) { get_template_part( 'template-parts/post/author-bio' ); } ?>
    <? if ( comments_open() || get_comments_number() ) { comments_template(); } ?>

  </div>
</div>


