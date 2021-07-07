<?php /* Template Name: Home Page */

get_header(); ?>
  <div id="banner">
  
           <div class="slider">
                  <div class="callbacks_container">
                      <ul class="rslides" id="slider">
                      <?php if(get_field('slider-section',13)) {
		  		while(has_sub_field('slider-section',13)) {
				$img_url=get_sub_field('image',13);?>
                        <li><img src="<?php echo $img_url['url']; ?>" class="img-responsive" alt=""/><div class="slider-text"><h3 class="slider-strip wow bounceInLeft" data-wow-delay="0.4s"><?php echo get_sub_field('text'); ?></h3></div></li>
                        <?php }}?>
                      </ul>
                  </div>
            </div>
           
           </div>

		

  
                      
           <div id="" style=" width: 100%;height: auto;padding-bottom: 20px;background: #e6f0fe; margin:0; padding:0; overflow-x:hidden;">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            <div id="marque-text">
                <?php echo do_shortcode('[horizontal-scrolling group="GROUP1"]'); ?> 
		
            </div>


		            	<div id="introduction">
                 <div id="topbar-intro">
                	
                    <?php if(get_field('introduction_block',13)) {
		  		while(has_sub_field('introduction_block',13)) {
				$img_url=get_sub_field('image',13);?>
                    <div class="introduction-block col-lg-4">
                     <a href="<?php echo get_sub_field('link'); ?>"><img src="<?php echo $img_url['url']; ?>" alt="<?php echo $img_url['alt'];?>"></a>
                  <div class="person-intro"><h4><?php echo get_sub_field('name_position'); ?></h4><p><?php echo get_sub_field('goverment'); ?></p></div>
                    </div>
                    <?php }}?>
                    
                    
                    </div>
                    		<div id="about-rajuvas">
             <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;?>
                              <div class="clear-fix"></div>
                            </div>
                            <div id="institutions" >
			<div class="row">
                            <?php if(get_field('institute_block',13)) {
                              while(has_sub_field('institute_block',13)) {
                            ;?>
			
                            <div class="institute-block col-lg-4" style="margin-left:0 !important; width: auto;">
                               <h4><?php echo get_sub_field('title'); ?></h4>
                               <ul>
                               <?php if(get_sub_field('link_text',13)) {
                                  while(has_sub_field('link_text',13)) {
                                ;?>
                               <li><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('text'); ?></a></li>
                               <?php }}?>
                               </ul>
                            
                           
			</div>
                            <?php }}wp_reset_query();
?>
 </div>
                             <div class="clear-fix">
                            </div>
                            
                
<?php if(get_field('organisations_link')){ ?>
<div class="other_link">
 <ul>
<?php while(has_sub_field('organisations_link')){ ?>
            <li><a href="<?php echo get_sub_field('organisation_url'); ?>" target="_blank"><?php echo get_sub_field('organisation_name'); ?></a></li>
          <?php } ?>
          </ul>
</div>         
<?php } ?>
                </div>
                </div>
                
                	<?php get_template_part('sidebar'); ?>

            <div class="clear-fix"></div>

            	</div>
            
            <div class="contentarea-section section-second row wow fadeInUp animated">
            <?php if(get_field('campus_and_projects',13)) {
		  		while(has_sub_field('campus_and_projects',13)) {
				$img_url=get_sub_field('image',13);?>
             <div class="rajuvas-project-block">
             <h4><?php echo get_sub_field('title'); ?></h4>
          <img src="<?php echo $img_url['url']; ?>" alt="<?php echo $img_url['alt'];?>">
            <p><?php $string = get_sub_field('text'); ?>
		<?php  $cutstring = substr($string, 0, 210); 
echo $cutstring ."..." ; ?></p>
             <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('view_more'); ?></a>
             </div>
             <?php }}?>
             
<?php if(get_field('gallery_image_block',475)) {  $count = count( get_sub_field( 'gallery_image_block',475 ) );?>
<div class="rajuvas-project-block">
<h4>PHOTO GALLERY</h4>
<div id="owl-slide" class="owl-carousel owl-theme">
 
		  		<?php while(has_sub_field('gallery_image_block',475)) {

				$img_url=get_sub_field('image',475);?>
            
  <div class="items">
               <img src="<?php echo $img_url['url']; ?>" alt="<?php echo $img_url['alt'];?>"/>
  </div>
            <?php if($count==5){ break; } ?>
             <?php $count++; } ?>
 
            
</div>
 <a href="<?php echo site_url('gallery') ?>">View More</a>
</div>
<?php }?>
           
            <div class="clear-fix"></div>
            </div>
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>


