<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

    <div class="container">
    <br/>

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title georgia"><i class="fas fa-search"></i> <?php printf( esc_html__( 'Search Results for: %s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
