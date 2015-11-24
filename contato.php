<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Contato' />
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
         <title>Phocus Desenvolvimento Web - Contato</title>    

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">   -->

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
            <header class="section_title">
                <!-- nav_logo Section-->
                <cms:embed "menu.php" />
                <!-- End nav_logo Section-->
                
                <!-- Info section Title-->
                <div class="container">
                    <div class="row animated fadeInUp delay1">
                        <div class="col-md-5">
                            <h1>Entre em contato</h1>
                        </div>
                        <div class="col-md-7">                        
                            <p>Mostre-nos seu projeto. Será um prazer ajudar você a realizá-lo.</p>
                        </div>
                    </div>
                </div>            
                <!-- End Info section Title--> 
            </header>
            <!-- End Header Section-->

            <!-- crumbs-->
            <div class="crumbs border_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>/</li>
                                <li>Contato</li>                                       
                            </ul>
                        </div>
                    </div>
                </div>        
            </div>
            <!-- End crumbs-->

            <!-- End content info - White Section-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="paddings">
                    <div class="container wow fadeInUp">
                        <div class="row">
                            <!-- Item Location -->
                            <div class="col-md-6">
                               <div class="row">
                                 <div class="col-md-6">
                                        <img src="img/office/1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Nossa Central</h4>
                                        <p>Praça Almirante Jaceguai, 61/703
                                        <br>Centro - Rio de Janeiro<br>
                                        Tel: +55 21-2242-8334<br>
                                        Email: <a href="mailto:contato@phocusweb.com.br">contato@phocusweb.com.br</a><br>
                                        Website: <a href="http://www.phocusweb.com.br/">www.phocusweb.com.br</a></p>
                                    </div>
                               </div>
                            </div> 
                            <!-- Item Location--> 

                            <!-- Item Location 
                            <div class="col-md-6">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <img src="img/office/2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>New York Office</h4>
                                        <p>Bigstart – Office Blvd No. 356-357
                                        <br>Farmville Town, LA 12345<br>
                                        Tel: +32 600 500 123<br>
                                        Email: <a href="mailto:jdrendon@imaginacionweb.net">testmail@yourdomain.com</a><br>
                                        Website: <a href="#">www.yoursitename.com</a></p>
                                    </div>
                                    
                               </div>
                            </div> 
                             End Item Location--> 
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End content info - White Section--> 

            <!-- End content info - Grey Section-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="info_resalt border-top">
                    <div class="container wow fadeInUp">
                        <div class="row">
                           <div class="col-md-6">
                                <h3>Qual é a sua dúvida?</h3>
                                <form id="form" action="php/send_mail.php">
                                    <input type="text" placeholder="Nome" name="Name" required>
                                    <input type="email" placeholder="Email"  name="Email" required>
                                    <input type="number" placeholder="Telefone"  name="Phone" required>
                                    <textarea placeholder="Sua Mensagem" name="message" required></textarea>
                                    <input type="submit" name="Submit" value="Enviar" class="button">
                                </form> 
                                <div id="result"></div>  
                            </div>

                            <div class="col-md-6">
                                <h3>Deixe sua mensagem!</h3>
                                <p class="lead">Assim que recebermos sua mensagem, entraremos em contato para tirar suas dúvidas.</p>
                                
                                <!-- Map area-->
                                <section class="map_area">
                                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:250px;width:630px;'><div id='gmap_canvas' style='height:245px;width:550px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/pt'>Maps-Generator</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=626a1e5e7823078331150b311c9fda5d3e453608'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(-22.9156769,-43.18902639999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-22.9156769,-43.18902639999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Phocus Desenvolvimento Web</strong><br>Praça Almirante Jacegua, 61/703<br>20240000 Rio de Janeiro<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                                </section>
                                <!-- End Map area-->
                            </div>                 
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End content info - Grey Section--> 

            <!-- footer-->
            <footer class="coopring">
                <cms:embed "footer.php" />
            </footer>      
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


  </body>
</html>
<?php COUCH::invoke(); ?>