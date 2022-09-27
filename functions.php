<?php

/*
 * _vp_ 2022-09-27
**/
function do_setup() {
  load_theme_textdomain( 't21', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
    * Let WordPress manage the document title.
    * This theme does not use a hard-coded <title> tag in the document head,
    * WordPress will provide it for us.
    */
  add_theme_support( 'title-tag' );

  /**
   * Add post-formats support.
   */
  add_theme_support(
    'post-formats',
    array(
      'link',
      'aside',
      'gallery',
      'image',
      'quote',
      'video',
      'audio',
    )
  );

  /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1568, 9999 );

  register_nav_menus(
    array(
      'primary' => esc_html__( 'Primary menu' ),
      'footer'  => esc_html__( 'Secondary menu' ),
    )
  );

  /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
  add_theme_support(
    'html5',
    array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
      'navigation-widgets',
    )
  );

  /*
    * Add support for core custom logo.
    *
    * @link https://codex.wordpress.org/Theme_Logo
    */
  $logo_width  = 300;
  $logo_height = 100;

  add_theme_support(
    'custom-logo',
    array(
      'height'               => $logo_height,
      'width'                => $logo_width,
      'flex-width'           => true,
      'flex-height'          => true,
      'unlink-homepage-logo' => true,
    )
  );

  add_theme_support( 'customize-selective-refresh-widgets' );

  add_theme_support( 'wp-block-styles' );

  // Add support for full and wide align images.
  add_theme_support( 'align-wide' );

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
    array(
      'name'  => esc_html__( 'Black' ),
      'slug'  => 'black',
      'color' => $black,
    ),
    array(
      'name'  => esc_html__( 'Dark gray' ),
      'slug'  => 'dark-gray',
      'color' => $dark_gray,
    ),
    array(
      'name'  => esc_html__( 'Gray' ),
      'slug'  => 'gray',
      'color' => $gray,
    ),
    array(
      'name'  => esc_html__( 'Green' ),
      'slug'  => 'green',
      'color' => $green,
    ),
    array(
      'name'  => esc_html__( 'Blue' ),
      'slug'  => 'blue',
      'color' => $blue,
    ),
    array(
      'name'  => esc_html__( 'Purple' ),
      'slug'  => 'purple',
      'color' => $purple,
    ),
    array(
      'name'  => esc_html__( 'Red' ),
      'slug'  => 'red',
      'color' => $red,
    ),
    array(
      'name'  => esc_html__( 'Orange' ),
      'slug'  => 'orange',
      'color' => $orange,
    ),
    array(
      'name'  => esc_html__( 'Yellow' ),
      'slug'  => 'yellow',
      'color' => $yellow,
    ),
    array(
      'name'  => esc_html__( 'White' ),
      'slug'  => 'white',
      'color' => $white,
    ),
  ) );

  add_theme_support('editor-gradient-presets', array(
    array(
      'name'     => esc_html__( 'Purple to yellow' ),
      'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
      'slug'     => 'purple-to-yellow',
    ),
    array(
      'name'     => esc_html__( 'Yellow to purple' ),
      'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
      'slug'     => 'yellow-to-purple',
    ),
    array(
      'name'     => esc_html__( 'Green to yellow' ),
      'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
      'slug'     => 'green-to-yellow',
    ),
    array(
      'name'     => esc_html__( 'Yellow to green' ),
      'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
      'slug'     => 'yellow-to-green',
    ),
    array(
      'name'     => esc_html__( 'Red to yellow' ),
      'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
      'slug'     => 'red-to-yellow',
    ),
    array(
      'name'     => esc_html__( 'Yellow to red' ),
      'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
      'slug'     => 'yellow-to-red',
    ),
    array(
      'name'     => esc_html__( 'Purple to red' ),
      'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
      'slug'     => 'purple-to-red',
    ),
    array(
      'name'     => esc_html__( 'Red to purple' ),
      'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
      'slug'     => 'red-to-purple',
    ),
  ) );

  add_theme_support( 'responsive-embeds' );

  add_theme_support( 'custom-line-height' );

  add_theme_support( 'experimental-link-color' );

  add_theme_support( 'custom-spacing' );

  add_filter( 'rss_widget_feed_link', '__return_false' );
}
add_action( 'after_setup_theme', 'do_setup' );

