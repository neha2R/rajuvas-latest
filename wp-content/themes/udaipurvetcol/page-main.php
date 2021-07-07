<?php /* Template Name: Main Page */

get_header(); ?>
  
  
           <div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>
           
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction">
                 
                    		<div id="about-rajuvas" class="main-page-rajuvas">
                            <div id="main-page-image"><?php the_post_thumbnail(); ?></div>
             <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;?>
                              <div class="clear-fix"></div>
                            </div>
                            
                            
                 
                 
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
            
            
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>

