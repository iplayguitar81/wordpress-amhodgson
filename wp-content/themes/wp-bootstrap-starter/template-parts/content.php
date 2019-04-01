<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div class="col-lg-12 col-md-12 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto mt-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--	<div class="col-lg-6 col-md-11 col-sm-11 col-12 order-1 order-lg-1 order-sm-1 mx-auto">-->

		<?php the_post_thumbnail( 'original', array('class' => 'img-fluid')); ?>

	</div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-12 order-2 order-lg-2 order-sm-2 mx-auto">

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title chand">', '</h1>' );
		else :
			the_title( '<h2 class="blog-index-titles chand mt-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content georgia">
		<?php
        if ( is_single() ) :


			the_content();
        else :


//            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );

            the_excerpt();

        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->

    <hr/>

    </div>


