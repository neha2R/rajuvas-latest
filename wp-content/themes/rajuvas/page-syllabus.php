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
                            <?php $subject=get_sub_field('title');?>
                            <button data-control><?php echo get_sub_field('title'); ?></button>
                           <?php if(get_sub_field('year_block')){
                        		  		while(has_sub_field('year_block')) {
                        				?>
                            <div data-content>
                                 <?php if($subject=="M.V.Sc./Ph.D.") { ?>
                                    <div data-accordion class="open">
                                        <button data-control class="first-sub" style="display:none"><?php echo get_sub_field('year_title'); ?></button>
                                        <?php } else { ?>
                                            <div data-accordion>
                                                <button data-control class="first-sub" ><?php echo get_sub_field('year_title'); ?></button>
                                 <?php } ?>



        <div data-content>
          <div>
	<div>
          <ul class="course-syllab">
           <?php if(get_sub_field('semester_block')){
		  		while(has_sub_field('semester_block')) {
				$img_url=get_sub_field('download');?>
          <li><h4 class="semester-name">
<?php echo get_sub_field('semester'); ?></h4><a href="<?php echo $img_url['url']; ?>">
Download</a><div class="clear-fix"></div></li>
          <?php }} ?>
          </ul>
          <div class="clear-fix"></div>
          </div>
	</div>
        </div>
         
      </div>
    
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

