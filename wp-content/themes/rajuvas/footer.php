
<style>
#text-6 {
float: left;
width: 25%;
background: url(images/divider.jpg) right no-repeat;
padding: 0 0 0 40px;
}
#text-6 p, .nodal {
font-size: 14px;
color: #fff;
padding: 12px 13px 0 0;
line-height: 21px;
font-weight: 100;
}

#text-6 p a {
color: #fff;
}
#text-7 {
float: left;
width: 21%;
background: url(images/divider.jpg) right no-repeat;
padding: 0 0 0 40px;
}
#text-8 {
float: left;
width: 21%;
background: url(images/divider.jpg) right no-repeat;
padding: 0 0 0 40px;
}
#newsletterwidget-3 {
float: left;
width: 26%;
background: url(images/divider.jpg) right top no-repeat;
padding: 0 0 0 40px;
}
#newsletterwidget-3 p {
font-size: 14px;
color: #fff;
font-weight: 100;
padding: 12px 53px 12px 0;
}
#newsletterwidget-3 .tnp-email {
outline: 0;
border: none;
color: #21317e;
font-size: 10px;
padding: 6px 116px 7px 12px;
background: url(images/inputbgimg.jpg) right no-repeat #fff;
cursor: pointer;
max-width: 220px;
}
#newsletterwidget-3 .tnp-submit {
border: none;
color: #21317e;
font-size: 12px;
padding: 7px 15px;
background-color: #fff;
display: none;
}

#newsletterwidget-3 .tnp-field label {
color: #ffffff;
}
.textwidget{
font-size: 14px;
color: #fff;
font-weight: 100;
padding: 12px 53px 12px 0;
}
@media screen and (max-width: 479px) and (min-width: 320px){
  #text-6 {
    float: left;
    width: fit-content;
    background: url(images/divider.jpg) right no-repeat;
    padding: 0 0 0 40px;
}
  #text-7 {
    float: left;
    width: fit-content;
    background: url(images/divider.jpg) right no-repeat;
    padding: 0 0 40px 40px;
}
#text-8 {
    float: left;
    width: fit-content;
    background: url(images/divider.jpg) right no-repeat;
    padding: 0 0 40px 40px;
}
#newsletterwidget-3 {
float: left;
width: fit-content;
background: url(images/divider.jpg) right top no-repeat;
padding: 0 0 40px 40px;
}
}
</style>

<?php wp_footer(); ?>
<link href="<?php  echo bloginfo('template_url');?>/css/animate.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php  echo bloginfo('template_url');?>/css/media.css" type="text/css" rel="stylesheet"/>
<link href="<?php  echo bloginfo('template_url');?>/css/tabulous.css" type="text/css" rel="stylesheet"/>
<link href="<?php  echo bloginfo('template_url');?>/css/mega-menu.css" type="text/css" rel="stylesheet"/>
<link href="<?php  echo bloginfo('template_url');?>/css/masonary.css" type="text/css" rel="stylesheet"/>
<link href="<?php  echo bloginfo('template_url');?>/css/owl.carousel.css" type="text/css" rel="stylesheet"/>
<link href="<?php  echo bloginfo('template_url');?>/css/owl.theme.css" type="text/css" rel="stylesheet"/>

<!--<script language="javascript" type="text/javascript">
        {
            window.open('http://14.139.244.179/vp/wp/Election-PopUP.jpg', '_blank', 'height=515,width=700,left250,top=50,toolbar=0,directories=no,status=no,menubar=no,resizable=no,scrollbars=no,menubar=no,channelmode=no,addressbar=no');
        }
 </script>-->

	
  <div id="footer" class="row wow fadeInUp animated footer" style="width: 100%;height: auto;background-color: #0e6af5;padding: 30px 0 0;">
    <div class="main-container">
                	
        <?php if ( is_active_sidebar( 'footer-widget-area1' ) ) : ?>
      
        <?php dynamic_sidebar( 'footer-widget-area1' ); ?>
	  
     	<?php endif; ?>
	<?php include "counter1.php"; ?>

     	
        <div id="footer-bottom">
            <p class="copyright">&copy; 2015- All Rights Reserved to rajuvas.org</p>
            <p class="copyright company">Managed by: <a href="http://neologicx.com/" target="_blank">Department of Animal Genetics & Breeding, CVAS, RAJUVAS, Bikaner</a></p>
		    <?php if ( is_active_sidebar( 'bottom-widget-area' ) ) : ?>
      
    			<?php dynamic_sidebar( 'bottom-widget-area' ); ?>

 			<?php endif; ?>
                
            <div class="clear-fix"></div>
        </div>
                
    </div>
    <div class="clear-fix"></div>
   </div>
      
    
   </div>  
