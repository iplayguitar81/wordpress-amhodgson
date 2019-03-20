
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
<div id="nocturne" class="container">

    <h1 class="chand book-page-titles text-center">Books</h1>
            <div class="row">

                <div class="col-6 col-lg-4 mb-1 offset-lg-2">
                    <a href="/books/prelude"><img src="<?php bloginfo('template_directory'); ?>/images/prelude-cover.jpg" alt="Prelude by AM Hodgson"></a>
                </div>

                <div class="col-6 col-lg-4 mb-1 mr-auto">
                    <a href="/books/sonata"><img src="<?php bloginfo('template_directory'); ?>/images/sonata-cover.jpg" alt="Sonata by AM Hodgson"></a>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-2 offset-lg-2">
                    <a href="/books/caprice"><img src="<?php bloginfo('template_directory'); ?>/images/caprice-cover.jpg" alt="Caprice by AM Hodgson"></a>
                </div>

                <div class="col-6 col-lg-4 mt-2 mr-auto">
                    <a href="/books/nocturne"><img src="<?php bloginfo('template_directory'); ?>/images/nocturne.jpg" alt="Nocturne by AM Hodgson"></a>
                </div>


            </div>


<!---->
<!--//            while ( have_posts() ) : the_post();-->
<!--//-->
<!--//                get_template_part( 'template-parts/content', 'page' );-->
<!--//-->
<!--//                // If comments are open or we have at least one comment, load up the comment template.-->
<!--//                if ( comments_open() || get_comments_number() ) :-->
<!--//                    comments_template();-->
<!--//                endif;-->
<!--//-->
<!--//            endwhile; // End of the loop.-->





<!--        </main><!-- #main -->-->
<!--    </section><!-- #primary -->-->

</div>
<?php
//get_sidebar();
get_footer();
