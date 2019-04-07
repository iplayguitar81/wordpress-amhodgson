<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="container">
    <br/>

<?php



$authorID = get_the_author_meta('ID');

$authorName = get_the_author_meta('nicename');


echo '<h1 class="georgia">All Posts by:  '.$authorName.' <i class="fas fa-user"></i></h1><br/>';

$author_posts = query_posts( array(
        'author' => $authorID,
        'numberposts' => -1,
        'orderby' => 'date',
        'posts_per_page' => 5,
        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
    )
);




foreach ( $author_posts as $post ) :
    setup_postdata( $post ); ?>
    <div class="row mt-4">


<?php

if ( has_post_thumbnail() ) {

    echo '<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto">';
    the_post_thumbnail('original', array('class' => 'img-fluid img-thumbnail'));
    echo '</div><div class="col-lg-8 col-md-8 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto mt-4"><h2 class="chand mt-2 blog-index-titles">';

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



    <div class="navigation">
        <div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
        <div class="alignright"><?php next_posts_link('More &raquo;') ?></div>
    </div>


</div>
<br/>

    <div class="row georgia mt-3">
        <br/>
        <?php
        get_sidebar();
        ?>
    </div>


<?php
get_footer();