<?php
/**
 * Sidebar setup for footer full
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

<!-- ******************* The Footer Full-width Widget Area ******************* -->

<div class="wrapper" id="wrapper-footer-full" role="complementary">

  <div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">
    <div class="row oli-online mb-5 d-none d-sm-block">

      <ul class="list-inline d-flex justify-content-center align-items-center">
        <li>
          <a href="" class="btn btn-primary">Reserve su cita</a>
        </li>
        <li>
          <p class="m-0 fs-3">Encuentre horarios disponibles</p>
        </li>
      </ul>

    </div>

    <div class="row">

      <?php dynamic_sidebar( 'footerfull' ); ?>

    </div>

  </div>

</div><!-- #wrapper-footer-full -->

<?php
endif;