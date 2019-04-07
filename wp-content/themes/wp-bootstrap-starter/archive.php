<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>



    <div class="container">
        <br/>

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="georgia"> <i class="far fa-calendar-alt"></i> ', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

            echo '<div class="pagination mx-auto">';
            the_posts_pagination();
            echo '</div><br/>';

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    </div>


    <div class="row georgia mt-3">
        <br/>
        <?php
        get_sidebar();
        ?>
    </div>


<?php
get_footer();
