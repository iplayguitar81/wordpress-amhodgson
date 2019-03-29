<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */


get_header(); ?>
    <style>

        /* important because not having this here will
        create a white frame on each side of the book's page!
        */

        body{
            background-color: #FFFFFF;
            background-image: url('/wp-content/themes/wp-bootstrap-starter/images/bird-greyed-bg.png');
            background-size: auto 80%;
            background-repeat: no-repeat;
            background-position: center;


        }


    </style>
    <br/>
    <br/>


    <div id="extras" class="container">
        <br/>

        <div class="row">

            <div id="left-book-col" class="col-lg-12">
                <?php
                while ( have_posts() ) : the_post();

                    the_title( '<h1 class="entry-title chand">', '</h1>' );
//                get_template_part( 'template-parts/content', 'page' );

                    echo'<div class="entry-content ec-author georgia mx-auto text-center">';
                    the_content();

                    echo '</div>';

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>



        </div>

        <br/>
        <br/>
        <br/>

    </div>

<?php
//get_sidebar();
get_footer();
