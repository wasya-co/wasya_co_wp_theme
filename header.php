<?
/**
 * Header
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
**/
?>

<!doctype html>
<html <? language_attributes(); ?> >
<head>
  <meta charset="<? bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?= owa_tracker(); ?>
  <?= google_analytics(); ?>
  <?= bootstrap_css(); ?>
  <?= carousel_css(); ?>


  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-circular.css">
  <link rel="stylesheet" href="/wp-content/themes/wasya_co_wp_theme/assets/css-compiled/a202302-shared.css">
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
