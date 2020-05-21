<?php 
/* Template Name: About Me */

$page = get_page_by_title("About Me");

$post_thumbnail= get_the_post_thumbnail_url( $page->ID );

$content = apply_filters('the_content',$page->post_content);
?>
<!--about me start-->
<section class="aboutme" id="aboutme">
    <div class="">
      
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-5 col-lg-5 proPic"> <img src="<?php echo $post_thumbnail; ?>" alt="" class="img-responsive"> </div> 
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-5 aboutCont">
                <div class="heading clearfix">
                    <h2>About me</h2>
                </div>

                <h3><?php echo get_bloginfo( 'name' ); ?></h3>
                <h4 class="subHeading">Webdesigner &amp; Web Developer from Melbourne</h4>
              
                <div id="description">
                    <?php echo $content; ?>
                </div>
                <a href="#" class="bntDownload">Download Printable Resume</a>
            </div>
        </div>
    </div>
</section>
<!--about me end--> 