<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="border-bottom" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div class="post-img py-4">
    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
  </div>
  <header class="entry-header">



    <?php if ( 'post' === get_post_type() ) : ?>

    <div class="entry-meta mb-3 fw-light fs-6">
      <?php understrap_posted_on(); ?>
      <?php understrap_entry_footer(); ?>
    </div><!-- .entry-meta -->

    <?php endif; ?>
    <?php
		the_title(
			sprintf( '<h2 class="entry-title non-break"><a href="%s" rel="bookmark" class="text-decoration-none">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

  </header><!-- .entry-header -->


  <div class="entry-content mt-4">

    <?php
		the_excerpt();
		understrap_link_pages();
		?>

  </div><!-- .entry-content -->

  <footer class="entry-footer mb-4">

    <?php // understrap_entry_footer(); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->