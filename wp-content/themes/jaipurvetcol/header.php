 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1;">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php  echo bloginfo('template_url');?>/css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php  echo bloginfo('template_url');?>/css/media.css" type="text/css" rel="stylesheet">
<link href="<?php  echo bloginfo('template_url');?>/css/tabulous.css" type="text/css" rel="stylesheet">
<link href="<?php  echo bloginfo('template_url');?>/css/mega-menu.css" type="text/css" rel="stylesheet">
<link href="<?php  echo bloginfo('template_url');?>/css/masonary.css" type="text/css" rel="stylesheet">
<link href="<?php  echo bloginfo('template_url');?>/css/owl.carousel.css" type="text/css" rel="stylesheet">
<link href="<?php  echo bloginfo('template_url');?>/css/owl.theme.css" type="text/css" rel="stylesheet">

<script src="<?php  echo bloginfo('template_url');?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php  echo bloginfo('template_url');?>/js/owl.carousel.js"></script>
<script src="<?php  echo bloginfo('template_url');?>/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="<?php  echo bloginfo('template_url');?>/js/jquery.accordion.js"></script>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<script>
  $(function(){

    var $container = $('#container_gallery');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.box'
      });
    });
  
  });
  
</script>
<script>
$(document).ready(function() {
 $("#owl-slide").owlCarousel({
       autoPlay : 3000,
    stopOnHover : true,
    navigation:true,
pagination: false,
    singleItem : true,
    transitionStyle:"fade"
 
  });

$('#demo [data-accordion]').accordion({
transitionSpeed: 300, // Transition speed on miliseconds.
transitionEasing: 'ease', // CSS value for easing
controlElement: '[data-control]', // CSS selector for the element acting as a button inside accordions.
contentElement: '[data-content]', // CSS selector for the element containing hide/show content.
groupElement: '[data-accordion-group]', // CSS selector for a parent element containing a group of accordions.
singleOpen: true // Opens a single accordion a time. If false, multiple accordions can be open a time.
});
});

</script>

</head>
<body>
	<div id="wrapper">
    
     <div id="header">
            <div class="top-a menu-inter">
                <div class="inner-top">
                    <input type="button" class="increase" value="A +">
                    <input type="button" class="decrease" value="A -">
                    <input type="button" class="restset" onClick="Refresh()" value="A">
                    <a href="http://rajuvas.org/screen-reader-access/">Screen Reader Access</a>
                </div>
            </div> 
        	<div id="header-top">
             <div id="search-box-panel">
             <form action="/jaipur/" method="GET">
             <input class="search"  type="search" name="s" placeholder="Search Pages and People...">
             </form>
             </div>
            	<div id="header-inner" class="header-top-inner">
               
                <div id="header-top-left">
                  <div id="logo" class="wow bounceInLeft" data-wow-delay="0.6s"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php  echo bloginfo('template_url');?>/images/header-logo.png" alt="CVAS Jaipur"></a>
                </div>
                  
 <h4 class="logo-title-vetcol wow bounceInLeft" data-wow-delay="0.4s">Post Graduate Institute of Veterinary Education<br> & Research, Jaipur</h4>
                </div>
                <div id="header-top-right">
                <div class="top-a menu-value">
                    <div class="inner-top">
                        <input type="button" class="increase" value="A +">
                        <input type="button" class="decrease" value="A -">
                        <input type="button" class="restset" onClick="Refresh()" value="A">
                        <a href="http://rajuvas.org/screen-reader-access/">Screen Reader Access</a>
                    </div>
                </div>   
            	<div id="options">
                	 <?php wp_nav_menu(array('menu'=>'Header-top-menu')); ?>
                     <a href="#" id="magnifier"></a>
                     <div class="clear-fix"></div>  
                </div>
                <div id="social-media">
                <?php if ( is_active_sidebar( 'social-widget-area' ) ) : ?>
      
        	<?php dynamic_sidebar( 'social-widget-area' ); ?>
    
     				 <?php endif; ?>
                   
             </div>
                </div>
                <div class="clear-fix"></div>
                </div>
            </div>
            	<div id="header-bootom">
                	<div class="header-inner-bottom-menu">
                    	<div id="nav">
                         <?php //echo do_shortcode("[responsive-menu]"); ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '#nav' ) ); ?>
           
     
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="clear-fix"></div>
                </div>
        
        </div>
    