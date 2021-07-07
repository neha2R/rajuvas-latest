<?php /* Template Name: Main Page */


get_header(); ?>


<script language="javascript" type="text/javascript">
        var seconds = new Date().getSeconds();
        if (seconds >= 0 && seconds <= 5) {
            window.open('http://14.139.244.179/vp/wp/Election-PopUP.jpg', '_blank', 'height=515,width=700,left50,top=50,toolbar=0,directories=no,status=no,menubar=no,resizable=no,scrollbars=no,menubar=no,channelmode=no,addressbar=no');
        }
</script>

<div id="page-title">
    <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
</div>
           
<div id="container-section">
    <div class="main-container">
        <div class="contentarea-section section-first">
    
            <div id="introduction">
                 
                <div id="about-rajuvas" class="main-page-rajuvas">
                    <div id="main-page-image"><?php the_post_thumbnail(); ?></div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;?>
                    <div class="clear-fix"></div>
                            
                    <?php if(get_field('university_block')){
                        while(has_sub_field('university_block')) { ?>
                        <div class="accordion-container"> 
                            <h2 class="accordion-header"><?php echo get_sub_field('title'); ?></h2> 
                            <div class="accordion-content">  
                                <?php echo get_sub_field('content'); ?>
                            </div>
                        </div>
                    <?php }} ?> 
                    
                    <?php if(get_field('extensions_tab')){
                    while(has_sub_field('extensions_tab')) {
                    ?>
                    <div class="accordion-container"> 
                        <h2 class="accordion-header"><?php echo get_sub_field('title'); ?></h2> 
                        <div class="accordion-content">                                 
                            <?php echo get_sub_field('content'); ?>
                        </div>     
                    </div>
                    <?php }}?>
                </div>
            </div>

            <?php get_template_part('sidebar'); ?>
        
            <div class="clear-fix"></div>
        </div>
                             
    </div>
</div>
  
  
<?php  get_footer(); ?>