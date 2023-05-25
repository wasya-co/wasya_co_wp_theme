<?
/**
 * Template Name: Resume Template
 * Template Post Type: post, page, product
 * _vp_ 2022-10-06
**/
get_header();
the_post();
$iframe_src = get_post_meta( get_the_ID(), 'wco_iframe_src', true);
?>

<p style="width: 100%; display: flex; justify-content: center;">
  <iframe src="<?= $iframe_src; ?>"
    width="80%" height="100%" style="min-height: 90vh; max-width: 800px; margin: auto"
  ></iframe>
</p>

<? get_footer();


