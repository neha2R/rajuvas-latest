<?php /* Template Name: Gallery Page */

get_header(); ?>
  
  
           <div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>
           
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction_gallery">
                 
                    		<div id="about-rajuvas" class="main-page-rajuvas">
                            <div id="container_gallery" class="clearfix">
  <?php if(get_field('gallery_image_block')) {
		  		while(has_sub_field('gallery_image_block')) {
				$img_url=get_sub_field('image');?>
    <div class="box photo col3">
      <a href="<?php echo $img_url['url']; ?>" title="<?php echo get_sub_field('text'); ?>" rel="lightbox"><img src="<?php echo $img_url['url']; ?>" alt="Stanley" /><span class="masonary-img-text"><?php echo get_sub_field('text'); ?></span></a>
    </div>
    <?php }}?>
  
    
  
</div>
             
                              <div class="clear-fix"></div>
                            </div>
                            
                            
                 
                 
                </div>
                
                	
            <div class="clear-fix"></div>
            	</div>
            
            
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>


