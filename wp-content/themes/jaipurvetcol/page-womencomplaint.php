<?php /* Template Name: Women complaint Page */

get_header(); ?>
  
  
           <div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>
           
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction">
                 
                    		<div id="about-rajuvas" class="rajuvas-research-stat">
                             <?php if(get_field('women_complaint_block')){
		  		while(has_sub_field('women_complaint_block')) {
				?>
                			<h1 class="campus"><?php echo get_sub_field('title'); ?></h1>
                            <div id="on-campus-main" class="women-complaint">
                                 <?php if(get_sub_field('complaint_block')){
		  		while(has_sub_field('complaint_block')) {
				$img_url=get_sub_field('image');?>
                                 
             					<div id="accordion-container"> 
     <h2 class="accordion-header"><?php echo get_sub_field('cvas'); ?></h2> 
     <div class="accordion-content">
     	<?php if(empty($img_url)){
			echo "";}else{?> 
        <img src="<?php echo $img_url['url']; ?>">
        <?php }?>
        <h2><?php echo get_sub_field('investigator'); ?></h2>
        <p><?php echo get_sub_field('content'); ?></p>
     </div> 
     
</div>
<?php }}?>
</div>	
<?php }} ?>												

                              <div class="clear-fix"></div>
                            </div>
                            
                            
                 
                 
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
            
            
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>



