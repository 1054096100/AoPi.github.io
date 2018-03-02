<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

get_header(); ?>

<?php if ( $paged < 2 ) { ?>
	<div class="section featured-section">
		<div class="dscrol">
			<span>S</span>
			<span>c</span>
			<span>r</span>
			<span>o</span>
			<span>l</span>		
			<span>l</span>
			<span>D</span>
			<span>o</span>
			<span>w</span>	
			<span>n</span>		
		</div>
		<div id="slides">
		  	<ul class="slides-container">

				<?php $slidecount = ft_of_get_option('fabthemes_slide_count','2'); ?>
				<?php $slidecat = ft_of_get_option('fabthemes_slide_cat','1'); ?>

				<?php
				$args = array( 'posts_per_page' => $slidecount , 'cat' => $slidecat  );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
			    <li>
					<?php 
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
					?>
					<img src="<?php echo $img_url ?>" alt="<?php the_title(); ?>" /> 
					<div class="slider-data">
				      	<div class="container"> <div class="row"> <div class="col-md-12"> 
				       		<h2> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a> </h2>
				       		<div class="sread">
				       			<a href="<?php the_permalink();?>"> <?php _e('Read More','fabthemes')?> </a> 
				       		</div>
				      	</div></div></div>
			      	</div>
			    </li>
			    <?php endwhile;
			     wp_reset_postdata(); ?>

		  	</ul>

		  	<nav class="slides-navigation">
		    	<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
		    	<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
		  	</nav>

		</div>

	</div>
<?php } ?>

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

<?php get_footer(); ?>