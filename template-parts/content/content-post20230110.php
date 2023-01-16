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
    <? twenty_twenty_one_entry_meta_footer(array('display edit-box' => false, 'display categories' => true )); ?>

    <!-- <div class='TagsListMini'>
      <div class='Tag'>
        <i class='fa fa-tag'></i>
        <span><a href='#'>Jan'23 Issue</a></span>
        <div class='tag-tail'></div>
      </div>
      <div class='Tag'>
        <i class='fa fa-tag'></i>
        <span><a href='#'>Finance</a></span>
        <div class='tag-tail'></div>
      </div>
    </div> -->

    <div class='subhead'>
      <? $subtitle = new WP_Subtitle( get_the_ID() ); ?>
      <?= $subtitle->get_subtitle(); ?>
      <!-- <p>Morbi finibus neque dolor, vitae convallis leo aliquam in. Nullam posuere urna quis velit mattis, vitae posuere mi elementum. Cras vitae fermentum nisi, sed pretium diam.</p>
      <p>Aliquam nec lectus nibh. Curabitur non scelerisque tellus, eu viverra ligula. Maecenas euismod sem turpis, ac efficitur velit placerat eget.</p> -->
    </div>

    <? if ( $style_20230116 = get_the_post_thumbnail_url(get_the_ID()) ) : ?>
      <div class='feature-image' style="background: url('<?= $style_20230116; ?>');" ></div>
    <? else: ?>
      <div class='feature-image' ></div>
    <? endif; ?>


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


