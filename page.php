<?php
/**
 * The template for displaying all single posts
 */

get_header();

while ( have_posts() ) :
  the_post();
  get_template_part( 'template-parts/content/content-page' );

  // If comments are open or there is at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) {
    comments_template();
  }
endwhile;

get_footer();
