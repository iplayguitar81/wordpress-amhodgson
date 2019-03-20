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
            background-image: url('/wp-content/themes/wp-bootstrap-starter/images/caprice-bg.png');
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
                <h1 class="chand book-titles">Caprice</h1>
                <br/>
                <h3 class="book-sub-titles text-center">Book Three of the Rhapsody Quartet</h3>
                <br/>
                <p>Over a year has passed since Lyra’s departure from Whitecrest, but it’s almost as if she never left. She’s attacked the morning of her return.</p>

                <p>After dodging her assailant, she’s faced with a grim ultimatum: succeed in her mission, or die. There is no room for failure.</p>

                <p>Yet failure seems unavoidable.</p>

                <p>Flooded by loneliness in the wake of the macabre mysteries of Glenn’s bloody campsite and Score’s conspicuous silence, she finds herself lost. How can she prevail when she can barely think?</p>

                <p>Lyra has to decide: how hard will she fight for her right to live?</p>
                <br/>

                <h4 class="purchase-online-sub">Purchase Online:</h4>
                <h4><a class="book-links" href="#">Paperback &bull; Kindle</a></h4>
            </div>
            <div class="col-lg-4">

                <br/>
                <br/>
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/images/caprice-cover.jpg" alt="Caprice by AM Hodgson" />
            </div>


        </div>

        <br/>
        <br/>
        <br/>

    </div>

<?php
//get_sidebar();
get_footer();
