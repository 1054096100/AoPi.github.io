<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){
		echo '
		
<div id="welcome-panel" class="about-wrap">

	<div class="wpbadge" style="float:left; margin-right:30px; "><img src="'. get_template_directory_uri() . '/screenshot.png" width="250" height="200" /></div>

	<div class="welcome-panel-content">
	
	<h1>Welcome to '.wp_get_theme().' WordPress theme!</h1>
	
		<p class="about-text"> '.wp_get_theme().' is a free premium responsive WordPress theme from fabthemes.com. This theme is built on <b>Bootstrap 3</b> framework. <br> This is a photography WordPress template. This is ideal to setup a photography related website or for photographers to setup their portfolio. The theme has a one column layout with fullscreen stacked sections. Please make sure you use featured image for your posts so that the background is populated with it.  </p>
		


		<div class="changelog ">
			<h3>Theme setup</h3>
			
			<p> Upload the theme to your themes directory and activate it via your theme admin panel.  </p>

			<p> <b>Slider</b>: The first section on the homepage is a fullscreen slider. You have the options to select a category and number of items to show on the slider. 
			When you select a category the slider will show latest posts from that category along with the featured image of those posts. </p>

		</div>

	
	
		<div class="changelog ">
		
		<h3>Theme options explained</h3>
		<p>The theme contains an options page using which you adjust various settings available on the theme. </p>
		
		<h3> General settings </h3>
		<p><b>Header image</b> - Upload an image that can be used for the header section of the category pages and search pages.  </p>
		<p><b>Featured slider</b> - Select a categoty and the number of slides for homepage. </p>
						
		
		<h3> Style customization </h3>
		<p> Use the color selector to customize the main color scheme, accent color, link color, and link hover color. </p>
		
		<h3> Banner settings </h3>
		<p> Customize your sidebar banners </p>
		
		</div>
	
				
		<div class="changelog ">
		' . file_get_contents(dirname(__FILE__) . '/FT/license-html.php') . '
		</div>
	
				


	</div>
	</div>
		
		';
		

}
