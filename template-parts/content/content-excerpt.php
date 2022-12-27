<?php
/**
 * Template part for displaying post archives and search results
**/
$subtitle = get_post_meta( get_the_ID(), 'wps_subtitle', true);
?>

<article id="post-<?php the_ID(); ?>" class="content_exerpt_php Card <?= implode(" ", get_post_class()); ?>" >

  <header class="entry-header">
    <? the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <? twenty_twenty_one_entry_meta_footer(); ?>
  </header>

  <div class='flex-row-2' >
    <!-- <? twenty_twenty_one_post_thumbnail(); ?> -->
    <?php the_post_thumbnail(array(200,200)); ?>
    <div class="wps_subtitle"><?= $subtitle; ?></div>
  </div>

  <div class="entry-content">
    <?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
  </div>

</article>
