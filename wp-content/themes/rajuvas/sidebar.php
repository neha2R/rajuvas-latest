<div id="updates">
     <h4>NEWS & UPDATES <a style="margin: 0 6px;" class="blog-more" href="http://rajuvas.org/?page_id=2332">View All</a></h4>
      
      <div id="tabs">
        <ul class="alltabs">
          <li><a class="select-tab" href="#tabs-1" title="RAJUVAS">UNIVERSITY</a></li>
          <li><a class="select-tab" href="#tabs-2" title="">ADMISSION</a></li>
          <li><a class="select-tab" href="#tabs-3" title="">TENDERS</a></li>
    	    <li><a class="select-tab" href="#tabs-4" title="">WORK ORDER</a></li>
        </ul>

        <div id="tabs_container">
          <div id="tabs-1" class="tab-content">
                <?php $appartment_lists = array(
                  
                   'post_status'=>'publish',
                   'posts_per_page' => 20,
                    'category_name'=>'UNIVERSITY-NEWS',
    		            'order'    => 'DESC'
                );
                $appartment_postss = new WP_Query($appartment_lists);
                //  print_r($appartment_postss);
                ?>
                  <div class="scroll-text notification-blocks-child" id="notification1">  
                    <ol>
                      <?php
                      while($appartment_postss->have_posts()): $appartment_postss->the_post();?> 
                        <li><a href="<?php echo get_the_permalink() ?>"><?php echo the_title();?></a></li>
                      <?php  endwhile;?> 
                    </ol>
                 </div>
                 <?php wp_reset_query();?>
          </div>

          <div id="tabs-2" class="tab-content">
                    <?php $appartment_lists = array(
                       'post_status'=>'publish',
                       'posts_per_page' => 20,
                        'category_name'=>'ACADEMICS',
        	              'order'    => 'DESC'
                    );
                    $appartment_postss = new WP_Query($appartment_lists);
                      //  print_r($appartment_postss);
                      ?>
             <div class="scroll-text notification-blocks-child" id="notification2">   
                    <ol>
                      <?php
                     while($appartment_postss->have_posts()): $appartment_postss->the_post();?> 
                      
                      <li><a href="<?php echo get_the_permalink() ?>"><?php echo the_title();?></a></li>
                      <?php endwhile;?> 
                       
                    </ol>
              </div>
              
                 <?php wp_reset_query();?>
          </div>

      <div id="tabs-3" class="tab-content">
            <?php $appartment_lists = array(
               'post_status'=>'publish',
               'posts_per_page' => 20,
                'category_name'=>'TENDERS',
                'order'    => 'DESC'
            );
           $appartment_postss = new WP_Query($appartment_lists);
            //  print_r($appartment_postss);
                        ?>
            <div class="scroll-text notification-blocks-child" id="notification3">   
                <ol>
                    <?php
                   while($appartment_postss->have_posts()): $appartment_postss->the_post();?> 
                    
                    <li><a href="<?php echo get_the_permalink() ?>"><?php echo the_title();?></a></li>
                    <?php  endwhile;?> 
                </ol>
            </div>
            
                 <?php wp_reset_query();?>
      </div>
 
      <div id="tabs-4" class="tab-content">
            <?php $appartment_lists = array(
               'post_status'=>'publish',
               'posts_per_page' => 20,
                'category_name'=>'workorder',
                'order'    => 'DESC'
           );
            $appartment_postss = new WP_Query($appartment_lists);
            //  print_r($appartment_postss);
            ?>
            <div class="scroll-text notification-blocks-child" id="notification4">    
                <ol>
                  <?php
                 while($appartment_postss->have_posts()): $appartment_postss->the_post();?> 
                  
                  <li><a href="<?php echo get_the_permalink() ?>"><?php echo the_title();?></a></li>
                  <?php  endwhile;?> 
                </ol>
            </div>
            
                 <?php wp_reset_query();?>
      </div>
 

    </div><!--End tabs container-->
    <div class="clear-fix"></div>
  </div><!--End tabs-->
                      
                 <div id="update-bottom" class="row wow fadeInUp animated">
                  <div class="virtual-tour"><a class="tour-tag" href="http://14.139.244.179/vp/rajuvashtml/video.html"><h6>VIRTUAL TOUR</h6></a></div>
                  <div class="virtual-tour faculty"><a class="tour-tag lecturar"  href="/university-teachers/"><h6>FACULTY</h6></a></div>
	    <div class="virtual-tour faculty"><a class="tour-tag rti" href="/rti/"><h6>RTI</h6></a></div>
            <div class="virtual-tour faculty"><a class="tour-tag radio" href="http://14.139.244.179/vp/rajuvashtml/audio.html"><h6>धीणे री बात्यां</h6></a></div>

<div class="virtual-tour"><img src="http://rajuvas.org/wp-content/uploads/2019/09/Untitled-21.png" alt="Help Line No. 1800-180-6224 (Toll Free)"   width="120" height="40">
<h5 style="font-size: 12px;
	color: #6e5e43;
	font-family: Lora, serif;
	text-align: center;
	display: block;
	font-weight: 500;
	position: relative;
	top: 20px;"
>Help Line</h5></a></div>

<div class="virtual-tour"><a href="http://14.139.244.179/vp/wp/pdf/2020/RAJUVAS-CALANDER-2020.pdf"><img src="http://rajuvas.org/wp-content/uploads/2019/02/Calendar-RAJUVAS.png" alt="Calendar" width="50" height="40" style="padding-left: 25px;">
<h5 style="font-size: 12px;
	color: #6e5e43;
	font-family: Lora, serif;
	text-align: center;
	display: block;
	font-weight: 500;
	position: relative;
	top: 20px;"
>Calendar</h5></a></div>

<div class="virtual-tour"><a href="http://14.139.244.179/vp/wp/pdf/e-Bulletin/RAJUVAS-E-BULETIN-OCTOBER-2020.pdf"><img src="http://rajuvas.org/wp-content/uploads/2020/03/e-Bulletin.png" alt="Calendar" width="50" height="40" style="padding-left: 25px;">
<h5 style="font-size: 12px;
	color: #6e5e43;
	font-family: Lora, serif;
	text-align: center;
	display: block;
	font-weight: 500;
	position: relative;
	top: 20px;"
>E-BULLETIN</h5></a></div>
 
<div class="virtual-tour"><a href="https://play.google.com/store/apps/details?id=com.mrajuvasnew"><img src="http://rajuvas.org/wp-content/uploads/2020/05/m-rajuvas.png" alt="M-RAJUVAS" width="50" height="40" style="padding-left: 25px;">
<h5 style="font-size: 12px;
	color: #6e5e43;
	font-family: Lora, serif;
	text-align: center;
	display: block;
	font-weight: 500;
	position: relative;
	top: 20px;"
>M-RAJUVAS</h5></a></div>
 	   
</div>

                    </div>