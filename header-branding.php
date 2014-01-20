<?php
/**
 * The Header for our theme.
 *
 * Displays the branding header element
 *
 * @package Flint
 * @sub-package Vuyiroli
 * @since 0.1
 */
?>
  <div class="container">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headpanel.gif" width="867" alt="" class="aligncenter" id="banner"/>
    <nav class="canvas navbar navbar-inverse" role="navigation">
      <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
      <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
      <div class="container">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) ); ?>
      </div><!-- .container -->
    </nav><!-- .navbar -->
  </div>