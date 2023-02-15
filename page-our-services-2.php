<!doctype html>
<html <? language_attributes(); ?>>

<head>
  <link rel="icon" type="image/x-icon" href="./favicon.png">
  <title>Our Services - Software Development consulting @ WasyaCo</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Agile scrum methodology. Rapid iterations on software development! Ruby on rails, react, aws, cloud-based free services." />
  <meta name="keywords" content="software development, wasya co, victor piousbox" />
  <meta name="author" content="Victor Piousbox" />
  <meta name="copyright" content="WasyaCo" />
  <meta name="robots" content="index,follow" />

  <!--Bootstrap-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-circular.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-shared.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-wco-card.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230211-our-process-2.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230212-feb23-issue.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230212-our-services-2.css" crossorigin="anonymous">

  <? wp_head(); ?>

</head>

<body class="page-our-services-2 <?= join(" ", get_body_class()); ?>" >

<? get_template_part( 'template-parts/header/site-header' ); ?>

<? get_template_part( 'template-parts/our-services/content'); ?>
<? get_template_part( 'template-parts/our-services/frontends'); ?>
<? get_template_part( 'template-parts/our-services/dev-app-layer-sm'); ?>

  <div class='spacer spacer-500' style='background: #eee; border-top: 1px solid var(--wco-202302-color1); ' >
    [ &nbsp; this space is intentionally left blank &nbsp; ]
  </div>

  <? get_footer(); ?>
</body>

</html>