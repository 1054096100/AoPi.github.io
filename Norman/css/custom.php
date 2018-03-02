<?php
	header("Content-type: text/css;");
	
	if( file_exists('../../../../wp-load.php') ) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;
?>

<?php
	// Styles	
	$primary 	= ft_of_get_option('fabthemes_primary_color','#769A38');
	$secondary	= ft_of_get_option('fabthemes_secondary_color','');
	$link 		= ft_of_get_option('fabthemes_link_color','');
	$hover 		= ft_of_get_option('fabthemes_hover_color','');
	
?>

#slides ul li .slider-data .sread:hover,
.entry-footer .n-button:hover,
#comments #respond p.form-submit input{
	background:<?php echo $primary ?>;
	border-color:<?php echo $primary ?>;
}

.entry-header h1.entry-title:after{
	background:<?php echo $primary ?>;
}
#comments h2.comments-title,
#comments #respond h3,
#comments ol.comment-list li .comment-body .comment-meta .comment-metadata a.comment-reply-link{
	color:<?php echo $primary ?>;
}

.site-footer{
	background:<?php echo $secondary ?>;
}
/* Links */

a:link, a:visited {
	color: <?php echo $link ?>;
}

a:hover,
a:focus,
a:active {
	color:<?php echo $hover ?>;
	text-decoration: none;
}


