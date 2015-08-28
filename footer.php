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

			<?php if(get_theme_mod('site_logo')) {
				echo '<img src="'. get_theme_mod('site_logo') . '" alt="'.get_bloginfo( 'name' ).'">';
			} else { ?>
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
			<?php } ?>
		
	  </div>
	  <div class="footer-links">
	    <?php dynamic_sidebar( 'footer-1' ); ?>
	  	<?php dynamic_sidebar( 'footer-2' ); ?>
	  	<?php dynamic_sidebar( 'footer-3' ); ?>	 
	  	<?php dynamic_sidebar( 'footer-4' ); ?>	 	
	  </div>

	  <hr>

	  <p class="site-info">
	  	<?php echo get_theme_mod('footer_copyright_text')  ?>		
		</p><!-- .site-info -->
	</footer>









</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
