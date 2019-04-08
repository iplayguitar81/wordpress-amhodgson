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

$preview_posts = query_posts( array(
    'posts_per_page' => 3,
    'orderby' => 'date',
));

?>

<div class="container">

 <?php

    foreach ( $preview_posts as $post ) :
    setup_postdata( $post ); ?>
    <div class="row mt-4">


        <?php

        if ( has_post_thumbnail() ) {

            echo '<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-1 order-lg-2 order-md-2 order-sm-1 mx-auto">';
            the_post_thumbnail('original', array('class' => 'img-fluid img-thumbnail'));
            echo '</div><div class="col-lg-8 col-md-8 col-sm-12 col-12 order-2 order-lg-1 order-md-1 order-sm-2 mx-auto mt-4"><h2 class="chand mt-2 blog-index-titles">';

        }

        else {

            echo '<div class="col-lg-12 col-md-12 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto mt-4"><h2 class="chand mt-2 blog-index-titles text-center">';

        }

        ?>

        <!--    <h2 class="chand mt-2 blog-index-titles">-->
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="georgia"><p class="author-excerpts">
                <?php echo wp_trim_words( get_the_excerpt(), 35, '...  ' ); ?><a href="<?php the_permalink()?>" class="btn btn-md btn-dark"> Read More</a></p>
        </div>


    </div>


</div>
    <br/>
    <hr/>

<?php endforeach;

wp_reset_postdata(); ?>




    <br/>


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
