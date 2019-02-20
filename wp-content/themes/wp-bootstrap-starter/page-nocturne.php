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
        background-image: url('/wp-content/themes/wp-bootstrap-starter/images/nocturne-bg.png');
        background-size: auto 80%;
        background-repeat: no-repeat;
        background-position:left center;


    }
</style>


    <div id="nocturne" class="container">

        <div class="row">

            <div id="left-book-col" class="col-lg-7 offset-lg-1">
                <br/>
                <h1 class="chand book-titles">Nocturne</h1>
                <h3 class="book-sub-titles text-center">Book Four of the Rhapsody Quartet</h3>
                <br/>
                <p>One two three, twist a lock in me, the darkness descends soon...</p>

                <p>Score has been taken.  Taken, and worse.</p>

                <br/>
                <p>In the darkest hours of the night, Lyra receives a message:  come to the Shadowlands&mdash; alone&mdash; and collect your match.  She knows it's a trap.  She knows that the Shadowlands is the most dangerous place in the Realm, riddled with horrors beyond her imagination.  But she also knows she can't abandon Score.</p>



                <p>The deeper she plunges into the darkness, the more unsettled she becomes.  Things aren't as black and white as they once appeared, and Lyra begins to question everything she's learned about the worlds, their peoples, and the discontent that divides them.</p>

                <p>Despite her wishes, it's clear how this will end:  in blood, violence, and death.</p>
                <br/>

                <h4 class="purchase-online-sub">Purchase Online:</h4>
                <h4><a class="book-links" href="#">Paperback &bull; Kindle</a></h4>
            </div>
            <div class="col-lg-4">

                <br/>
                <br/>
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/images/nocturne.jpg" alt="Nocturne by AM Hodgson" />
            </div>


        </div>

        <br/>
        <br/>
        <br/>

    </div>

<?php
//get_sidebar();
get_footer();
