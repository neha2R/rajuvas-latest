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
<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;?>
                            <div id="on-campus-main">
<?php if(get_field('research_block_on_campus')){   ?>                              
				<h1 class="campus">ON CAMPUS</h1>
                                 <?php 
		  		while(has_sub_field('research_block_on_campus')) {
				?>
             					<div class="accordion-container"> 
     <h2 class="accordion-header"><?php echo get_sub_field('station'); ?></h2> 
     <div class="accordion-content"> 
        <?php if(get_sub_field('investigator') || get_sub_field('project') != ""){ 
            echo "<h4>" .get_sub_field('investigator')."</h4>";	
            echo "<span>".get_sub_field('project')."</span>";
        };?>    

<p><?php echo get_sub_field('content'); ?></p> 
     </div> 
     
</div>
<?php }}?>

    

</div>										<div id="off-campus-main">
								<?php if(get_field('research_block_off_campus')){ ?>
				                               <h1 class="campus offcamp">OFF CAMPUS</h1>
                                                
		  		<?php while(has_sub_field('research_block_off_campus')) {
				?>
                            					<div class="accordion-container"> 
     <h2 class="accordion-header"><?php echo get_sub_field('station'); ?></h2> 
     <div class="accordion-content"> 
         <?php if(get_sub_field('investigator') || get_sub_field('project') != ""){ 
            echo "<h4>" .get_sub_field('investigator')."</h4>";	
            echo "<span>".get_sub_field('project')."</span>";
        };?>
		<p><?php echo get_sub_field('content'); ?></p> 
     </div> 
     
</div>
<?php }} ?>

<?php if(get_field('advance_research_centre')){
		  		while(has_sub_field('advance_research_centre')) {
				?>
             					<div class="accordion-container"> 
     <h2 class="accordion-header"><?php echo get_sub_field('heading'); ?></h2> 
     <div class="accordion-content"> 
         
             <p><?php echo get_sub_field('content'); ?></p>	


     </div> 
     
</div>
<?php }}?>


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

