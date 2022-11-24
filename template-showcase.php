<?php
/**
 * Template Name: Showcase Template
 * Template Post Type: post, page, product
**/
?>

<div class='ShowcaseTemplate'><?
  get_header();

  the_post();

  get_template_part( 'template-parts/content/content-post' );

  get_footer();

?></div>

