<?php get_header(); ?>
  
  <div id="banner">
            <div id="banner-inner">
             <div id="banner-left-content">
             	<div id="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php  echo bloginfo('template_url');?>/images/logo.jpg"></a>
                </div>
                  <h4 class="logo-title">Rajasthan University of <br>Veterinary and  Animal<br> Sciences</h4>
                   <input class="search" type="search" name="search">
             </div>
             <div id="banner-right-content">
             	
                <div id="banner-fade">

        <!-- start Basic Jquery Slider --> 
        <ul class="bjqs">
         <?php if(get_field('slider-section',13)) {
		  		while(has_sub_field('slider-section',13)) {
				$img_url=get_sub_field('image',13);?>
          <li><img src="<?php echo $img_url['url']; ?>"><p class="slider-strip"><?php echo get_sub_field('text'); ?></p></li>
          <?php }}?>
          
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
             
             <div id="social-media">
                <?php if ( is_active_sidebar( 'social-widget-area' ) ) : ?>
      
        	<?php dynamic_sidebar( 'social-widget-area' ); ?>
    
     				 <?php endif; ?>
             </div>
             </div>
            <div class="clear-fix"></div>
            </div>
           
           </div>
           
           
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction">
                 <div id="topbar-intro">
                	
                    <?php if(get_field('introduction_block',13)) {
		  		while(has_sub_field('introduction_block',13)) {
				$img_url=get_sub_field('image',13);?>
                    <div class="introduction-block">
                     <a href="<?php echo get_sub_field('link'); ?>"><img src="<?php echo $img_url['url']; ?>"></a>
                  <div class="person-intro"><h3><?php echo get_sub_field('name_position'); ?></h3><p><?php echo get_sub_field('goverment'); ?></p></div>
                    </div>
                    <?php }}?>
                    
                    
                    </div>
                    		<div id="about-rajuvas">
           <?php while ( have_posts() ) : the_post() ?>
                                
                                <a class="anchor-bullet" href="<?php the_permalink(); ?>" class="post_title">          <?php the_title(); ?></a>
                                
                                <?php the_content(); ?>
                                
                                
                                <?php // if(comments_open() || get_comments_number()) {
                                // comments_template();
                                // }
                                
                                endWhile; ?>
                             
                            </div>
                            
                            <div id="institutions">
                            <h1>INSTITUTIONS</h1>
                             <ul>
                             <?php if(get_field('institute_name',13)) {
		  		while(has_sub_field('institute_name',13)) {
											?>
            <li><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('name'); ?></a></li>
                             <?php }} ?>
                             
                             </ul>
                            </div>
                 
                 
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
            
            <div class="contentarea-section section-second">
            <?php if(get_field('campus_and_projects',13)) {
		  		while(has_sub_field('campus_and_projects',13)) {
				$img_url=get_sub_field('image',13);?>
             <div class="rajuvas-project-block">
             <h3><?php echo get_sub_field('title'); ?></h3>
             <img src="<?php echo $img_url['url']; ?>">
             <p><?php echo get_sub_field('text'); ?></p>
             <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('view_more'); ?></a>
             </div>
             <?php }}?>
             
           
            <div class="clear-fix"></div>
            </div>
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>
