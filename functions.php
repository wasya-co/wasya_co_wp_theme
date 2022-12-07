<?php

$hero_url_default = "https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/09/29191326/1920x450-dark-galaxy-1.jpg";

/*
 * _vp_ 2022-09-27
**/
function do_setup() {
  include get_template_directory() . '/inc/category-meta-fields.php';
  load_theme_textdomain( 't21', get_template_directory() . '/languages' );

  add_theme_support( 'custom-logo' );
  add_theme_support( 'automatic-feed-links' ); // Add default posts and comments RSS feed links to head.

  add_theme_support( 'title-tag' ); // Let WordPress manage the document title.

  add_filter('do_redirect_guess_404_permalink', '__return_false');

  add_theme_support('post-formats', array(
    'link',
    'aside',
    'gallery',
    'image',
    'quote',
    'video',
    'audio',
  ) );

  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size( 1568, 9999 );

  register_nav_menus(array(
    'primary' => esc_html__( 'Primary menu' ),
    'footer'  => esc_html__( 'Secondary menu' ),
  ) );

  add_theme_support('html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
    'navigation-widgets',
  ) );

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

  add_filter('gutenberg_can_edit_post', '__return_false');
  add_filter('use_block_editor_for_post', '__return_false');
  add_filter('widget_text', 'do_shortcode');
  register_nav_menu('footer', 'footer');
}
add_action( 'after_setup_theme', 'do_setup' );

function wco_admin_styles() {
  wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin.css');
}
add_action('admin_enqueue_scripts', 'wco_admin_styles');

function my_filter_head() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'my_filter_head');


/**
 * Register widget area. _vp_ 2022-11-11
 */
function init_widgets() {

  register_sidebar(array(
    'name'          => 'Footer Top',
    'id'            => 'footer-top',
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
add_action( 'widgets_init', 'init_widgets' );

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


function do_enqueue_scripts() {
  global $wp_scripts;

  wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css-compiled/site.css', array(), wp_get_theme()->get('Version') );
  wp_enqueue_style('style-nav', get_template_directory_uri() . '/assets/css-compiled/site-navigation.css', array(), wp_get_theme()->get('Version') );
  wp_enqueue_style('blocks_inputs', get_template_directory_uri() . '/assets/css/blocks_inputs.css');

  wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print' );

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
add_action( 'wp_enqueue_scripts', 'do_enqueue_scripts' );

// /**
//  * Enqueue block editor script.
//  */
// function twentytwentyone_block_editor_script() {
//   wp_enqueue_script( 'twentytwentyone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
// }
// add_action( 'enqueue_block_editor_assets', 'twentytwentyone_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
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

function twentytwentyone_add_ie_class() { // Add "is-IE" class to body if the user is on Internet Explorer.
  ?>
  <script>
  if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
    document.body.classList.add( 'is-IE' );
  }
  </script>
  <?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) {
  function wp_get_list_item_separator() {
    return __( ', ' );
  }
}


// Update Registration form and functions
add_action('login_head', function () {
  ?>
      <style>
          #registerform>p:first-child {
              display: none;
          }
      </style>
  
      <script type="text/javascript" src="<?php echo site_url('/wp-includes/js/jquery/jquery.js'); ?>"></script>
      <script type="text/javascript">
          jQuery(document).ready(function($) {
              $('#registerform > p:first-child').css('display', 'none');
          });
      </script>
  <?php
  });
  
  //Remove error for username, only show error for email only.
  add_filter('registration_errors', function ($wp_error, $sanitized_user_login, $user_email) {
      if (isset($wp_error->errors['empty_username'])) {
          unset($wp_error->errors['empty_username']);
      }
  
      if (isset($wp_error->errors['username_exists'])) {
          unset($wp_error->errors['username_exists']);
      }
      return $wp_error;
  }, 10, 3);
  
  
  add_action('login_form_register', function () {
      if (isset($_POST['user_login']) && isset($_POST['user_email']) && !empty($_POST['user_email'])) {
          $_POST['user_login'] = $_POST['user_email'];
      }
  });
  
  
  // Add custom field to the registration form
  add_action('register_form', function () {
  ?>
  
      <p class="user-password-wrap">
          <label for="password"><?php _e('Password'); ?></label>
          <input type="password" name="password" id="password" class="input password-input" size="20" value="" autocomplete="off" />
      </p>
  
      <p class="user-password-wrap">
          <label for="confirm_password"><?php _e('Confirm Password'); ?></label>
          <input type="password" name="confirm_password" id="confirm_password" class="input password-input" size="20" value="" autocomplete="off" />
      </p>
  
      <p class="user-password-wrap">
          <label for="captcha"><?php _e('Type "14.6" Below'); ?></label>
          <input type="text" name="captcha" id="captcha" class="input" size="20" value="" autocomplete="off" />
      </p>
  <?php
  });
  
  // Check Register Form Errors
  add_filter('registration_errors', function ($errors) {
  
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];
      $captcha = $_POST['captcha'];
  
      if (!$password) {
          $errors->add('password-required', '<strong>Error</strong>: Please enter a password.');
      }
  
      if (!$confirm_password) {
          $errors->add('password-required', '<strong>Error</strong>: Please enter a password confirmation.');
      }
  
      if (!($password == $confirm_password)) {
          $errors->add('password-mismatch', '<strong>Error</strong>: Password confirmation not matched.');
      }
  
      if (!$captcha) {
          $errors->add('captcha-required', '<strong>Error</strong>: Please enter a captcha for confirmation.' . $password);
      }
  
      if (!($captcha == '14.6')) {
          $errors->add('captcha-wrong', '<strong>Error</strong>: Please enter a valid captcha confirmation.');
          wp_redirect(site_url('/'));
          exit;
      }
  
      return $errors;
  });
  
  // Insert Password and Send Account activation code
  add_action( 'user_register', function ( $user_id ) {
      $userdata = array();
      $userdata['ID'] = $user_id;
      $userdata['user_pass'] = $_POST['password'];
      add_filter( 'send_password_change_email', '__return_false' );
      wp_update_user( $userdata );
  
      $user_info = get_userdata($user_id); 
      $code = md5(time()); 
      $string = array('id'=>$user_id, 'code'=>$code); 
      update_user_meta($user_id, 'account_activated', 0);
      update_user_meta($user_id, 'activation_code', $code); 
  
      $url = get_site_url(). '/my-account/?act=' .base64_encode( serialize($string)). "\r\n\r\n"; 
      $html = 'Please click the following link to activate the account'. "\r\n\r\n" . $url . "\r\n\r\n"; 
      wp_mail( $user_info->user_email, __('Email Subject','text-domain') , $html);
  });
  
  
  // Send Welcome Notification 
  add_filter('wp_new_user_notification_email', 'my_new_user_notification_email', 10, 2);
  
  function my_new_user_notification_email($wp_new_user_notification_email, $user)
  {
      $message  = "Welcome! Your account created successfully" . "\r\n\r\n";
      $message .= sprintf( __( 'Username: %s' ), $user->user_login ) . "\r\n\r\n";
      $message .= wp_login_url() . "\r\n";
  
      $wp_new_user_notification_email = array(
          'to'      => $user->user_email, 
          'subject' => __( '[%s] Login Details' ),
          'message' => $message,
          'headers' => '',
      );
  
      // $wp_new_user_notification_email['message'] = $message;
      // $wp_new_user_notification_email['headers'] = "From: Your Name<youremail@example.com>";
      return $wp_new_user_notification_email;
  }
  
  