<?php
/**
 * The template for displaying 404 pages (not found)
**/
get_header();
$page_object = get_queried_object();
$description = get_the_archive_description();
?>

  <header class="page-header "
    style="background-image: url('<?= get_post_meta( get_the_ID(), 'wco_hero_url', true) ?>'); "
  >
    <div class='page-header-inner '>
      <h1 class="entry-title alignwide">404 Not Found</h1>
    </div>
  </header>

  <div class='error-404 not-found alignwide overflow-margin' >
    <?php // get_template_part( 'template-parts/content/content-none' ); ?>
    <p>It looks like nothing was found at this location. Maybe try a search?</p>
    <?php get_search_form(); ?>
  </div>

<?php
get_footer();
