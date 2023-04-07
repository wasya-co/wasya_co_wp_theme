
<!doctype html>
<html <? language_attributes(); ?> >
<head>
  <meta charset="<? bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?= owa_tracker(); ?>
  <?= google_analytics(); ?>
  <?= bootstrap_css(); ?>
  <? carousel_css(); ?>

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
</head>

<body class=" <?= join(" ", get_body_class()); ?>" >

<? wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

  <? get_template_part( 'template-parts/header/site-header' ); ?>

  <div id="content" class="site-content">
    <div class="content-area">
      <main class="site-main">
