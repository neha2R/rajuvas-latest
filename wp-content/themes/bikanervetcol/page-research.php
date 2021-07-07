<?php /* Template Name: Research Page */

get_header(); ?>
  
  
           <div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>
           
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction">
                 
                    		<div id="about-rajuvas" class="rajuvas-research-stat">
                            <div id="on-campus-main">
                                 <h1 class="campus">ON CAMPUS</h1>
                                 <?php if(get_field('research_block_on_campus')){
		  		while(has_sub_field('research_block_on_campus')) {
				?>
             					<div id="accordion-container"> 
     <h2 class="accordion-header"><?php echo get_sub_field('station'); ?></h2> 
     <div class="accordion-content"> 
         
             <h4><?php echo get_sub_field('investigator'); ?></h4>	


<span><?php echo get_sub_field('project'); ?></span>
<p><?php echo get_sub_field('content'); ?></p> 
     </div> 
     
</div>
<?php }}?>
</div>										<div id="off-campus-main">
				                               <h1 class="campus offcamp">OFF CAMPUS</h1>
                                                <?php if(get_field('research_block_off_campus')){
		  		while(has_sub_field('research_block_off_campus')) {
				?>
                            					<div id="accordion-container"> 
     <h2 class="accordion-header"><?php echo get_sub_field('station'); ?></h2> 
     <div class="accordion-content"> 
           <h4><?php echo get_sub_field('investigator'); ?></h4>	
         <span><?php echo get_sub_field('project'); ?></span>
		<p><?php echo get_sub_field('content'); ?></p> 
     </div> 
     
</div>
<?php }} ?>



	</div>			

                              <div class="clear-fix"></div>
                            </div>
                            
                            
                 
                 
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
            
            
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>



