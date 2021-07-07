<?php 
/*
Template Name: Faculty page
*/
get_header(); ?>
				<div id="page-title">
             <div id="page-title-inner"><h2><?php echo get_the_title(); ?></h2></div>
           </div>

           <div id="container-section">
          <div class="main-container">
          	<div class="contentarea-section section-first">
            
            	<div id="introduction">
                    		<div id="about-rajuvas" class="about-rajuvas-faculty">
           						<?php 
								$paged = get_query_var('paged');
					$args = array(
					'post_type' => 'faculty',
					'posts_per_page' =>4,
					'order' => 'ASC',
					'paged' => $paged
					);
					 $appartment_postss = new WP_Query($args);
					?>
			
		
                               
       
        					<div id="faculty-search">
                            <form action="/faculty-search-result/" method="GET">
          			<?php $field_key = "field_5507b8696e18f";
$field = get_field_object($field_key);

if( $field )
{
       echo '<select name="discipline">';
               foreach( $field['choices'] as $k => $v )
               {
                       echo '<option value="' . $k . '">' . $v . '</option>';
               }
       echo '</select>';
}

$college_key = "field_55486a5249070";
$college_obj = get_field_object($college_key);

if($college_obj)
{
	echo '<select name="college" class="college_select">';
			foreach($college_obj['choices'] as $k => $v )
			{
					echo '<option value="' . $k . '">' . $v . '</option>';

			}
	echo '</select>';
}

?>

<input type="submit" value="Search">
             </form>
                              <!--<select class="serch-descipline" name="" form="">
                              <option value="" selected>Search By Descipline</option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                            </select>-->
                            <!-- <a class="show-all" href="#">Show All</a>-->
                            </div>
                            <?php while($appartment_postss->have_posts()): $appartment_postss->the_post();?> 
        
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                           <div class="faculty-profile">
                            <div class="faculty-information">
                             <table class="faculty_info_tab">
                             <tr>
                             <td class="static-field">Faculty Name</td>
                             <td><?php echo get_field('faculty_name');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Designation</td>
                             <td><?php echo get_field('designation');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Place of Posting</td>
                             <td><?php echo get_field('place_of_posting');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Degrees</td>
                             <td><?php echo get_field('degrees');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Email Id</td>
                             <td><?php echo get_field('email_id');?></td>
                             </tr>
                             <tr>
                             <td class="static-field">Telephone No. </td>
                             <td><?php echo get_field('telephone_no.');?></td>
                             </tr>
                             </table>	
                            </div>
                           <div class="faculty-image"><?php the_post_thumbnail(); ?> </div>
                           <div class="clear-fix"></div>   
                           </div> 
                           
                            <?php  endwhile; ?> 
                               <?php wp_pagenavi(array('query' => $appartment_postss));?>
      			                      
                            </div>
                            
                </div>
                
                	<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
            	</div>
         
          </div>
          </div>
  
  
<?php  get_footer(); ?>