<?php /*Template Name: Faculty Search*/ 
get_header(); ?>
<div id="page-title">
             <div id="page-title-inner"><h2><?php echo "Search Result For : ".$_GET['discipline'] ?></h2></div>
           </div>
           <div id="container-section">
          <div class="main-container">
            <div class="contentarea-section section-first">
            <div id="introduction">
                        <div id="about-rajuvas" class="about-rajuvas-faculty">
<?php
$search_term=$_GET['discipline'];
$college_term=$_GET['college'];

if($college_term=="All")
{
  $meta_query = array(
    array(
            'key'     => 'descipiline',
            'value'   => $search_term,
            'compare' => '='
        )
        );
}
else 
{
 $meta_query =  array(
       'relation' => 'AND',
        array(
            'key'     => 'descipiline',
            'value'   => $search_term,
            'compare' => '='
        ),
        array(
            'key'     => 'college',
            'value'   => $college_term,
            'compare' => '='
        )
    );
}
//print_r($meta_query); 
$event = array(
'post_type'=>array('faculty'),
'post_status'=>'publish',
'posts_per_page'=>4,
'paged' => get_query_var('paged'),
'order'=>'ASC',
'orderby'=>'post_date',
'meta_query' => $meta_query
);

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
                      if($search_term==$v)
                      {
                         echo '<option value="' . $k . '" selected>' . $v . '</option>';
                      }
                      else
                      {
                       echo '<option value="' . $k . '" >' . $v . '</option>';
                      }
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
        if($college_term==$v)
            {
          echo '<option value="' . $k . '" selected>' . $v . '</option>';
            }
             else
            {
                 echo '<option value="' . $k . '" >' . $v . '</option>';
            }

      }
  echo '</select>';
}

?>

<input type="submit" value="Search">
             </form>
                            
                            </div>

<?php $search_list = new WP_Query($event); 
  while($search_list->have_posts()): $search_list->the_post(); $id=get_the_ID(); ?> 
        
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                           <div id="faculty-profile">
                            <div id="faculty-information">
                             <table id="faculty_info_tab">
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
                           <div id="faculty-image"><?php the_post_thumbnail(); ?> </div>
                           <div class="clear-fix"></div>   
                           </div> 
                           
                            <?php  endwhile; ?> 
    <?php wp_pagenavi( array( 'query' => $search_list) ); ?>
</div>	
</div>
<?php get_template_part('sidebar'); ?>
            <div class="clear-fix"></div>
</div>
</div>
</div>

<?php  get_footer(); ?>