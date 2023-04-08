<?php

// $hero_url_default = "https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/09/29191326/1920x450-dark-galaxy-1.jpg";
// $hero_url_default = "https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/12/26151217/1500x450-clouds-19.jpg";
$hero_url_default = "https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/04/08142951/1536x430-ai-bg-wallpaper-clouds-2.jpg";

/*
 * _vp_ 2022-09-27
**/
function do_setup() {
  include get_template_directory() . '/inc/category-meta-fields.php';
  load_theme_textdomain( 't21', get_template_directory() . '/languages' );

  add_theme_support( 'custom-logo' );
  add_theme_support( 'automatic-feed-links' ); // Add default posts and comments RSS feed links to head.

  add_theme_support( 'title-tag' ); // Let WordPress manage the document title.

  remove_theme_support( 'widgets-block-editor' );
  // show_admin_bar(false);

  add_filter('do_redirect_guess_404_permalink', '__return_false');
  add_filter('gutenberg_can_edit_post', '__return_false');
  add_filter('use_block_editor_for_post', '__return_false');
  wp_deregister_script('autosave');

  add_theme_support('post-formats', array('gallery',
                                          'image',
                                          'quote',
                                          'video',
  ) );

  add_theme_support( 'post-thumbnails' ); // set_post_thumbnail_size( 1568, 9999 );


  register_nav_menus(array(
    'primary' => esc_html__( 'Primary menu' ),
    'footer'  => esc_html__( 'Footer menu' ),
  ) );
  register_nav_menu('footer', 'footer');

  add_theme_support('html5', array( 'comment-form',
                                    'comment-list',
                                    'gallery',
                                    'caption',
                                    'style',
                                    'script',
                                    'navigation-widgets',
  ) );

  add_theme_support( 'customize-selective-refresh-widgets' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'align-wide' ); // Add support for full and wide align images.

  // Editor color palette.
  $black     = '#000000';
  $dark_gray = '#28303D';
  $gray      = '#39414D';
  $green     = '#D1E4DD';
  $blue      = '#D1DFE4';
  $purple    = '#D1D1E4';
  $red       = '#E4D1D1';
  $orange    = '#E4DAD1';
  $yellow    = '#EEEADD';
  $white     = '#FFFFFF';

  add_theme_support('editor-color-palette', array(
    array('name'  => esc_html__( 'Black' ),
          'slug'  => 'black',
          'color' => $black,
    ),
    array('name'  => esc_html__( 'Dark gray' ),
          'slug'  => 'dark-gray',
          'color' => $dark_gray,
    ),
    array('name'  => esc_html__( 'Gray' ),
          'slug'  => 'gray',
          'color' => $gray,
    ),
    array('name'  => esc_html__( 'Green' ),
          'slug'  => 'green',
          'color' => $green,
    ),
    array('name'  => esc_html__( 'Blue' ),
          'slug'  => 'blue',
          'color' => $blue,
    ),
    array('name'  => esc_html__( 'Purple' ),
          'slug'  => 'purple',
          'color' => $purple,
    ),
    array('name'  => esc_html__( 'Red' ),
          'slug'  => 'red',
          'color' => $red,
    ),
    array('name'  => esc_html__( 'Orange' ),
          'slug'  => 'orange',
          'color' => $orange,
    ),
    array('name'  => esc_html__( 'Yellow' ),
          'slug'  => 'yellow',
          'color' => $yellow,
    ),
    array('name'  => esc_html__( 'White' ),
          'slug'  => 'white',
          'color' => $white,
    ),
  ) );

  add_theme_support('editor-gradient-presets', array(
    array('name'     => esc_html__( 'Purple to yellow' ),
          'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
          'slug'     => 'purple-to-yellow',
    ),
    array('name'     => esc_html__( 'Yellow to purple' ),
          'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
          'slug'     => 'yellow-to-purple',
    ),
    array('name'     => esc_html__( 'Green to yellow' ),
          'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
          'slug'     => 'green-to-yellow',
    ),
    array('name'     => esc_html__( 'Yellow to green' ),
          'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
          'slug'     => 'yellow-to-green',
    ),
    array('name'     => esc_html__( 'Red to yellow' ),
          'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
          'slug'     => 'red-to-yellow',
    ),
    array('name'     => esc_html__( 'Yellow to red' ),
          'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
          'slug'     => 'yellow-to-red',
    ),
    array('name'     => esc_html__( 'Purple to red' ),
          'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
          'slug'     => 'purple-to-red',
    ),
    array('name'     => esc_html__( 'Red to purple' ),
          'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
          'slug'     => 'red-to-purple',
    ),
  ) );

  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'custom-line-height' );
  add_theme_support( 'experimental-link-color' );
  add_theme_support( 'custom-spacing' );

  add_filter( 'rss_widget_feed_link', '__return_false' );
  add_filter('gutenberg_can_edit_post', '__return_false');
  add_filter('use_block_editor_for_post', '__return_false');
  add_filter('widget_text', 'do_shortcode');

  // ('pll_check_canonical_url', '__return_false', 99, 2);
  add_filter( 'pll_check_canonical_url', '__return_false' );

  remove_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 );

}
add_action( 'after_setup_theme', 'do_setup' );


