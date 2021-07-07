<?php 
/*
Template Name: Faculty page
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
           					
                            <?php if(get_field('faculty')){
 while(has_sub_field('faculty')){ ?> 
        
		
                           <div id="faculty-profile">
                            <div id="faculty-information">
                             <table id="faculty_info_tab">
                            
                             <tr>
                             <td class="static-field">Faculty Name</td>
                             <td><?php echo get_sub_field('faculty_name');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Designation</td>
                             <td><?php echo get_sub_field('designation');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Place of Posting</td>
                             <td><?php echo get_sub_field('place_of_posting');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Degrees</td>
                             <td><?php echo get_sub_field('degrees');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Email Id</td>
                             <td><?php echo get_sub_field('email_id');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Telephone No. </td>
                             <td><?php echo get_sub_field('telephone_no.');?></td>
                             </tr>
                             
                             </table>	
                            </div>

                           <div id="faculty-image"><?php $image = get_sub_field('image');?> <img width="99" height="99" src="<?php echo $image['url']; ?>"> </div>
                           <div class="clear-fix"></div>   
                           </div> 
                           
                            <?php  } } ?> 
                             
      			                      
                            </div>
                            
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>
