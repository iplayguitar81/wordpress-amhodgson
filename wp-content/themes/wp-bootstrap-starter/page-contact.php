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

//contact form logic...

//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success georgia bg-success text-dark'><i class='fas fa-thumbs-up'></i> {$message}</div>";
    else $response = "<div class='error georgia bg-secondary text-white'><i class='fas fa-exclamation-triangle'></i> {$message}</div>";

}


//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please be sure to fill all fields out!";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('admin_email');


$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

        //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            my_contact_form_generate_response("error", $email_invalid);
        else //email is valid
        {
            //validate presence of name and message
            if(empty($name) || empty($message)){
                my_contact_form_generate_response("error", $missing_content);
            }
            else //ready to go!
            {
                //send email
//                wp_mail( $to, $subject, $message, $headers = '', $attachments = array())
                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
                else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
            }
        }
    }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);



get_header(); ?>

    <div class="container">

        <div class="row">
    <div class="col-lg-12 mx-auto mt-5">

            <?php

            edit_post_link(
                sprintf(
                /* translators: %s: Name of current post */
                    esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ),
                '<span class="edit-link">',
                '</span>'
            );

            while ( have_posts() ) : the_post();
                the_title( '<h1 class="text-center entry-title chand">', '</h1>' );
                echo'<div class="entry-content ec-author georgia mx-auto">';
                the_content();
                echo '</div>';

            endwhile; // End of the loop.
            ?>


                <?php echo $response; ?>
                <br/>
                <form class="georgia" action="<?php the_permalink(); ?>" method="post">
                    <div class="form-group"><label class="col-form-label" for="name">Name</label><input class="form-control form-control-lg" type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></div>
                    <div class="form-group"><label class="col-form-label" for="message_email">Email</label><input class="form-control form-control-lg" type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></div>
                    <div class="form-group"><label class="col-form-label" for="message_text">Message</label><textarea class="form-control form-control-lg" type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></div>
                    <input type="hidden" name="submitted" value="1">
                        <div class="col-6 mx-auto">
                            <div class="form-group mx-auto"><label class="col-form-label" for="message_human">Human Verification<br/><span class="text-muted">? + 3 = 5</span></label><input class="form-control form-control-lg" type="text" style="width: 60px;" name="message_human"></div>
                    <div class="form-group"><input class="btn btn-lg btn-dark btn-block" type="submit"></div>
                        </div>
                </form>
            <br/>

            </div>

        </div>


     </div>

    <hr/>
    <br/>

    <div class="row georgia mt-3">
        <br/>



        <?php
        get_sidebar();
        ?>

    </div>


<?php
get_footer();
