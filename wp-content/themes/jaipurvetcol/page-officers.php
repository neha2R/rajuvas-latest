<?php 
/*
Template Name: Officer of University page
*/
get_header(); ?>
				<div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>

           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction">
                    		<div id="about-rajuvas" class="about-rajuvas-faculty">
           					<div id="on-campus-main">
                                 <?php if(get_field('officer_block')){
		  		while(has_sub_field('officer_block')) {
				                    $img_url=get_sub_field('image');?>
             					<div id="accordion-container"> 
     <h2 class="accordion-header"><?php echo get_sub_field('post'); ?></h2> 
     <div class="accordion-content"> 
         
             <table id="faculty_info_tab" class="officer-info-tab">
                        
                             <tr>
                             <td class="static-field">Faculty Name</td>
                             <td><?php echo get_sub_field('name');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Designation</td>
                             <td><?php echo get_sub_field('designation');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Place of Posting</td>
                             <td><?php echo get_sub_field('email');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Degrees</td>
                             <td><?php echo get_sub_field('address');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Email Id</td>
                             <td><?php echo get_sub_field('telephone');?></td>
                             </tr>
                             </table>
						 <div id="officer-image"><img src="<?php echo $img_url['url']; ?>"/> </div>

					<div class="clear-fix"></div>
		 <p><?php echo get_sub_field('content');?></p>
       
     </div> 
     
</div>
<?php }}?>
</div>
      			                      
                            </div>
                            
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>
