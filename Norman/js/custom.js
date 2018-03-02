jQuery(window).load(function() {
	jQuery(".loader").fadeOut("fast");
})

jQuery(document).ready(function() {

  // Search form
  jQuery( ".search-button" ).click(function() {
    jQuery( ".msearch-form" ).slideToggle( "slow", function() {
      // Animation complete.
    });
  });

  // Menu
  jQuery("#norman").slicknav({
    prependTo:'#resmenu',
    label:''
  });

  // Slideshow
	jQuery('#slides').superslides({
		pagination:false,
    play:3000,
    animation:'fade'
	});

  // Pagepiling 
	jQuery('#content').pagepiling({
		navigation: false
	});


  // Share buttons
  jQuery('a.share-btn').on('click', function(){
    var width  = 575,
    height = 520,
    left   = (jQuery(window).width()  - width)  / 2,
    top    = (jQuery(window).height() - height) / 2,
    opts   = 'status=1' +
             ',width='  + width  +
             ',height=' + height +
             ',top='    + top    +
             ',left='   + left;
    newwindow=window.open(jQuery(this).attr('href'),'',opts);
    if (window.focus) {newwindow.focus()}
    return false;
    });

  //Placeholder
 	jQuery(function($) {

    var placeholders = {
      'author': 'Name',
      'url': 'Website',
      'email': 'Email',
      'comment': 'Your comment'
    };
  
    // Sets the HTML5 placeholders
    for(var id in placeholders){$("#"+id).attr("placeholder",placeholders[id])}
  
    // Polyfill to add support for browsers like IE<=9
    if(document.createElement("input").placeholder===undefined){$("html").attr("data-placeholder-focus","false");$.getScript("//jamesallardice.github.io/Placeholders.js/assets/js/placeholders.jquery.min.js",function(){$(function(){var e=window.module.lp.form.data.validationRules;var t=window.module.lp.form.data.validationMessages;lp.$.validator.addMethod("notEqual",function(e,t,n){return this.optional(t)||$(t).attr("data-placeholder-active")!=="true"||e!==n},function(e,n){return t[$(n).attr("id")].required});for(var n in placeholders){if($("#"+n).length){if(typeof t[n].required!=="undefined"){e[n].notEqual=placeholders[n]}else{e[n]={}}}}})})}
  
  });
	
});