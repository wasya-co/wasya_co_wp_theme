<?
/**
 * Page: book-a-call
 * _vp_ 2023-01-16
**/

// // Duplicated from template-parts/content/content-post.php
$description = get_the_archive_description();
global $hero_url_default;
$hero_url = get_post_meta( get_the_ID(), 'wco_hero_url', true);
if (strlen($hero_url) == 0) {
  $hero_url = $hero_url_default;
}

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="page-header" style="background-image: url('<?= $hero_url ?>'); ">
    <div class="page-header-inner">
      <h1 class="entry-title alignwide"><? the_title(); ?></h1>
      <?php twenty_twenty_one_post_thumbnail(); ?>
    </div>
  </header>

  <div class="entry-content alignwide overflow-margin articles">

    <h1>what here?</h1>

  </div>
</article>

<?
get_footer();
