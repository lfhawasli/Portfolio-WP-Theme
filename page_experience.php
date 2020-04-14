<?php 
/* Template Name: Work Experience */

$page = get_page_by_title("Work Experience");
?>
<!--exprience start-->
<section class="exprience" id="exprience">
    <div class="container">
	    <div class="heading">
	    	<h2>Work Experience</h2>
	        <p><?php echo $page->post_content; ?></p>
	    </div>

      	<?php 

      	$args = array(
		  	'numberposts' => 20,
	  		'post_type'   => 'experience',
		  	'meta_key'			=> '_start_year',
			'orderby'			=> 'meta_value',
			'order'				=> 'DESC'
		);
		 
		$experience = get_posts( $args );

        foreach ($experience as $exp) : 

            $exp_info = get_post_meta( $exp->ID, '', true);
            $startDate = date('F, Y', mktime(0, 0, 0, $exp_info["_start_month"][0], 1, $exp_info["_start_year"][0]));
            $endDate   = date('F, Y', mktime(0, 0, 0, $exp_info["_end_month"][0], 1, $exp_info["_end_year"][0])); 

		    ?>
	      	<div class="row workDetails">
	        	<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
	          		<div class="workYear">
	          			<span class="prevY"><?php echo $endDate; ?></span>
	            		<span class="afterY"><?php echo $startDate; ?></span>
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
	          	<div class="arrowpart"></div>
	          	<div class="exCon" style="color:black;">
		            <h4><?php  echo $exp->post_title; ?></h4>
		            <h5><?php echo $exp_info["job_title"][0]; ?></h5>
		            <p><?php echo $exp->post_content; ?></p>
	          	</div>
	        	</div>
	      	</div>
      	<?php endforeach; ?>

      <!-- keep as sample -->
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">Mar,2011</span>
            <span class="afterY">January 2011</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Matrix Media</h4>
            <h5>Visual / UI Designer</h5>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
          </div>
        </div>
      </div>
    </div>
</section>
  <!--exprience end--> 