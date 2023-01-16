<?php
/**
 * Template Name: 20230116 grayMinimal
 * Template Post Type: post, page
 * _vp_ 20230116
**/

get_header('empty');
?>

<body class='t20230116-grayM' >
<div class='wco-container margin-overflow'>


  <div class='main-header'>
    <div class='W1'>
      <div class='logo'><a href="https://wasya.co">WasyaCo</a></div>
    </div>
  </div>

  <div class='hero'>
  </div>

  <div class='maxwidth flex-row'>
    <div class='col maincol'>

      <? while ( have_posts() ) : ?>
      <? the_post(); ?>
      <? the_content(); ?>
      <? // get_template_part( 'template-parts/content/content', 'post20230116' ); ?>
      <? endwhile; ?>


    </div>

  </div>

  <div class='main-footer'>
    <div class='maxwidth footers'>
    </div>
  </div>
  <div class='footer-copyright'>
    <div class='maxwidth'>
      <div clas='col'>
        Copyright 2023 &copy; WasyaCo &nbsp;|&nbsp;
        <a href="https://wasya.co/terms-of-service/">Terms of Service</a>
      </div>
      <div class='col debug'>
        template: grayMinimal
      </div>
    </div>
  </div>

</div>

</body>
<? get_footer('empty'); ?>