/**
 * Register widget area.
 */
function twenty_twenty_one_widgets_init() {
  register_sidebar(array(
    'name'          => esc_html__( 'Footer' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here to appear in your footer.' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function twenty_twenty_one_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'twenty_twenty_one_content_width', 750 );
}
add_action( 'after_setup_theme', 'twenty_twenty_one_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function do_enqueue_scripts() {
  // Note, the is_IE global variable is defined by WordPress and is used
  // to detect if the current browser is internet explorer.
  global $is_IE, $wp_scripts;
  if ( $is_IE ) {
    // If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
    wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
  } else {
    // If not IE, use the standard stylesheet.
    wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
  }

  // RTL styles.
  wp_style_add_data( 'twenty-twenty-one-style', 'rtl', 'replace' );

  // Print styles.
  wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

  // Threaded comment reply styles.
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Register the IE11 polyfill file.
  wp_register_script(
    'twenty-twenty-one-ie11-polyfills-asset',
    get_template_directory_uri() . '/assets/js/polyfills.js',
    array(),
    wp_get_theme()->get( 'Version' ),
    true
  );

  // Register the IE11 polyfill loader.
  wp_register_script(
    'twenty-twenty-one-ie11-polyfills',
    null,
    array(),
    wp_get_theme()->get( 'Version' ),
    true
  );
  wp_add_inline_script(
    'twenty-twenty-one-ie11-polyfills',
    wp_get_script_polyfill(
      $wp_scripts,
      array(
        'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
      )
    )
  );

  // Main navigation scripts.
  if ( has_nav_menu( 'primary' ) ) {
    wp_enqueue_script(
      'twenty-twenty-one-primary-navigation-script',
      get_template_directory_uri() . '/assets/js/primary-navigation.js',
      array( 'twenty-twenty-one-ie11-polyfills' ),
      wp_get_theme()->get( 'Version' ),
      true
    );
  }

  // Responsive embeds script.
  wp_enqueue_script(
    'twenty-twenty-one-responsive-embeds-script',
    get_template_directory_uri() . '/assets/js/responsive-embeds.js',
    array( 'twenty-twenty-one-ie11-polyfills' ),
    wp_get_theme()->get( 'Version' ),
    true
  );
}
add_action( 'wp_enqueue_scripts', 'do_enqueue_scripts' );

/**
 * Enqueue block editor script.
 */
function twentytwentyone_block_editor_script() {
  wp_enqueue_script( 'twentytwentyone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'enqueue_block_editor_assets', 'twentytwentyone_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix() {
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
add_action( 'wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix' );

require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 */
function twentytwentyone_customize_preview_init() {
  wp_enqueue_script(
    'twentytwentyone-customize-helpers',
    get_theme_file_uri( '/assets/js/customize-helpers.js' ),
    array(),
    wp_get_theme()->get( 'Version' ),
    true
  );
  wp_enqueue_script(
    'twentytwentyone-customize-preview',
    get_theme_file_uri( '/assets/js/customize-preview.js' ),
    array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers' ),
    wp_get_theme()->get( 'Version' ),
    true
  );
}
add_action( 'customize_preview_init', 'twentytwentyone_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 */
function twentytwentyone_customize_controls_enqueue_scripts() {
  wp_enqueue_script(
    'twentytwentyone-customize-helpers',
    get_theme_file_uri( '/assets/js/customize-helpers.js' ),
    array(),
    wp_get_theme()->get( 'Version' ),
    true
  );
}
add_action( 'customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts' );

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class() {
  ?>
  <script>
  if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
    document.body.classList.add( 'is-IE' );
  }
  </script>
  <?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
  /**
   * Retrieves the list item separator based on the locale.
   *
   * Added for backward compatibility to support pre-6.0.0 WordPress versions.
   *
   * @since 6.0.0
   */
  function wp_get_list_item_separator() {
    /* translators: Used between list items, there is a space after the comma. */
    return __( ', ' );
  }
endif;
