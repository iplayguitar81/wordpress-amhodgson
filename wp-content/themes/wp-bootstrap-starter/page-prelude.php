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
            background-image: url('/wp-content/themes/wp-bootstrap-starter/images/prelude-bg.png');
            background-size: auto 90%;
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
                <h1 class="chand book-titles">Prelude</h1>
                <br/>
                <h3 class="book-sub-titles text-center">Book One of the Rhapsody Quartet</h3>
                <br/>
                <p>Sarah Mills is an endangered species— She just doesn't know it.</p>

                <p>Then she turns sixteen and "transitions." One magical hangover later, she's awakened as a gorgeous adult siren- a species the other magical races thought went extinct thirteen years ago. Most girls might adore the attention Sarah's suddenly getting, but all she wants to do is become invisible for the remainder of her high school career.</p>

                <p>Unfortunately, Sarah can't seem to turn off her siren compulsion. People hang on her every word. They do whatever she asks them to. The best looking guy in school wants to date her. Sarah just wants to go unnoticed, but it seems all she can do is make mistakes.</p>

                <p>After she shatters the minds of her foster parents with her first siren song, Sarah has no choice but to move in with the class diva. It’s the foster system all over again, but this time her host is a mermaid princess, backed by a council of magical creatures.</p>

                <p>The council claims to have her best interests at heart. They even assigned her a stoic elf bodyguard just to keep her safe. Because unfortunately for Sarah, there’s a reason the sirens all died off over a decade ago. Someone isn't happy that she survived. Someone wants her dead.</p>
                <p>The first attack was a wraith. The second attack played on Sarah’s greatest fears. The third attack might succeed.</p>
                <br/>

                <h4 class="purchase-online-sub">Purchase Online:</h4>
                <h4><a class="book-links" href="#">Paperback &bull; Kindle</a></h4>
            </div>
            <div class="col-lg-4">

                <br/>
                <br/>
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/images/prelude-cover.jpg" alt="Prelude by AM Hodgson" />
            </div>


        </div>

        <br/>
        <br/>
        <br/>

    </div>

<?php
//get_sidebar();
get_footer();
