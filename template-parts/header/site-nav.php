<?
/**
 * Displays the site navigation.
 *
**/
?>

<? if ( has_nav_menu( 'primary' ) ) : ?>
  <nav id="site-navigation" class="primary-navigation" aria-label="Primary menu">
    <div class="menu-button-container">
      <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
        <span class="dropdown-icon open"><? esc_html_e( 'Menu', 'twentytwentyone' ); ?>
          <?= twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); ?>
        </span>
        <span class="dropdown-icon close"><? esc_html_e( 'Close', 'twentytwentyone' ); ?>
          <?= twenty_twenty_one_get_icon_svg( 'ui', 'close' ); ?>
        </span>
      </button>
    </div>
    <? wp_nav_menu(array( 'theme_location'  => 'primary',
                          'menu_class'      => 'menu-wrapper',
                          'container_class' => 'primary-menu-container',
                          'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                          'fallback_cb'     => false,
    ) ); ?>
  </nav>
<? endif; ?>
