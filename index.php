
<?php get_header(); ?>
<body>

<!--wrapper start-->
<div class="wrapper" id="wrapper">
    <?php 

  //Work Experience
  load_template( TEMPLATEPATH . '/page_header.php'); ?>
  
  <!--about me start-->
  <section class="aboutme" id="aboutme">
    <div class="">
      
      <div class="row">
      <div class=" col-xs-12 col-sm-12 col-md-5 col-lg-5 proPic"> <img src="img/me-back.jpg" alt="" class="img-responsive"> </div>
        <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-5 aboutCont">
        	<div class="heading clearfix">
                <h2>About me</h2>
              </div>
        
          <h3>Angelica Doe</h3>
          <h4 class="subHeading">Webdesigner &amp; Web Developer from Melbourne</h4>
          
          <div id="description">
          <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac duiQuisque sit amet fermentum elit eget tincidunt</p> 

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit Aenean ultricies mi vitae placerat eleifend leo. </p>
			</div>
          <a href="#" class="bntDownload">Download Printable Resume</a> </div>
        
      </div>
    </div>
  </section>
  <!--about me end--> 
  
  <!--technical start-->
  <section class="technical" id="technical">
    <div class="container">
      <div class="heading">
        <h2>My Expertise</h2>
        <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
      </div>
      <div class="row">
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"><span class="chart skilBg" data-percent="90"> <span class="percent"></span> </span>
            <h4>Photoshop</h4>
            <p>Vestibulum erat wisi, condimentum sed, commodo vitamet, wisid</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="80"> <span class="percent"></span> </span>
            <h4>Illustrator</h4>
            <p>Vestibulum erat wisi, condimentum sed, commodo vitamet, wisid</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="80"> <span class="percent"></span> </span>
            <h4>Flash</h4>
            <p>Vestibulum erat wisi, condimentum sed, commodo vitamet, wisid</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="75"> <span class="percent"></span> </span>
            <h4>HTML5 / CSS3</h4>
            <p>Vestibulum erat wisi, condimentum sed, commodo vitamet, wisid</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="60"> <span class="percent"></span> </span>
            <h4>jQuery</h4>
            <p>Vestibulum erat wisi, condimentum sed, commodo vitamet, wisid</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="65"> <span class="percent"></span> </span>
            <h4>PHP / MySQL</h4>
            <p>Vestibulum erat wisi, condimentum sed, commodo vitamet, wisid</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--technical end--> 
  
  <!--Work Experience-->


  <?php 

  //Work Experience
  load_template( TEMPLATEPATH . '/page_experience.php');
  
  // Education 
  load_template( TEMPLATEPATH . '/page_education.php'); 

  ?>

  
   <!--protfolio start-->
  <section class="protfolio" id="protfolio">
    <div>
      <div class="portfolioTop clearfix">
          <div class="heading">
            <h2>Portfolio</h2>
            <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
          </div>
          <div class="portfolioFilter">
            <ul>
              <li><a href="#" data-filter="*" class="current">All</a></li>
              <li><a href="#" data-filter=".branding">Branding</a></li>
              <li><a href="#" data-filter=".illustration">Illustration</a></li>
              <li><a href="#" data-filter=".wordpress">Wordpress</a></li>
              <li><a href="#" data-filter=".site-template">Site Template</a></li>
            </ul>
          </div>
      </div>
      <ul class="portfolioContainer row gallery">
        <li class="wordpress col-xs-6 col-sm-4 col-md-3 col-lg-3">
          	<div class="lightCon"> 
          		<span class="hoverBox"> 
          			<span class="smallIcon"> 
                    	<a rel="prettyPhoto[gallery1]" href="img/portfolio/big/1.jpg" title="Project Title1" class="zoom lb lb_warsaw1">
                        	<i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="#" title="Project Link" target="_blank" class="linKed">
                        	<i class="fa fa-link fa-2x"></i></i>
                        </a>
                        <a rel="prettyPhoto[gallery1]" href="img/portfolio/big/2.jpg" title="Project Title1-2" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery1]" href="img/portfolio/big/3.jpg" title="Project Title1-3" class="lb lb_warsaw1">
                        </a>
                     </span> 
                 </span> 
            	<img src="http://placehold.it/390x250&text=image1" alt=""  >
           	</div>
        </li>
        <li class="branding illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery2]" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/big/2.jpg" title="Project Title2" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a><a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image2" alt="" > </div>
        </li>
        <li class="illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery3]" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/big/3.jpg" title="Project Title3" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a><a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image3" alt="" > </div>
        </li>
        <li class="branding illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery4]" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/big/4.jpg" title="Project Title4" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a><a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image4" alt="" > </div>
        </li>
        <li class="illustration photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery5]" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/big/5.jpg" title="Project Title5" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a><a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image5" alt="" > </div>
        </li>
        <li class="branding photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery6]" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/big/6.jpg" title="Project Title6" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image6" alt="" > </div>
        </li>
        <li class="illustration photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery7]" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/big/7.jpg" title="Project Title7" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image7" alt="" > </div>
        </li>
        <li class="site-template col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery8]" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/big/8.jpg" title="Project Title8" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image8" alt="" > </div>
        </li>
      </ul>
    </div>
  </section>
  <!--protfolio end-->  
  <!--reffernces start-->
  <section class="reffernces" id="reffernces">
    <div class="container">
      <div class="heading">
        <h2>Reffernces</h2>
        <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
      </div>
      <div class="row waterfall" data-col-min-width="300">
      	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 refBox">
        	<div class="refBoxcon"><p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac duiQuisque sit amet senectus et malesuada fames.</p>
            <h3>Jonathan doe</h3>
            <h4>Project Manager, Matrix Media</h4></div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 refBox">
        	<div class="refBoxcon"><p>Nam liber tempor cum soluta nobis eleifend option  Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem.</p>
            <h3>Ana Miller</h3>
            <h4>Marketing Head</h4></div>
        </div>        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 refBox">
        	<div class="refBoxcon"><p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem.</p>
            
            <h3>Mike collins</h3>
            <h4>Project Lead</h4></div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 refBox">
        	<div class="refBoxcon"><p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem demonstraverunt lectores legere me lius quod ii legunt saepius.demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
            <h3>Don Anderson</h3>
            <h4>Creative Head, Lexi</h4></div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 refBox">
        	<div class="refBoxcon"><p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, enim ac duiQuisque sit amet senectus et malesuada fames.</p>
            <h3>Jonathan doe</h3>
            <h4>Project Manager, IMO</h4></div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 refBox">
        	<div class="refBoxcon"><p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi commodo vitae, ornare sit amet, wisi.</p>
            <h3>Greg Thomas</h3>
            <h4>Design Lead</h4></div>
        </div>
      </div>
    </div>
  </section>
  <!--reffernces end--> 
  <!--contact start-->
  <section class="contact" id="contact">
    <div class="container topCon">
      <div class="heading">
        <h2>Get In Touch</h2>
        <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
      </div>
    </div>
    
  </section>
  <section class="contactDetails">
    <div class="container"> 
      
      <!--contact info start-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h4>Contact details</h4>
        <p> <i class="fa fa-map-marker"></i> Collins Street West Victoria 8007 Australia</p>
        <p> <i class="fa fa-mobile"></i> +1800 1234 56789</p>
        <p> <i class="fa fa-envelope-o"></i> <a href="mailto:support@websitename.com">support@websitename.com</a></p>
        <p> <i class="fa fa-link"></i> <a href="www.websitename.com">www.websitename.com</a></p>
      </div>
      <!--contact info end--> 
      
      <!--contact form start-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 conForm">
        <h4>Shoot a message!</h4>
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Your email..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
      <!--contact form end--> 
      
    </div>
    <div class="row mapArea">
      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=-37.817682,144.957595&amp;spn=0.01134,0.026157&amp;t=m&amp;z=16&amp;output=embed"></iframe>
    </div>
  </section>
  
  <!--contact end--> 
  
  <!--footer start-->
  <section class="footer" id="footer">
    <div class="container">
      <ul>
        <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-rss fa-2x"></i></a></li>
      </ul>
      <span class="totop"><i class="fa fa-chevron-up"></i></span>
    </div>
  </section>
  <!--footer end--> 
  
