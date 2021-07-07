<?php get_header(); ?>
  
  
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
                            
                            
                     <?php if(get_field('dropdown_tab')){
		  		while(has_sub_field('dropdown_tab')) {
				?>
             					<div id="accordion-container"> 
     <h2 class="accordion-header"><?php echo get_sub_field('title'); ?></h2> 
     <div class="accordion-content"> 
         
             <p><?php echo get_sub_field('content'); ?></p>	


     </div> 
     
</div>
<?php }}?>
     </div>           </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
            
            
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>
