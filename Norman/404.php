<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package fabthemes
 */

get_header(); ?>

			<?php $head_img = ft_of_get_option('fabthemes_headerpic',''); ?> 
			<section class="error-404 not-found section bg-frame" style="background:#222 url(<?php echo $head_img ?>) center no-repeat; background-size: cover; ">
				
				<div class="container"> <div class="row"> <div class="col-md-12"> 
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'fabthemes' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p style="text-align:center; color:#fff;"><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fabthemes' ); ?></p>
					</div><!-- .page-content -->
				</div></div></div>

			</section><!-- .error-404 -->

<?php get_footer(); ?>
