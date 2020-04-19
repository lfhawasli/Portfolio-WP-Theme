<?php 
/* Template Name: Education */

$page = get_page_by_title("Education");
?>
<!--education start-->
<section class="education" id="education">
    <div class="container">
	    <div class="heading">
	    	<h2>Education</h2>
	        <p><?php echo $page->post_content; ?></p>
	    </div>

      	<?php 

      	$args = array(
		  	'numberposts' => 20,
	  		'post_type'   => 'education',
		  	'meta_key'			=> 'received_year',
			'orderby'			=> 'meta_value',
			'order'				=> 'DESC'
		);
		 
		$education = get_posts( $args );

        foreach ($education as $ed) : 

            $education_info = get_post_meta( $ed->ID, '', true);
            $receivedDate = date('F, Y', mktime(0, 0, 0, $education_info["received_month"][0], 1, $education_info["received_year"][0]));

		    ?>
	      	<div class="row workDetails">
	        	<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
	          		<div class="workYear">
	          			<span class="prevY"><?php echo $receivedDate; ?></span>
		            </div>
		        </div>
		        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
		          	<div class="arrowpart"></div>
		          	<div class="exCon" style="color:black;">
			            <h4><?php  echo $ed->post_title; ?></h4>
			            <h5><?php echo $education_info["institution"][0]; ?></h5>
			            <div class='p'><?php echo $ed->post_content; ?></div>
		          	</div>
	        	</div>
	      	</div>
      	<?php endforeach; ?>
    </div>
</section>
<!--education end--> 