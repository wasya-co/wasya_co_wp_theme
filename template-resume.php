<?php
/**
 * Template Name: Resume Template
 * Template Post Type: post, page, product
 * _vp_ 2022-10-06
 */
?>

<html>
<head>
  <title>Victor Pudeyev - Software Engineering Lead</title>

      <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-53077236-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-53077236-2');
  </script>

<style>
html {
  overflow: hidden;
}
body {
  margin: 0;
  padding: 0;
}

</style>
</head>
<body>
<?
  the_post();
  get_template_part( 'template-parts/content/content-resume' );
?>
</body>
</html>


