<div class='single_php'>
<?php
/**
 * Display a single post
 * _vp_ 2022-11-09
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
  the_post();

  get_template_part( 'template-parts/content/content-post' );

  if ( is_attachment() ) {
    the_post_navigation(array(
      'next_text' => '<p class="meta-nav">Next post' . twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) . '</p><p class="post-title">%title</p>',
      'prev_text' => '<p class="meta-nav">' . twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) . 'Previous Post</p><p class="post-title">%title</p>',
    ) );
  }

endwhile;

get_footer();

?></div>
