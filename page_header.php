<?php 
/* Template Name: Header */

//$page = get_page_by_title("Header");
?>
<header> 

    <!--banner start-->

    <div class="banner row" id="banner">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd" style="height:100%">
        <!--background slide show start-->
            <div class="">
                <img src="http://placehold.it/1920x1080&text=image" alt="bannerImg">
            </div>
        <!--background slide show end-->
        </div>
        <!--header text start-->
        <div class="bannerText container">
            <h1><?php echo get_bloginfo( 'name' ); ?></h1>
            <p><?php bloginfo( 'description' ); ?></p>
            <a href="#technical" class="mbnt">What I do</a>
        </div>
    <!--header text end-->
    </div>
    <!--banner end-->
    
    
    <!--menu start-->
    <div class="menu">
        <div class="navbar-wrapper">
            <div class="container">
                <div class="navwrapper">
                     <div class="navbar navbar-inverse navbar-static-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Menu</a> </div>
                                <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav nav-justified">
                                    <li class="first menuItem homeLink active"><a href="#wrapper">Home</a></li>
                                    <li class="menuItem"><a href="#aboutme">About</a></li>
                                    <li class="menuItem"><a href="#technical">Skills</a></li>
                                    <li class="menuItem"><a href="#exprience">Experience</a></li>
                                    <li class="menuItem"><a href="#education">Education</a></li>
                                    <li class="menuItem"><a href="#protfolio">Portfolio</a></li>
                                    <li class="menuItem"><a href="#reffernces">Reffernces</a></li>
                                    <li class="menuItem"><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- End Navbar --> 
            </div>
        </div>
    </div>
    <!--menu end--> 
    
  </header>