<?php /* Template Name: Screen Page */

get_header(); ?>

<div id="page-title">
    <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
</div>
           
<div id="container-section">
    <div class="main-container">
        <div class="contentarea-section section-first">
  			<div class="screen-reader" id="introduction">
  				<div class="screen-inner-heading">				
  					<?php echo get_field('content');?>
  				</div>
  				<div class="screen-table table-responsive">
  					<h3>Various Screen Readers to choose from</h3>
  					<table class="table">
					    <thead>
					      <tr>
					        <th>Screen Reader</th>
					        <th>Website</th>
					        <th>Free/Commercial</th>
					      </tr>
					    </thead>

					    <tbody>
					    	<?php if(get_field('screen_table')) {
		  						while(has_sub_field('screen_table')) {
							;?>
					      <tr>
					        <td><?php echo get_sub_field('name'); ?></td>
					        <td><a href="<?php echo get_sub_field('link_url'); ?>"><?php echo get_sub_field('links'); ?></a></td>
					        <td><?php echo get_sub_field('commercial/free'); ?></td>
					      </tr>
					      <?php }}?>
					    </tbody>
					</table>
  				</div>
  			</div>

            <?php get_template_part('sidebar'); ?>
        
            <div class="clear-fix"></div>
        </div>
                             
    </div>
</div>


<?php  get_footer(); ?>