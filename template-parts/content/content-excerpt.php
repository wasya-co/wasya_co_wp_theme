<?php
/**
 * Template part for displaying post archives and search results
**/
$subtitle = get_post_meta( get_the_ID(), 'wps_subtitle', true);
?>

<!-- template-parts / content / content-exerpt.php -->
<article id="post-<?php the_ID(); ?>" class="Card <?= implode(" ", get_post_class()); ?>" >

  <? the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

  <div class='flex-row-2' >
    <? the_post_thumbnail(array(200,200)); ?>
    <header>
      <? twenty_twenty_one_entry_meta_footer(); ?>
      <div class="wps_subtitle"><?= $subtitle; ?></div>
    </header>
  </div>

  <div class="entry-content">
    <? get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
  </div>

</article>
