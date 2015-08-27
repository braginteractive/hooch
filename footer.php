<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hooch
 */

?>

	</div><!-- #content -->

	<footer class="footer" role="contentinfo">
	  <div class="footer-logo">
	    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
	  </div>
	  <div class="footer-links">
	    <?php dynamic_sidebar( 'footer-1' ); ?>
	  	<?php dynamic_sidebar( 'footer-2' ); ?>
	  	<?php dynamic_sidebar( 'footer-3' ); ?>	  	
	  </div>

	  <hr>

	  <p class="site-info">
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'hooch' ), 'Hooch', '<a href="http://braginteractive.com" rel="designer">Brad Williams</a>' ); ?>
			</p><!-- .site-info -->
	</footer>






</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
