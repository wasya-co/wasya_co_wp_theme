
<? $assetVersion = '20230518a'; ?>

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


  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css/variables.css?<?= $assetVersion; ?>">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-circular.css?<?= $assetVersion; ?>">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-shared.css?<?= $assetVersion; ?>">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-wco-card.css?<?= $assetVersion; ?>">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230211-our-process-2.css?<?= $assetVersion; ?>">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230212-feb23-issue.css?<?= $assetVersion; ?>">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a20230212-our-services-2.css?<?= $assetVersion; ?>">

  <!--Matomo-->
  <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//analytics.wasya.co/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '2']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!--/Matomo-->

  <!--Mautic-->
  <script type="text/javascript">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'https://mautic.wasya.co/media/js/mautic-form.js?v09d272bb';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://mautic.wasya.co';
        var MauticLang   = {
            'submittingMessage': "Please wait..."
        }
    }else if (typeof MauticSDK != 'undefined') {
        MauticSDK.onLoad();
    }
    </script>
    <!--/Mautic-->


  <? wp_head(); ?>
</head>

<body class=" <?= join(" ", get_body_class()); ?>" >

<? wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

  <? get_template_part( 'template-parts/header/site-header' ); ?>

  <div id="content" class="site-content">
    <div class="content-area">
      <main class="site-main">
