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
            background-color: #535151;
            background-image: url('/wp-content/themes/wp-bootstrap-starter/images/sonata-bg.png');
            background-size: auto 80%;
            background-repeat: no-repeat;
            background-position:left center;


        }
    </style>
    <br/>
    <br/>


    <div id="nocturne" class="container">

        <div class="row">

            <div id="left-book-col" class="col-lg-7 offset-lg-1">
                <br/>
                <h1 class="chand book-titles">Sonata</h1>
                <br/>
                <h3 class="book-sub-titles text-center">Book Two of the Rhapsody Quartet</h3>
                <br/>
                <p>Lyra holds the key to her past in her hands— but she can’t decipher it.</p>

                <p>It’s frustrating to be confused about your siren heritage. It’s worse to have the answers so tantalizingly close, yet outside of your grasp.</p>

                <p>Luckily, Lyra knows Score can help… if Glenn lets him within 50 meters of her.</p>

                <p>But their bickering becomes the least of her worries when the Council of Extraordinaries assign her a new home. Lyra has a choice: discover her origins, or lose her friends forever.</p>

                <p>The journey is long and treacherous, leading through a dangerous land of magic, the Realm. But while she’s hunting for her past, someone is hunting her. And her unknown assailant has become more desperate.</p>
                <p>Lyra just wants to survive and get answers, but she may not like what she discovers. And what she finds will change her life forever.</p>
                <br/>

                <h4 class="purchase-online-sub">Purchase Online:</h4>
                <h4><a class="book-links" href="#">Paperback &bull; Kindle</a></h4>
            </div>
            <div class="col-lg-4">

                <br/>
                <br/>
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/images/sonata-cover.jpg" alt="Sonata by AM Hodgson" />
            </div>


        </div>

        <br/>
        <br/>
        <br/>

    </div>

<?php
//get_sidebar();
get_footer();