</div>   
  
 <script src="<?php  echo bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
  
  <script>
    jQuery(function () {
      jQuery("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 2000,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script src="<?php  echo bloginfo('template_url');?>/js/jquery.scrollbox.min.js"></script>
<script>
  jQuery('#notification1,#notification2,#notification3,#notification4').scrollbox({
    linear: true,
    step: 1,
    delay: 0,
    speed: 40,
    listElement: "ol"
  });
</script>
  <script src="<?php  echo bloginfo('template_url');?>/js/tabulous.js"></script>
  
      <script>
       jQuery(document).ready(function ($) {

       jQuery('#tabs').tabulous();
	   	

});
      </script>
      
      <script>
      jQuery(document).ready(function(){
    jQuery('#tabs li').click(function() {
        jQuery(this).siblings('li').removeClass('active');
       jQuery(this).addClass('active');
    });
});
      
      </script>
      
 <script src="<?php  echo bloginfo('template_url');?>/js/jquery.marquee.min.js"></script>
 <script>
   jQuery(document).ready(function(){
 jQuery('.marquee').marquee({
  direction: 'left',
  speed: 50,
  pauseOnHover: true,
});   


 jQuery('.marquee-present').marquee({
  direction: 'up',
  speed: 50,
  pauseOnHover: true,
}); 
});  
 </script>

<script src="<?php  echo bloginfo('template_url');?>/js/vallenato.js"></script>
<script> 
jQuery(document).ready(function(){
 jQuery("#magnifier").click(function(){
   jQuery("#search-box-panel").slideToggle(150);
  });
 jQuery(".facebook > a").attr('title','Facebook');
 jQuery(".google > a").attr('title','Webmail');
 jQuery(".alumni > a").attr('title','Alumni');
 jQuery(".student > a").attr('title','Self Service Portal');
});
</script> 
      
     
      <script src="<?php  echo bloginfo('template_url');?>/js/wow.min.js"></script>
		<script>
		 new WOW().init();


		jQuery("#search-box-panel").click(function(e){ e.stopPropagation(); });
		jQuery("body").click(function(e){
			if(e.target.id=="magnifier")
			{
			return false;
			}
			
			if(jQuery("#search-box-panel").is(":visible"))
			{
				jQuery("#search-box-panel").slideUp(150);
			}
			
			});
			
			


  $(function(){

    var $container =$('#container_gallery');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.box'
      });
    });
  
  });
  


$(document).ready(function() {
 $("#owl-slide").owlCarousel({
     autoPlay : 3000,
    stopOnHover : true,
    navigation:true,
pagination: false,
    singleItem : true,
    //transitionStyle:"fade"
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
 <script>

   $count = 0;
  function count($type) {
    if($type == 'plus'){
      $count += 1;      
    }else if($type == 'minus'){
      $count -= 1;
    }
    return $count;
  }

$(function() {
  $(".increase").click(function() {
    if($count<3){
            $("div, div *").children().each(function() {
          var size = parseInt($(this).css("font-size"));
          size = size + 1 + "px";
          $(this).css({
            'font-size': size
          });
        });
        count('plus');     
    }        
  });
  return false;
});
$(function() {
  $(".decrease").click(function() {
    if($count>-3){
    $("div, div *").children().each(function() {
      var size = parseInt($(this).css("font-size"));
      size = size - 1 + "px";
      $(this).css({
        'font-size': size
      });
    });
    count('minus');
  }
  });
  return false;
});

</script>

<script>
    function Refresh() {
        window.parent.location = window.parent.location.href;
    }
</script>

</body>
</html>