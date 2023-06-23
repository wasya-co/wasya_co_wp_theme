<?
/**
 * Displays archive page, category page
**/

get_header();
$page_object = get_queried_object();
$description = get_the_archive_description();
global $hero_url_default;
$hero_url = get_term_meta( $page_object->term_id, 'wco_hero_url', true);
if (strlen($hero_url) == 0) {
  $hero_url = $hero_url_default;
}

?>
<div class="archive_php" >

  <header class="page-header "
    style="background-image: url('<?= $hero_url ?>'); "
  >
    <div class='page-header-inner '>
      <h1 class="entry-title alignwide"><?= $page_object->cat_name; ?></h1>
    </div>
  </header>

  <div class='alignwide overflow-margin W0' >

    <? if ( have_posts() ) : ?>

      <div class='articles ' >
        <? while ( have_posts() ) : ?>
          <? the_post(); ?>
          <? get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
        <? endwhile; ?>
        <? twenty_twenty_one_the_posts_navigation(); ?>
      </div>

    <? endif; ?>

    <div class='descr col-2a'>
      <? if ( $description ) : ?>
        <div class="archive-description"><? echo wp_kses_post( wpautop( $description ) ); ?></div>
      <? endif; ?>
    </div>

  </div>

  <? get_footer(); ?>

</div>

