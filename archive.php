<?php
/**
 * Displays archive page, category page
**/

get_header();
$page_object = get_queried_object();
$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

  <header class="page-header "
    style="background-image: url('<?= get_post_meta( get_the_ID(), 'wco_hero_url', true) ?>'); "
  >
    <div class='page-header-inner '>
      <h1 class="entry-title alignwide"><?= $page_object->cat_name; ?></h1>

      <?php if ( $description ) : ?>
        <div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
      <?php endif; ?>

    </div>
  </header>

  <div class='alignwide articles overflow-margin' >
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
    <?php endwhile; ?>
    <?php twenty_twenty_one_the_posts_navigation(); ?>
  </div>

<?php else : ?>
  <div class='alignwide' >
    <?php get_template_part( 'template-parts/content/content-none' ); ?>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
