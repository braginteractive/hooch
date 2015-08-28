<?php
/**
 * Template Name: Homepage
 *
 *
 * @package Hooch
 */

get_header(); ?>

<?php 
	 // Gets the uploaded featured image
  	$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  	// Checks and returns the featured image
  	$bg = (!empty( $featured_img ) ? "background-image: url('". $featured_img[0] ."');" : '');
?>

<div class="hero" style="<?php echo $bg; ?>">
	<div class="hero-inner">
    <div class="hero-logo">
    	<?php if(get_field('hero_image')) {
			echo '<img src="' . get_field('hero_image') . '" alt="">';
		} else { ?>
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
		<?php } ?>
    	
	</div>
		<div class="hero-copy">
			<?php the_field('hero_content') ?>	
		</div>
	</div>
</div>

<div class="wrap">
	<div id="primary" class="content-home">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php 
                    // Checks to see if the bullet color values are set
					$color1 = (get_field('bullet_1_color') ? 'background:' . get_field('bullet_1_color') . ';' : '');
					$color2 = (get_field('bullet_2_color') ? 'background:' . get_field('bullet_2_color') . ';' : '');
					$color3 = (get_field('bullet_3_color') ? 'background:' . get_field('bullet_3_color') . ';' : ''); 
				?>

				<ul class="bullets">
				  <li class="bullet">
				    <div class="bullet-icon bullet-icon-1" style="<?php echo $color1; ?>">
				    	<?php if(get_field('bullet_1_image')) {
							echo '<img src="' . get_field('bullet_1_image') . '" alt="">';
						} else { ?>
							<img src="<?php bloginfo('template_url'); ?>/images/bullet-1.png" alt="">
						<?php } ?>
				    </div>
				    <div class="bullet-content">
				      <?php the_field('bullet_1_content') ?>
				  </div>
				  </li>  
				  <li class="bullet">
				    <div class="bullet-icon bullet-icon-2" style="<?php echo $color2; ?>">
				      <?php if(get_field('bullet_2_image')) {
							echo '<img src="' . get_field('bullet_2_image') . '" alt="">';
						} else { ?>
							<img src="<?php bloginfo('template_url'); ?>/images/bullet-2.png" alt="">
						<?php } ?>
				    </div>
				    <div class="bullet-content">
				      <?php the_field('bullet_2_content') ?>
				  </div>
				  </li>
				  <li class="bullet">
				    <div class="bullet-icon bullet-icon-3" style="<?php echo $color3; ?>">
				      <?php if(get_field('bullet_3_image')) {
							echo '<img src="' . get_field('bullet_3_image') . '" alt="">';
						} else { ?>
							<img src="<?php bloginfo('template_url'); ?>/images/bullet-3.png" alt="">
						<?php } ?>
				    </div>
				    <div class="bullet-content">
				      <?php the_field('bullet_3_content') ?>
				  </div>
				  </li> 
				</ul>


				<?php get_template_part( 'template-parts/content', 'home' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div> <!-- .wrap -->

<?php get_footer(); ?>
