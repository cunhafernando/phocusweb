<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page' />
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
         <title>Phocus Desenvolvimento Web - Home</title>    
        
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
        <!--<link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png"> -->  

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
                <cms:embed "slider.php" />
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
            var revapi;
            jQuery(document).ready(function() {
               revapi = jQuery('.tp-banner').revolution(
                {
                    delay:9000,
                    startwidth:1170,
                    startheight:600,
                    hideThumbs:10,
                    fullWidth:"on",
                    forceFullWidth:"on"
                });
            }); 
        </script>
        <!--End Slider Function-->
  </body>
</html>
<?php COUCH::invoke(); ?>