<!doctype html>
<html <? language_attributes(); ?> >
<head>
  <meta charset="<? bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?= owa_tracker(); ?>
  <?= google_analytics(); ?>
  <? // bootstrap_css(); ?>
  <? mui_css(); ?>
  <?= carousel_css(); ?>

  <? /* Fonts */ ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <!-- <style> @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap'); </style> -->
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <? wp_head(); ?>
  <? // wp_admin_bar_render(); ?>

</head>