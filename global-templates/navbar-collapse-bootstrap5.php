<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!-- <div class="header-top d-none d-sm-none d-md-none d-lg-block">
  <div class="<?php // echo esc_attr( $container ); ?>">
    <div class="row">
      <div class="top-nav-wrapper d-flex align-items-center">
        <div class="col-md-3 top-nav-wrapper border-bottom border-end py-2">
          <a href="#" class="text-primary fs-5 fw-light text-decoration-none">
            Llame a (809) 924-6614
          </a>
        </div>
        <div class="col-md-7 top-nav-wrapper border-bottom border-end py-2 ps-3">
          <span>
            Mn - St: 8:00am - 9:00pm, Sunday: CLOSED
          </span>
        </div>
        <div class="col-md-2 top-nav-wrapper border-bottom mx-auto py-2 d-flex justify-content-evenly">
          <i class="fa fa-facebook""></i>
          <i class=" fa fa-instagram""></i>
          <i class="fa fa-youtube""></i>
					<i class=" fa fa-twitter""></i>
        </div>
      </div>
    </div>
  </div>
</div> -->
<span class="position-absolute trigger">
  <!-- hidden trigger to apply 'stuck' styles -->
</span>

<nav id="main-nav" class="navbar navbar-expand-lg sticky-top bg-* py-5" aria-labelledby="main-nav-label">

  <h2 id="main-nav-label" class="screen-reader-text">
    <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
  </h2>


  <div class="<?php echo esc_attr( $container ); ?>">

    <!-- Your site branding in the menu -->
    <?php get_template_part( 'global-templates/navbar-branding' ); ?>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false"
      aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- The WordPress Menu goes here -->
    <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'primary',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navbarNavDropdown',
          'menu_class'      => 'navbar-nav ms-auto',
          'fallback_cb'     => '',
          'menu_id'         => 'main-menu',
          'depth'           => 2,
          'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        )
      );
      ?>
    <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram fa-2x mx-3"></i></a>
    <a href="#" class="btn btn-primary">Reserve su cita</a>


  </div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->