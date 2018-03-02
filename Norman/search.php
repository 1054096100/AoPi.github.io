<?php
/**
 * The template for displaying search results pages.
 *
 * @package fabthemes
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php $head_img = ft_of_get_option('fabthemes_headerpic',''); ?> 
			<header class="page-header section bg-frame" style="background:#222 url(<?php echo $head_img ?>) center no-repeat; background-size: cover; ">
				<div class="container"><div class="row"> <div class="col-md-12"> 
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'fabthemes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		
				</div></div></div>
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
			</header><!-- .page-header -->
			
			<div class="section pp-scrollable section-search" style="background:#fff;">
				<div class="container"> <div class="row"> <div class="col-md-12"> 
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'content', 'search' );
						?>

					<?php endwhile; ?>
				</div></div></div>
			</div>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

<?php get_footer(); ?>