<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

get_header(); ?>



		<?php if ( have_posts() ) : ?>
			<?php $head_img = ft_of_get_option('fabthemes_headerpic',''); ?> 
			<header class="page-header section bg-frame" style="background:#222 url(<?php echo $head_img ?>) center no-repeat; background-size: cover; ">
				<div class="container"><div class="row"> <div class="col-md-12"> 
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'fabthemes' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'fabthemes' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'fabthemes' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'fabthemes' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'fabthemes' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'fabthemes' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'fabthemes' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'fabthemes' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'fabthemes' );

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'fabthemes' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'fabthemes' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'fabthemes' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'fabthemes' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'fabthemes' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'fabthemes' );

						else :
							_e( 'Archives', 'fabthemes' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
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

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>


<?php get_footer(); ?>
