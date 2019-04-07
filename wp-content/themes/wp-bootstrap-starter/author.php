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


echo '<h1 class="georgia"> All Posts by:  '.$authorName.'</h1><br/>';

$author_posts = get_posts( array(
        'author' => $authorID,
        'numberposts' => 5,
        'orderby' => 'date'
    )
);




foreach ( $author_posts as $post ) :
    setup_postdata( $post ); ?>
    <div class="row mt-4">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto">
    <?php the_post_thumbnail('original', array('class' => 'img-fluid'));?>
    </div>

    <div class="col-lg-8 col-md-8 col-sm-12 col-12 order-1 order-lg-1 order-sm-1 mx-auto mt-4">
    <h2 class="chand mt-2 blog-index-titles"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php echo wp_trim_words( get_the_excerpt(), 35, '...  ' ); ?><a href="<?php the_permalink()?>" class="btn btn-sm btn-dark"> Read More</a>



    </div>


    </div>
    <br/>
    <hr/>

<?php endforeach;
wp_reset_postdata(); ?>



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