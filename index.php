<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page' />
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
         <title>Jekas  - Software, Studio and Corporate Responsive Template</title>    
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Jekas is a Software, Studio and Corporate Responsive Template">
        <meta name="author" content="iwthemes.com">  

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Theme CSS -->
        <link type="text/css" media="screen" rel="stylesheet" href="css/style.css"/>
        <!-- Responsive CSS -->
        <link type="text/css" media="screen" rel="stylesheet" href="css/theme-responsive.css"/>
        <!-- Skins Theme -->
        <link type="text/css" media="screen" rel="stylesheet" href="#" class="skin_color"/>

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">   

        <!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="js/responsive/html5shiv.js"></script>
            <script src="js/responsive/respond.js"></script>
        <![endif]-->
    </head>
    <body> 
       
        <!-- layout-->
        <div id="layout" class="layout-wide">
            <!-- Header Section-->
            <header class="slide">
               <!-- nav_logo Section-->
                <cms:embed "menu.php" />
                <!-- End nav_logo Section-->
                
                <!-- Slide Section-->    
                <div class="tp-banner-container">
                    <div class="tp-banner" >
                        <ul>
                            <!-- SLIDE  01-->
                            <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                    data-x="0"
                                    data-y="0"
                                    data-speed="1000"
                                    data-start="1100"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="1500"
                                    data-endeasing="Power4.easeIn"
                                    data-autoplay="true"
                                    data-autoplayonlyfirsttime="false"
                                    data-nextslideatend="true"
                                    data-forceCover="1"
                                    data-dottedoverlay="twoxtwo"
                                    data-aspectratio="16:9"
                                    data-forcerewind="on"
                                    style="z-index: 2">

                                    <video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"
                                    poster='img/slide/slides/video-bg.png' data-setup="{}">
                                    <source src='img/video/video-slide.webm' type='video/webm' />
                                    </video>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption large_bold_white tp-fade fadeout tp-resizeme"
                                    data-x="30"
                                    data-y="120" data-voffset="0"
                                    data-speed="500"
                                    data-start="1000"
                                    data-easing="Power4.easeOut"
                                    data-splitin="chars"
                                    data-splitout="chars"
                                    data-elementdelay="0.05"
                                    data-endelementdelay="0.05"
                                    data-endspeed="300"
                                    style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Design and Development
                                </div>
                                <!-- LAYER NR. 2 -->

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium_light_white tp-fade fadeout tp-resizeme"
                                    data-x="30"
                                    data-y="195" data-voffset="120"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="500"
                                    data-start="1800"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="words"
                                    data-splitout="words"
                                    data-elementdelay="0.12"
                                    data-endelementdelay="0.12"
                                    data-endspeed="300"
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Ipad And Android Devices
                                </div>
                                <!-- LAYER NR. 3 -->
                            </li>
                             <!-- END SLIDE  01-->

                            <!-- SLIDE  02-->
                            <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                                <!-- MAIN IMAGE -->
                                <img src="img/slide/slides/1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption large_bold_white large_text lft tp-resizeme"
                                    data-x="right"
                                    data-y="120" data-voffset="0"
                                    data-speed="500"
                                    data-start="1000"
                                    data-easing="Power4.easeOut"
                                    data-splitin="chars"
                                    data-splitout="chars"
                                    data-elementdelay="0.05"
                                    data-endelementdelay="0.05"
                                    data-endspeed="300"
                                    style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Font Awesome Icons
                                </div>
                                <!-- LAYER NR. 1 -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption medium_light_white large_text lft tp-resizeme"
                                    data-x="right"
                                    data-y="195" data-voffset="120"
                                    data-speed="500"
                                    data-start="1800"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="words"
                                    data-splitout="words"
                                    data-elementdelay="0.12"
                                    data-endelementdelay="0.12"
                                    data-endspeed="300"
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Our Most Powerfull Features Ever
                                </div>
                                <!-- LAYER NR. 2 -->

                            </li>
                            <!-- END SLIDE  02-->

                            <!-- SLIDE  03-->
                            <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000"  data-saveperformance="off" >
                                <!-- MAIN IMAGE -->
                                <img src="img/slide/slides/2.jpg"  alt="power-to-creators-slider" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption large_text lft tp-resizeme"
                                    data-x="center" data-hoffset="0"
                                    data-y="center" data-voffset="-100"
                                    data-speed="500"
                                    data-start="500"
                                    data-easing="Power2.easeIn"
                                    data-splitin="lines"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 2; max-width: auto; max-height: auto; white-space: normal;">YOU RELAX, WE CARE FOR YOUR INFORMATION!
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption small_text lft tp-resizeme"
                                    data-x="center" data-hoffset="0"
                                    data-y="center" data-voffset="-30"
                                    data-speed="300"
                                    data-start="1100"
                                    data-easing="Power2.easeIn"
                                    data-splitin="lines"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 3; font-size:16px; max-width: auto; max-height: auto; white-space: normal;">WE CARE VERY WELL YOUR INFORMATION, OUR PRIORITY IS TO ENSURE THE SAFETY OF YOUR DATA!
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption style-caption lfb tp-resizeme"
                                    data-x="center"
                                    data-y="center" data-voffset="30"
                                    data-speed="300"
                                    data-start="1600"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300">
                                    <a href="#" class="button">
                                        <span><i class="fa fa-android"></i></span>Android App
                                    </a>
                                </div>
                            </li>
                            <!-- END SLIDE  03-->
                        </ul>
                    </div>
                </div>
                <!-- End Slide Section-->
            </header>
            <!-- End Header Section-->
                
            <!-- Info title-->
            <div class="row info_title wow fadeInUp">
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>
                <div class="info_vertical animated">
                    <h1>Jekas is <span>incredibly beautiful</span> and fully responsive.</h1>
                    <p class="">The fastest way to grow your business with the leader in Technology.</p>
                </div>
                <div class="vertical_line"></div>

                <i class="fa fa-cogs right"></i>
            </div>
            <!-- End Info title-->

            <!-- End content info - Portfolio Carousel Section-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="info_resalt borders">
                    <div class="container wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Carousel Gallery-->        
                                <ul class="owl-carousel carousel-portfolio" id="carousel-portfolio">
                                    <li>
                                        <div class="hover">
                                            <img src="img/gallery/1.jpg" alt=""/>                               
                                            <a href="img/gallery/1.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                                        </div>                                   
                                        <div class="info">
                                            Responsive Design
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-desktop"></i> 
                                        </div>                                   
                                    </li>   
                                                
                                    <li>
                                        <div class="hover">
                                            <img src="img/gallery/2.jpg" alt=""/>                               
                                            <a href="img/gallery/2.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                                        </div>                                   
                                        <div class="info">
                                            Vinilo - HTML Template
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-desktop"></i> 
                                        </div>                                   
                                    </li>
                                    
                                    <li>
                                        <div class="hover">
                                            <img src="img/gallery/3.jpg" alt=""/>                               
                                            <a href="img/gallery/3.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                                        </div>                                   
                                        <div class="info">
                                            Mega Host - Responsive template
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-desktop"></i> 
                                        </div>                                   
                                    </li>  
                                      
                                    <li>
                                        <div class="hover">
                                            <img src="img/gallery/4.jpg" alt=""/>                               
                                            <a href="img/gallery/4.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                                        </div>                                   
                                        <div class="info">
                                            My Cv - Responsive Resume / CV
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-desktop"></i> 
                                        </div>                                   
                                    </li>
                                          
                                    <li>
                                        <div class="hover">
                                            <img src="img/gallery/5.jpg" alt=""/>                               
                                            <a href="img/gallery/5.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                                        </div>                                   
                                        <div class="info">
                                            Political - Landing Page
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-desktop"></i> 
                                        </div>                                   
                                    </li>

                                    <li>
                                        <div class="hover">
                                            <img src="img/gallery/6.jpg" alt=""/>                               
                                            <a href="img/gallery/6.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                                        </div>                                   
                                        <div class="info">
                                            Classic Restaurant - Css3/Html5
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-desktop"></i> 
                                        </div>                                   
                                    </li>
                                </ul>   
                                <!--End Carousel Gallery-->  
                            </div>                    
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End content info - Portfolio Carousel Section--> 

            <!-- Info title-->
            <div class="row info_title wow fadeInUp">
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>
                <div class="info_vertical animated">
                    <h1>A fact worth a thousand <span>words</span></h1>
                    <p>“We bring a personal and effective approach to every project we work on, which is why our clients love us and why they keep coming back.”</p>
                </div>
                <div class="vertical_line"></div>

                <i class="fa fa-coffee left"></i>
            </div>
            <!-- End Info title-->

            <!-- End content info - Result Section-->
            <section class="content_info">
                <!-- Info resalt-->
                <div class="info_resalt borders">
                    <div class="container">
                        <div class="row"> 
                            <!-- Left Content -->     
                            <div class="col-md-8 wow fadeInLeft">
                                <!-- Resul Zone-->
                                <div class="row results">
                                    <div class="col-md-3">
                                        <i class="fa fa-bomb"></i>
                                        <h2>1,000,123 <span>+</span></h2>
                                        <h5>HOURS WORKED SINCE 2003</h5>                                
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit"></i>
                                        <h2>6,233,954 <span>+</span></h2>
                                        <h5>LINES OF <br>CODEC</h5>
                                    </div>
                                    <div class="col-md-2">
                                         <i class="fa fa-group"></i>
                                        <h2>780 <span>+</span></h2>
                                        <h5>CLIENTS SERVED</h5>
                                    </div>
                                    <div class="col-md-2">                                    
                                        <i class="fa fa-coffee"></i>
                                        <h2>520 <span>=</span></h2>
                                        <h5>PROJECTS COMPLETED</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-briefcase"></i>
                                        <h2>18</h2>
                                        <h5>YEARS OF EXPERIENCE</h5>
                                    </div>
                                    <span class="arrow_results"></span>
                                </div>   
                                <!-- End Resul Zone-->  
                            </div>
                            <!-- End Left Content -->

                            <!-- Image animation - Right Content -->
                            <div class="col-md-4 wow fadeInRight">
                                <img src="img/services/1.png" alt="" class="img-responsive">
                            </div>
                            <!-- End Image animation - Right Content-->
                        </div>
                    </div>
                </div>
                <!-- End Info resalt-->
            </section>   
            <!-- End content info - Result Section--> 

            <!-- Info title-->
            <div class="row info_title wow fadeInUp">
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>
                <div class="info_vertical animated">
                    <h1>Our <span>Great</span> Process</h1>
                    <p>“Sollemnes wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip consequat.”</p>
                </div>
                <div class="vertical_line"></div>

                <i class="fa fa-tablet right"></i>
            </div>
            <!-- End Info title-->

            <!-- End content info - Services Section -->
            <section class="content_info">
                <!-- Services-->
                <section class="info_resalt borders">
                    <div class="container wow fadeInUp">
                        <div class="row text-center">
                            <div class="service-process">
                                <!-- Step 1 -->                        
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="thumbnail">
                                        <div class="caption-head">
                                            <em class="caption-icon fa fa-graduation-cap icon-big"></em>                            
                                            <h2 class="caption-title">Imagine</h2>
                                        </div>
                                    </div>
                                </div>    
                                <!-- End Step 1 -->                      

                                <!-- Step 2 -->                        
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="thumbnail">
                                        <div class="caption-head">
                                            <em class="caption-icon fa fa-edit icon-big"></em>
                                            <h2 class="caption-title">Strategy</h2>
                                        </div>
                                    </div>
                                </div>   
                                <!-- End Step 2 -->                       

                                <!-- Step 3 -->
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="thumbnail">
                                      <div class="caption-head">
                                        <em class="caption-icon fa fa-cog icon-big"></em>
                                          <h2 class="caption-title">Build</h2>
                                      </div>
                                    </div>
                                </div>
                                <!-- End Step 3 -->  

                                <!-- Step 4 -->
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="thumbnail">
                                      <div class="caption-head">
                                        <em class="caption-icon fa fa-plane icon-big"></em>
                                          <h2 class="caption-title">Launch</h2>
                                      </div>                           
                                    </div>
                                </div>
                                <!-- End Step 4 --> 
                            </div> 

                            <div class="col-md-12 single_services">
                                <p class="lead">We limit our concurrent projects to ensure your company gets the most care and attention possible.
                                <a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div> 
                </section>  
                <!-- End Services--> 
            </section>   
            <!-- End content info - Services Section --> 

            <!-- Info title-->
            <div class="row info_title wow fadeInUp">
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>
                <div class="info_vertical animated">
                    <h1>Testimonials our <span>clients</span></h1>
                    <p>“Sollemnes wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip consequat.”</p>
                </div>
                <div class="vertical_line"></div>

                <i class="fa fa-comment left"></i>
            </div>
            <!-- End Info title-->

            <!-- End content info - Testimonials Section-->
            <section class="content_info">
                <!-- testimonials-->
                <section class="info_resalt border_top">  
                    <!-- testimonials Carousel-->            
                    <ul class="owl-carousel carousel-testimonials wow fadeInUp" id="carousel-testimonials">
                        <!-- Item testimonial-->
                        <li>
                            <div class="head-testimonials">
                                <div class="image-testimonials">
                                    <img src="img/commnets/1.jpg" alt="">                        
                                </div>                       
                            </div>
                            <div class="name">
                                <h3>Jeny Martinez</h3>
                            </div>                    
                            <div class="job">
                                <h3>Social Media</h3>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                        </li>
                        <!-- End Item testimonial-->

                        <!-- Item testimonial-->
                        <li>
                            <div class="head-testimonials">
                                <div class="image-testimonials">
                                    <img src="img/commnets/2.jpg" alt="">                        
                                </div>                       
                            </div>
                            <div class="name">
                                <h3>Mager retry</h3>
                             </div>                    
                            <div class="job">
                                <h3>Development</h3>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                        </li>
                        <!-- End Item testimonial-->

                        <!-- Item testimonial-->
                        <li>
                            <div class="head-testimonials">
                                <div class="image-testimonials">
                                    <img src="img/commnets/3.jpg" alt="">                        
                                </div>                       
                            </div>
                            <div class="name">
                                <h3>Jertye Falcao</h3>
                            </div>                    
                            <div class="job">
                                <h3>Web designer</h3>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                        </li>
                        <!-- End Item testimonial-->
                    </ul> 
                    <!-- End testimonials Carousel-->
                </section>  
                <!-- End testimonials--> 
            </section>   
            <!-- End content info - Testimonials Section--> 
          
            <!-- footer-->
            <cms:embed "footer.php" />
            <!-- End footer-->
        </div>
        <!-- End layout-->
   
        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <!--Nav-->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/superfish.js"></script> 
        <script type="text/javascript" src="js/nav/hoverIntent.js"></script>  
        <script type="text/javascript" src="js/nav/jquery.sticky.js"></script>                                               
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
        <!--Slide Revolution-->
        <script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js" ></script>      
        <script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>  
        <!--owl-carousel-->
        <script type="text/javascript" src="js/carousel/owl.carousel.js"></script>    
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>  
        <!--Gallery Grid--> 
        <script type="text/javascript" src="js/gallery/modernizr.custom.26633.js"></script>
        <script type="text/javascript" src="js/gallery/jquery.gridrotator.js"></script>     
        <!--Minislider Team-->         
        <script type="text/javascript" src="js/team/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="js/team/jquery.catslider.js"></script> 
        <!--Filters-->
        <script type="text/javascript" src="js/filters/jquery.isotope.js" ></script>   
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Twitter Feed-->
        <script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>   
        <!-- WOW-master-->
        <script type="text/javascript" src="js/animations/wow.min.js"></script> 
        <!-- Parallax-->
        <script type="text/javascript" src="js/parallax/jquery.inview.js"></script>
        <script type="text/javascript" src="js/parallax/nbw-parallax.js"></script>                           
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
        <!--fUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->
        
        <!--Slider Function-->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery('.tp-banner').revolution(
                {
                    delay:15000,
                    startwidth:1170,
                    startheight:500,
                    hideThumbs:10,
                    fullWidth:"on",
                    fullScreen:"on",
                    fullScreenOffsetContainer: ""
                });
            });
        </script>
        <!--End Slider Function-->
  </body>
</html>
<?php COUCH::invoke(); ?>