<?
/**
 * Display a page when nothing more specific matches a query.
 * Display the home page when no home.php file exists.
 *
 * _vp_ 2022-11-09
**/

get_header(); ?>

<? if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
  <header class="page-header alignwide">
    <h1 class="page-title"><? single_post_title(); ?></h1>
  </header>
<? endif; ?>

<?
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
  }
  twenty_twenty_one_the_posts_navigation();
} else {
  get_template_part( 'template-parts/content/content-none' );
}
get_footer();
