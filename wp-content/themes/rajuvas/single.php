<?php  get_header(); 
?>
<div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>
           <div id="container-section">
          <div class="main-container">
            <div class="contentarea-section section-first">
<div id="categories-sidebar">
<?php if(is_active_sidebar('news-widget-area')){ dynamic_sidebar('news-widget-area');} ?>

</div>

            <div id="introduction">
                        <div id="about-rajuvas" class="about-rajuvas">
 <?php 
 while(have_posts()): the_post(); ?>

<div class="blog-left" style="border:none">
<!--<h5 class="date"><?php the_time('M j, Y') ?></h5>-->
<div class="post-image"><?php the_post_thumbnail(); ?></div>
<div class="post-text"><?php the_content(); ?></div>
</div>

<?php endwhile; ?>

   
</div>
</div>




            <div class="clear-fix"></div>
</div>
</div>
</div>

<?php  get_footer(); ?>