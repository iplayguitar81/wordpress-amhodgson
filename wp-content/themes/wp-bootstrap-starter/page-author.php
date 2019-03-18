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
    <br/>
    <br/>
<!--    <section id="primary" class="content-area col-sm-12 col-lg-12">-->
<!--        <main id="main" class="site-main" role="main">-->

            <div class="row">

                <div class="col-lg-6 col-md-10 col-sm-10 col-10 order-1 order-lg-1 order-sm-1 mx-auto mt-3">


                    <img class="img-fluid mx-auto d-block" src="<?php bloginfo('template_directory'); ?>/images/amhodgson-sm.png" alt="Author AM Hodgson" />

                </div>

                <div class="col-lg-6 col-md-10 col-sm-10 col-10 order-2 order-lg-2 order-sm-2 mx-auto mt-5">
                <?php
                while ( have_posts() ) : the_post();

                    the_title( '<h1 class="text-center entry-title chand">', '</h1>' );
//                get_template_part( 'template-parts/content', 'page' );

                echo'<div class="entry-content ec-author georgia mx-auto">';
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
<!--        </main>-->


<?php
//get_sidebar();
get_footer();
