<?php  get_header(); 
?>
<div id="page-title">
             <div id="page-title-inner"><h2><?php single_cat_title( '', true ); ?></h2></div>
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

<div class="blog-left">
<h1><?php echo the_title(); ?></h1>
<h5 class="date"><?php the_time('M j, Y') ?></h5>
<div class="post-image"><?php the_post_thumbnail(); ?></div>

<a class="blog-more" href="<?php echo the_permalink(); ?>">Read More</a>
</div>

<?php endwhile; ?>
<?php wp_pagenavi(); ?>
<?php wp_reset_postdata();
?>

   
</div>
</div>




            <div class="clear-fix"></div>
</div>
</div>
</div>

<?php  get_footer(); ?>