</div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.26633.js"></script> 

<!--jquary min js--> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.gridrotator.js"></script> 

<!--for portfoli lightbox -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript" >
	$(document).ready(function(){
		$("area[rel^='prettyPhoto']").prettyPhoto();
		
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:1000, hideflash: true});
		
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waterfall.js"></script>
<!--for custom jquary--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script> 

<!--for placeholder jquary--> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.placeholder.js"></script> 

<!--for menu jquary--> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/stickUp.js"></script> 
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
  $(".totop").click(function(e){
	  e.preventDefault();
	  $(".homeLink a").trigger("click");
	  })
  $('.navbar-wrapper').stickUp({
				parts: {
				  0: 'wrapper',
				  1: 'aboutme',
				  2: 'technical',
				  3: 'exprience',
				  4: 'education',
				  5: 'protfolio',
				  6: 'reffernces',
				  7: 'contact'
				},
				itemClass: 'menuItem',
				itemHover: 'active',
				topMargin: 'auto'
			  });
});

$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).addClass( "hideClass" );
});


$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).addClass( "collapse" );
});


$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).removeClass( "in" );
});

$( ".navbar-toggle" ).click(function() {
  $( ".navbar-collapse" ).removeClass( "hideClass" );
});


});
</script> 
<!-- for header slider -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script>
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>
<!--for portfoli filter jquary--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.js" type="text/javascript"></script> 

<!--for portfoli lightbox -->
<link type="text/css" rel="stylesheet" id="theme" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.rlightbox.js"></script> 

<!--for skill chat jquary--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easypiechart.js"></script> 

<!--for Scroll Bar jquary--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/perfect-scrollbar.js"></script>
<script type="text/javascript">
  $(document).ready(function ($) {
	$('#description').perfectScrollbar({
	  wheelSpeed: 20,
	  wheelPropagation: false
	});
  });
</script>

<!--contact form js--> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>