<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper oli-bg-primary" id="single-wrapper">

  <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
    <div class="row">
      <div class="col-md pt-4 pb-2 d-flex justify-content-center">
        <?php single_post_title( '<h1 class="entry-title non-break">', '</h1>' ); ?>
      </div>
      <div class="row">
        <div class="col-md pb-5 d-flex justify-content-center">
          <?php understrap_posted_on( '<span class="">', '</span>' ); ?>
        </div>
      </div>
    </div>

    <div class="row">

      <?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

      <main class="site-main bg-white rounded-3 p-3" id="main">

        <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

      </main>

      <?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

    </div><!-- .row -->

  </div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();