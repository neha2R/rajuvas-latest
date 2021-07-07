<?php /* Template Name: Contact Page */

get_header(); ?>
  
  
           <div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>
           
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction" class="contact-main-container">
                 <div id="main-page-image"><?php the_post_thumbnail(); ?></div>
                  
                 
                 
                  <div id="contact-us">  		
             <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;?>
                              <div class="clear-fix"></div>
                       
                        </div>    
                            
                 
                 
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            
           
            
            	</div>
            
             
         
          </div>
          </div>
  
  <div id="map"><?php echo do_shortcode( "[put_wpgm id=1]" ) ?></div>
<?php  get_footer(); ?>



