<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="social-icons text-center">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                &nbsp;
                <a href="#"><i class="fab fa-goodreads-g"></i></a>
                &nbsp;
                <a href="#"><i class="fab fa-instagram"></i></a>
                &nbsp;
                <a href="#"><i class="fab fa-twitter"></i></a>
                &nbsp;
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
            <br/>
            <div class="site-info text-center georgia">
                &copy; <?php echo date('Y'); ?> by <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>.  Website design by Bowtie Software &amp; A.M. Hodgson, all rights reserved.

<!--                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="Wordpress Technical Support" alt="Bootstrap Wordpress Theme">--><?php //echo esc_html__('Bootstrap Wordpress Theme','wp-bootstrap-starter'); ?>
<!--                </a>-->

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>