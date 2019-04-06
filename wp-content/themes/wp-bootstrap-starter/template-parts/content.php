<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<br/>
<div class="row">

    <?php

    $post_id = get_the_ID();
    $post_class = get_post_class();

    $single_post_image = '<div class="col-lg-12 col-md-12 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto mt-4" id="post-'.$post_id.'">';

    $non_single_image = '<div class="col-lg-6 col-md-6 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto mt-4" id="post-'.$post_id.'">';

    if ( is_single() ):

//    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto mt-4">';
        echo $single_post_image;


    else:

        echo $non_single_image;

   endif;

    ?>


		<?php

    if ( is_single() ) :
        the_post_thumbnail('original', array('class' => 'img-fluid mx-auto d-block'));

    else :
        the_post_thumbnail('original', array('class' => 'img-fluid'));
    endif;

    ?>

	</div>

<?php

if ( is_single() ) :

    echo '<div class="col-lg-12 col-md-12 col-sm-12 col-12 order-2 order-lg-2 order-sm-2 mx-auto">';

else :


    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-12 order-2 order-lg-2 order-sm-2 mx-auto">';

endif;

?>


		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title chand text-center mt-3">', '</h1>' );
		else :
			the_title( '<h2 class="blog-index-titles chand mt-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

            <?php

            if ( is_single() ) :
		echo '<div class="entry-meta text-center single-meta">';

		    else :

        echo '<div class="entry-meta">';


             endif;

            wp_bootstrap_starter_posted_on();

            ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

	<div class="entry-content georgia">
		<?php
        if ( is_single() ) :

            echo '<div class="single-content-text">';
			the_content();

            echo '</div>';
        else :

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



    </div>


</div>

<hr/>
