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
	    <ul>
	      <li><h3>Content</h3></li>
	      <li><a href="javascript:void(0)">About</a></li>
	      <li><a href="javascript:void(0)">Contact</a></li>
	      <li><a href="javascript:void(0)">Products</a></li>
	    </ul>
	    <ul>
	      <li><h3>Follow Us</h3></li>
	      <li><a href="javascript:void(0)">Facebook</a></li>
	      <li><a href="javascript:void(0)">Twitter</a></li>
	      <li><a href="javascript:void(0)">YouTube</a></li>
	    </ul>
	    <ul>
	      <li><h3>Legal</h3></li>
	      <li><a href="javascript:void(0)">Terms and Conditions</a></li>
	      <li><a href="javascript:void(0)">Privacy Policy</a></li>
	    </ul>
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
