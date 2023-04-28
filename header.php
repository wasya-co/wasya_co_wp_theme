
<!doctype html>
<html <? language_attributes(); ?> >
<head>
  <meta charset="<? bloginfo( 'charset' ); ?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <? bootstrap_css(); ?>

  <?
  if ( is_single() ) {
    $meta_description = get_the_title();
    $author_id = get_post_field('post_author', get_the_ID() );
    $meta_author = get_the_author_meta( 'display_name', $author_id );
    $meta_keywords = get_post_meta( get_the_ID(), 'wco_meta_keywords', true);
  } else {
    $meta_description = get_bloginfo('name') . " - " . get_bloginfo('description');
    $meta_author = 'Victor Piousbox';
    $meta_keywords = 'Software Development, Consulting';
  }
  ?>
  <meta name="description" content="<?= $meta_description ?>" >
  <meta name="keywords" content="<?= $meta_keywords ?>" >
  <meta name="author" content="<?= $meta_author ?>" >


  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css/variables.css">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-circular.css">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-shared.css">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-wco-card.css">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230211-our-process-2.css">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230212-feb23-issue.css">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230212-our-services-2.css">

  <? wp_head(); ?>

  <!-- Matomo -->
  <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//a1.wasya.co/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '2']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Matomo Code -->

</head>

<body class=" <?= join(" ", get_body_class()); ?>" >

<? wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

  <? get_template_part( 'template-parts/header/site-header' ); ?>

  <div id="content" class="site-content">
    <div class="content-area">
      <main class="site-main">
