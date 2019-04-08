<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header();



?>

<div class="container">

    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-auto mt-5">
        <?php
        while ( have_posts() ) : the_post();

            the_title( '<h1 class="text-center entry-title georgia">', '</h1>' );
//                get_template_part( 'template-parts/content', 'page' );

            echo'<div class="entry-content ec-author georgia mx-auto">';
            the_content();

            echo '</div>';

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.

        edit_post_link(
            sprintf(
            /* translators: %s: Name of current post */
                esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>

        <hr/>

    </div>

 <?php

$preview_posts = query_posts( array(
    'posts_per_page' => 3,
    'orderby' => 'date',
));

    foreach ( $preview_posts as $post ) :
    setup_postdata( $post ); ?>
    <div class="row mt-4">


        <?php

        if ( has_post_thumbnail() ) {

            echo '<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-1 order-lg-2 order-md-2 order-sm-1 mx-auto">';

            echo '<a href="';
            the_permalink();
            echo '">';
            the_post_thumbnail('original', array('class' => 'img-fluid img-thumbnail'));
            echo '</a>';
            echo '</div><div class="col-lg-8 col-md-8 col-sm-12 col-12 order-2 order-lg-1 order-md-1 order-sm-2 mx-auto mt-4">';

            //echo '<h2 class="chand mt-2 blog-index-titles">';

            echo '<h2 class="blog-index-titles chand mt-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';

            echo ucwords(get_the_title());

            echo '</a></h2>';

        }

        else {

            echo '<div class="col-lg-12 col-md-12 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto mt-4">';

            echo '<h2 class="blog-index-titles chand mt-3 text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';

            echo ucwords(get_the_title());

            echo '</a></h2>';

        }

        if ( has_post_thumbnail() ) {
            echo '<div class="entry-meta">';

        }

        else {
            echo '<div class="entry-meta text-center">';

        }

        wp_bootstrap_starter_posted_on();


        ?>



        </div>
        <br/>



        <div class="georgia"><p class="author-excerpts">
                <?php echo wp_trim_words( get_the_excerpt(), 35, '...  ' ); ?><a href="<?php the_permalink()?>" class="btn btn-md btn-dark"> Read More</a></p>
        </div>
        <br/>
        <?php
        edit_post_link(
            sprintf(
            /* translators: %s: Name of current post */
                esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>



    </div>


</div>
    <br/>
    <hr/>

<?php endforeach;

wp_reset_postdata(); ?>




    <br/>


<div class="georgia text-center">
<a href="/blog" class="btn btn-lg btn-dark"><i class="fas fa-blog"></i> View Blog</a>
</div>

</div>




    <br/>
    <br/>

    <div class="row georgia mt-3">
        <br/>


        <?php

        get_sidebar();
        ?>


    </div>





<?php

get_footer();
