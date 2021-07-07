<?php /* Template Name: Syllabus Page */

get_header(); ?>
  
  
           <div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>
           
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction">
                 
                    		<div id="about-rajuvas" class="rajuvas-research-stat">
                             			<section id="demo" data-accordion-group>
                                        <?php if(get_field('syllabus_block')){
		  		while(has_sub_field('syllabus_block')) {
				?>
  <section data-accordion>
    <button data-control><?php echo get_sub_field('title'); ?></button>
   <?php if(get_sub_field('year_block')){
		  		while(has_sub_field('year_block')) {
				?>
    <div data-content>
   
      <article data-accordion>
       
        <button data-control id="first-sub"><?php echo get_sub_field('year_title'); ?></button>
        <div data-content>
          <article><?php echo get_sub_field('content'); ?></article>
        </div>
         
      </article>
    
    </div>
     <?php }} ?>
    
  </section>
  <?php }}?>
  
  
	</section>

                              <div class="clear-fix"></div>
                            </div>
                            
                            
                 
                 
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
            
            
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>



