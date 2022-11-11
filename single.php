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
    // Parent post navigation.
    the_post_navigation(
      array(
        /* translators: %s: Parent post link. */
        'prev_text' => sprintf('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', '%title' ),
      )
    );
  }

endwhile;




get_footer();
