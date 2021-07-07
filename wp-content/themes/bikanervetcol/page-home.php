<?php /* Template Name: Home Page */

get_header(); ?>
  
  <div id="banner">
  
           <div class="slider">
                  <div class="callbacks_container">
                      <ul class="rslides" id="slider">
                      <?php if(get_field('slider-section')) {
		  		while(has_sub_field('slider-section')) {
				$img_url=get_sub_field('image');?>
                        <li><img src="<?php echo $img_url['url']; ?>" class="img-responsive" alt="<?php echo $img_url['alt']; ?>"/><div class="slider-text"><p class="slider-strip wow bounceInLeft" data-wow-delay="0.4s"><?php echo get_sub_field('text'); ?></p></div></li>
                        <?php }}?>
                      </ul>
                  </div>
            </div>
           
           </div>
           
           
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            <div id="marque-text">
                <?php echo do_shortcode('[horizontal-scrolling group="GROUP1"]'); ?> 
            </div>
            	<div id="introduction">
                 <div id="topbar-intro">
                	
                    <?php if(get_field('introduction_block',1040)) {
		  		while(has_sub_field('introduction_block',1040)) {
				$img_url=get_sub_field('image',1040);?>
                    <div class="introduction-block">
                     <a href="<?php echo get_sub_field('link'); ?>"><img src="<?php echo $img_url['url']; ?>" alt="<?php echo $img_url['alt']; ?>"></a>
                  <div class="person-intro"><h3><?php echo get_sub_field('name_position'); ?></h3><p><?php echo get_sub_field('goverment'); ?></p></div>
                    </div>
                    <?php }}?>
                    
                    
                    </div>
                    		<div id="about-rajuvas">
             <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;?>
                              <div class="clear-fix"></div>
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
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
            
            <div class="contentarea-section section-second row wow fadeInUp animated">
            <?php if(get_field('campus_and_projects')) {
		  		while(has_sub_field('campus_and_projects')) {
				$img_url=get_sub_field('image');?>
             <div class="rajuvas-project-block">
             <h3><?php echo get_sub_field('title'); ?></h3>
             <img src="<?php echo $img_url['url']; ?>" alt="<?php echo $img_url['alt']; ?>">
             <p><?php echo get_sub_field('text'); ?></p>
             <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('view_more'); ?></a>
             </div>
             <?php }}?>
             
           <?php if(get_field('gallery_image_block',1541)) {  $count = count( get_sub_field( 'gallery_image_block',1541 ) );?>
<div class="rajuvas-project-block">
<h3>PHOTO GALLERY</h3>
<div id="owl-slide" class="owl-carousel owl-theme">
 
		  		<?php while(has_sub_field('gallery_image_block',1541)) {

				$img_url=get_sub_field('image',1541);?>
            
<div class="items">
             <img src="<?php echo $img_url['url']; ?>" height="231" alt="<?php echo $img_url['alt']; ?>">
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