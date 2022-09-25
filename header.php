<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */
if (!defined( 'ABSPATH' )) { exit; }
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-53077236-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-53077236-2');
  </script>

</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
  class="skip-link screen-reader-text"
  href="#content"
  role="link"
  title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
    <?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
  echo astra_attr(
    'site',
    array(
      'id'    => 'page',
      'class' => 'hfeed site',
    )
  );
  ?>
>
  <?php
  astra_header_before();

  astra_header();

  astra_header_after();

  astra_content_before();
  ?>
  <div id="content" class="site-content">
    <div class="ast-container">
    <?php astra_content_top(); ?>
