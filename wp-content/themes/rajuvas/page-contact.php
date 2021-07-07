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
                  <div id="mail-details">
                    <table class="pure-table" cellspacing="0" cellpadding="0">
    <thead>
    
        <tr>
            <th>Name of Office</th>
            <th>Contact no.</th>
             <th>Fax</th>
            <th>E-mail</th>
        </tr>
    </thead>

    <tbody>
     <?php if(get_field('officer_contact')) {
		  		while(has_sub_field('officer_contact')) {
				?>
        <tr>
           
            <td><?php echo get_sub_field('person'); ?></td>
            <td><?php echo get_sub_field('contact_no'); ?></td>
            <td><?php echo get_sub_field('fax'); ?></td>
            <td><?php echo get_sub_field('mail_address'); ?></td>
        </tr>
			<?php }}?>
       
    </tbody>
</table>
                  
                  </div>
                 
                 
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



