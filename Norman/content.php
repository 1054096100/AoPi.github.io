<?php
/**
 * @package fabthemes
 */
?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class('section bg-frame'); ?>>
	<div class="container"> <div class="row"> 
		<div class="col-md-12"> 

			<header class="entry-header">

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php the_category(' - '); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>

				<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<span class="read n-button">
					<a href="<?php the_permalink();?>"><?php _e('Read More','fabthemes')?></a>
				</span>

				<span class="n-share n-button">
					<span class="share-trig">
						<?php _e('Share Story','fabthemes')?>
					</span>
					
					<span class="share-list">
						<!-- Twitter -->
						<a href="http://twitter.com/share?url=<?php the_permalink();?>"  class="share-btn twitter">
						    <i class="fa fa-twitter"></i>
						</a>
						<!-- Google Plus -->
						<a href="https://plus.google.com/share?url=<?php the_permalink();?>"  class="share-btn google-plus">
						    <i class="fa fa-google-plus"></i>
						</a>
						<!-- Facebook -->
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="share-btn facebook">
						    <i class="fa fa-facebook"></i>
						</a>
						<!-- LinkedIn -->
						<a href="http://www.linkedin.com/shareArticle?url=<?php the_permalink();?>"  class="share-btn linkedin">
						    <i class="fa fa-linkedin"></i>
						</a>					
					</span>

				</span>
			</footer><!-- .entry-footer -->

		</div>
	</div></div>
			<?php 
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full' ); 
			?>
			<style type="text/css">
			.post-<?php the_ID(); ?>{ background:#222 url(<?php echo $img_url ?>) center no-repeat; background-size: cover; };
			</style>
</article>
