<?php
/**
 * Header
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
**/
?>

<!doctype html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />


<!-- OWA Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'https://owa.wasya.co/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', '00cc61b2003af4e35fa914b1733c02ba']); // wasya_co
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
(function() {
    var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
    owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
    _owa.src = owa_baseUrl + 'modules/base/dist/owa.tracker.js';
    var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End OWA Tracker -->



  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-53077236-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-53077236-2');
  </script>




<? /*
<!-- Boostrap CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
<![endif]-->
*/ ?>


<!-- 2023-01-15 homepage carousel -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@latest/dist/css/glide.core.min.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@latest/dist/css/glide.theme.min.css"> -->
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@latest/dist/glide.min.js"></script>




<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

  <?php get_template_part( 'template-parts/header/site-header' ); ?>

  <div id="content" class="site-content">
    <div class="content-area">
      <main class="site-main">
