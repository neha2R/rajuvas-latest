<?php get_header(); ?>
<div id="page-title">
             <div id="page-title-inner"><h2>Search Result for : <?php echo $_GET['s']; ?></h2></div>
           </div>
           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            <div id="introduction">
                    		<div id="about-rajuvas" class="about-rajuvas-faculty searching-result">
<?php
$search_term=$_GET['s'];
$event = array(
'post_type'=>array('page','post','faculty'),
'post_status'=>'publish',
'posts_per_page'=>10,
'order'=>'ASC',
'orderby'=>'post_date',
's'=>$search_term
);?>
<?php $search_list = new WP_Query($event);
   while($search_list->have_posts()): $search_list->the_post(); $id=get_the_ID(); ?>
<div class="sresult-content">  
<a class="sresult_title" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
   <?php the_excerpt();?></div>
    <div id="faculty-information">
   <table id="faculty_info_tab">
                             <?php if(get_field('faculty-information')) {
		  		while(has_sub_field('faculty-information')) {
				?>
                             <tr>
                             <td class="static-field">Faculty Name</td>
                             <td><?php echo get_sub_field('faculty_name');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Designation</td>
                             <td><?php echo get_sub_field('designation');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Place of Posting</td>
                             <td><?php echo get_sub_field('place_of_posting');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Degrees</td>
                             <td><?php echo get_sub_field('degrees');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Email Id</td>
                             <td><?php echo get_sub_field('email_id');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Telephone No. </td>
                             <td><?php echo get_sub_field('telephone_no.');?></td>
                             </tr>
                             <?php }}?>
                             </table>
                             </div>
                             
   <?php endwhile; ?>
   
</div>
</div>
<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
</div>
</div>
</div>

<?php  get_footer(); ?>