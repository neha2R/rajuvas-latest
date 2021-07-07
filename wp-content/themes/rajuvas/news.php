<?php  get_header(); /* Template Name: News Page */
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
  $args = array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  'paged' => get_query_var('paged')
  );
  $blog = new WP_Query($args);
 while($blog->have_posts()): $blog->the_post(); ?>

<div class="blog-left">
<h1 class="blog-title"><?php the_title(); ?></h1>
<h5 class="date"><?php the_time('M j, Y') ?></h5>
<div class="post-image"><?php the_post_thumbnail(); ?></div>
<a class="blog-more" href="<?php echo the_permalink(); ?>">Read More</a>
</div>

<?php endwhile; ?>
<?php wp_pagenavi(array('query'=>$blog)); ?>
<?php wp_reset_postdata();
?>
   
</div>
</div>




            <div class="clear-fix"></div>
</div>
</div>
</div>

<?php  get_footer(); ?>