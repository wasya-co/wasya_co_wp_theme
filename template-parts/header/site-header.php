<?
/**
 * Display site header
 * _vp_ 2022-11-09
**/

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<div class="site-header-wrapper">
  <header id="masthead" class="<?= $wrapper_classes ?>" >

    <? get_template_part( 'template-parts/header/site-branding' ); ?>
    <? get_template_part( 'template-parts/header/site-nav' ); ?>

  </header>
</div>
