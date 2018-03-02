<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fabthemes
 */
?>

	<footer id="colophon" class="site-footer section pp-scrollable" role="contentinfo">
<?php if( is_home() || is_archive() || is_search() ){?>		
<div class="paginate">
	<?php pagination_bar(); ?>
</div>		
<?php } ?>

		<div id="footer-widgets">
			<div class="container"> <div class="row">
				<?php dynamic_sidebar( 'footerbar' ); ?>
				<div class="col-md-4">
					<?php get_template_part( 'sponsors' ); ?>
				</div>
				
				<div class="clear"></div>
			</div></div>
		</div>

		<div class="container"> <div class="row">
			<div class="col-md-12"> 
				<div class="site-info">
				Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?> <br>
				<?php fflink(); ?> | <a href="http://fabthemes.com/<?php echo FT_scope::tool()->themeName ?>/" ><?php echo FT_scope::tool()->themeName ?> WordPress Theme</a>
				</div><!-- .site-info -->
			</div>
		</div></div>

	</footer><!-- #colophon -->

		</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