function wco_get_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'wco_get_header');


function wco_admin_enqueue_scripts() {
  wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin.css');
}
add_action('admin_enqueue_scripts', 'wco_admin_enqueue_scripts');




/**
 * Register widget area. _vp_ 2022-11-11
**/
function wco_widgets_init() {

  register_sidebar(array(
    'name'          => 'Footer Col-1',
    'id'            => 'footer-1',
    'description'   => esc_html__( 'Add widgets here to appear in your footer.' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar(array(
    'name'          => 'Footer Col-2',
    'id'            => 'footer-2',
    'description'   => esc_html__( 'Add widgets here to appear in your footer.' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar(array(
    'name'          => 'Footer Col-3',
    'id'            => 'footer-3',
    'description'   => esc_html__( 'Add widgets here to appear in your footer.' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  // register_widget('FooterTop');

  register_sidebar(array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar-right',
    'description'   => esc_html__( 'Add widgets here to appear in your sidebar.' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  // register_widget('Sidebar');

}
add_action( 'widgets_init', 'wco_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Removed, looks like inflexible trash. _vp_ 2023-01-16
**/
// function wco_content_width() {
//   // This variable is intended to be overruled from themes.
//   // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
//   // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
//   $GLOBALS['content_width'] = apply_filters( 'twenty_twenty_one_content_width', 750 );
// }
// add_action( 'after_setup_theme', 'wco_content_width', 0 );


function wco_enqueue_scripts() {
  global $wp_scripts;

  // wp_deregister_script('jquery');
  // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
  // wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.13.2/jquery-ui.min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-ui-core');

  // wp_enqueue_style('normalize',     get_template_directory_uri() . '/assets/css/normalize.css');
  wp_enqueue_style('style',         get_template_directory_uri() . '/assets/css-compiled/site.css',            array(), wp_get_theme()->get('Version') );
  wp_enqueue_style('style-nav',     get_template_directory_uri() . '/assets/css-compiled/site-navigation.css', array(), wp_get_theme()->get('Version') );
  wp_enqueue_style('blocks_inputs', get_template_directory_uri() . '/assets/css-compiled/blocks-inputs.css',   array(), wp_get_theme()->get('Version') );
  wp_enqueue_style('print-style',   get_template_directory_uri() . '/assets/css/print.css',                    array(), wp_get_theme()->get('Version'), 'print' );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Register the IE11 polyfill file.
  wp_register_script(
    'twenty-twenty-one-ie11-polyfills-asset',
    get_template_directory_uri() . '/assets/js/polyfills.js',
    array(),
    wp_get_theme()->get('Version'),
    true
  );

  // Register the IE11 polyfill loader.
  wp_register_script('twenty-twenty-one-ie11-polyfills', null, array(), wp_get_theme()->get('Version'), true );
  wp_add_inline_script('twenty-twenty-one-ie11-polyfills', wp_get_script_polyfill($wp_scripts, array('Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset' ) ) );

  // Main navigation scripts.
  if ( has_nav_menu( 'primary' ) ) {
    wp_enqueue_script('twenty-twenty-one-primary-navigation-script',
      get_template_directory_uri() . '/assets/js/primary-navigation.js',
      array( 'twenty-twenty-one-ie11-polyfills' ),
      wp_get_theme()->get('Version'),
      true
    );
  }

  // Responsive embeds script.
  wp_enqueue_script('twenty-twenty-one-responsive-embeds-script',
    get_template_directory_uri() . '/assets/js/responsive-embeds.js',
    array( 'twenty-twenty-one-ie11-polyfills' ),
    wp_get_theme()->get( 'Version' ),
    true
  );

  wp_enqueue_script('wasya_co_js',
    get_template_directory_uri() . '/assets/js/wasya_co.js',
    array('jquery'),
    wp_get_theme()->get( 'Version' ),
    true // in footer
  );
}
add_action( 'wp_enqueue_scripts', 'wco_enqueue_scripts' );

// /**
//  * Enqueue block editor script.
//  */
// function wco_block_editor_script() {
//   wp_enqueue_script( 'wco-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
// }
// add_action( 'enqueue_block_editor_assets', 'wco_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 * @link https://git.io/vWdr2
 */
function wco_skip_link_focus_fix() {
  // If SCRIPT_DEBUG is defined and true, print the unminified file.
  if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
    echo '<script>';
    include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
    echo '</script>';
  } else {
    // The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
    ?>
    <script>
    /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
    </script>
    <?php
  }
}
add_action( 'wp_print_footer_scripts', 'wco_skip_link_focus_fix' );

require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

function owa_tracker() { echo "\n\n"; ?>
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
<? }

function google_analytics() { echo "\n\n"; ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-53077236-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-53077236-2');
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0865LYY50K"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0865LYY50K');
  </script>
<? echo "\n\n"; }

function bootstrap_css() { echo "\n\n"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap-theme.min.css" crossorigin="anonymous"> -->

  <? /* HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries */ ?>
  <? /* WARNING: Respond.js doesn't work if you view the page via file:// */ ?>
  <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
  <![endif]-->
<? }

function mui_css() { echo "\n\n"; ?>
  <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
  <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
<? }

function carousel_css() { echo "\n\n"; ?>
  <!-- 2023-01-15 homepage carousel -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@latest/dist/css/glide.core.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@latest/dist/css/glide.theme.min.css"> -->
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@latest/dist/glide.min.js"></script>
<? }

function wco_customize_preview_init() {
  wp_enqueue_script(
    'wco-customize-helpers',
    get_theme_file_uri( '/assets/js/customize-helpers.js' ),
    array(),
    wp_get_theme()->get( 'Version' ),
    true
  );
  wp_enqueue_script(
    'wco-customize-preview',
    get_theme_file_uri( '/assets/js/customize-preview.js' ),
    array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'wco-customize-helpers' ),
    wp_get_theme()->get( 'Version' ),
    true
  );
}
add_action( 'customize_preview_init', 'wco_customize_preview_init' );

/*
 * Naming ok _vp_ 2023-01-16
**/
function wco_customize_controls_enqueue_scripts() {
  wp_enqueue_script('wco-customize-helpers', get_theme_file_uri( '/assets/js/customize-helpers.js' ), array(), wp_get_theme()->get('Version'), true );
}
add_action( 'customize_controls_enqueue_scripts', 'wco_customize_controls_enqueue_scripts' );

function wco_add_ie_class() { // Add "is-IE" class to body if the user is on Internet Explorer.
  ?>
  <script>
  if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
    document.body.classList.add( 'is-IE' );
  }
  </script>
  <?php
}
add_action( 'wp_footer', 'wco_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) {
  function wp_get_list_item_separator() {
    return __( ', ' );
  }
}


