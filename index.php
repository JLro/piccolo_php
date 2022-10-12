<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Piccolo Theme</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>

<body class="home">
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.htm"><img src="img/piccolo-logo.png" alt="" /></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.htm">Home <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.htm">Full Page</a></li>
                    <li><a href="index-gallery.htm">Gallery Only</a></li>
                    <li><a href="index-slider.htm">Slider Only</a></li>
                </ul>
            </li>
           <li><a href="features.htm">Features</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="page-full-width.htm">Full Width</a></li>
                    <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                    <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                    <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                </ul>
            </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                    <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.htm">Gallery Single</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.htm">Blog Style 1</a></li>
                    <li><a href="blog-style2.htm">Blog Style 2</a></li>
                    <li><a href="blog-style3.htm">Blog Style 3</a></li>
                    <li><a href="blog-style4.htm">Blog Style 4</a></li>
                    <li><a href="blog-single.htm">Blog Single</a></li>
                </ul>
             </li>
             <li><a href="page-contact.htm">Contact</a></li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.htm">Home</option>
                        <option value="index.htm">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form>

        </div>
        
      </div><!-- End Header -->
     
    <div class="row headline"><!-- Begin Headline -->
    
     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
              </ul>
            </div>
        </div>
        
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Welcome to Piccolo. <br />
            A Big Theme in a Small Package.</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium vulputate magna sit amet blandit.</p>
            <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et tortor. In sit amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices.</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
        </div>
    </div><!-- End Headline -->
    <!--Foreach-->
    <?php
         $country = array ('Argentina','Brasil','Uruguay','Peru','Ecuador','Chile');
            foreach ($country as $nombres) 
            {
                echo $nombres.'<br><hr>';
            }
    ?>
    <!--Foreach personlizando o asociativo-->
    <?php
    $pais1 = array ('codigo' => 54, 'continente' => 'America del Sur' , 'nombrePais' => 'Argentina' , 'img' => 'data:image/jpeg;base64,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');
    $pais2 = array ('codigo' => 52, 'continente' => 'America Norte' , 'nombrePais' => 'Mexico', 'img' => 'data:image/jpeg;base64,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');
    $pais3 = array ('codigo' => 56, 'continente' => 'America del Sur' , 'nombrePais' => 'Chile' , 'img' => '');
    $paisesas = array ($pais1, $pais2, $pais3);
    //Aqui muestro los elemetos del arrya con print_r
    // print_r ($paisesas); 

    //Estructura repetitiva para recorrer mi array en pantalla usando echo       
    foreach ($paisesas as $pais) 
     {
         echo '<a href="#">Link</a> el pais seleccionado es:' . $pais['nombrePais']."<br>"; 
     }
    

    ?>

    <?php
        $cursos = array ('python<br>','css<br>','html<br>','Javascript');
        //$cursos[2]='reemplazo';
        echo $cursos[1];
        echo count($cursos); //contador
    ?>
    
    <?php
        //bucle for
        $cursos = array('<br>python<br>','css<br>','html<br>');
       
        for ($i=0; $i <count($cursos); $i++)
        {
            echo $cursos [$i];
        }
    ?>
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            <h5 class="title-bg">Recent Work 
                <small>That we are most proud of</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
            </h5>
    	
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">
                    <?php
                    foreach ($paisesas as $pais)
                    {
                    ?>
                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="<?php echo $pais['img'] ?> " alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm"><?php echo $pais['nombrePais'] ?></a><?php echo $pais['continente'] ?></span>
                    </li>
                    <?php 
                    }
                    ?>
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    <div class="row"><!-- Begin Bottom Section -->
    
    	<!-- Blog Preview
        ================================================== -->
    	<div class="span6">

            <h5 class="title-bg">From the Blog 
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide ">

            <!-- Carousel items -->
            <div class="carousel-inner">

                 <!-- Blog Item 1 -->
                <div class="active item">
                    <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">A subject that is beautiful in itself</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                </div>

                <!-- Blog Item 2 -->
                 <div class="item">
                    <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">A great artist is always before his time</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                </div>

                 <!-- Blog Item 3 -->
                 <div class="item">
                    <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">Is art everything to anybody?</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                </div>
                
            </div>
            </div> 	
        </div>
        
        <!-- Client Area
        ================================================== -->
        <div class="span6">

            <h5 class="title-bg">Recent Clients
                <small>That love us</small>
                <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

            <!-- Client Testimonial Slider-->
            <div id="clientCarousel" class="carousel slide no-margin">
            <!-- Carousel items -->
            <div class="carousel-inner">

                <div class="active item">
                    <p class="quote-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Client Name, Big Company</cite></p>
                </div>

                <div class="item">
                    <p class="quote-text">"Adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Another Client Name, Company Name</cite></p>
                </div>

                <div class="item">
                    <p class="quote-text">"Mauris eget tellus sem. Cras sollicitudin sem eu elit aliquam quis condimentum nulla suscipit. Nam sed magna ante. Ut eget suscipit mauris."<cite>- On More Client, The Company</cite></p>
                </div>
                
            </div>
            </div>

            <!-- Client Logo Thumbs-->
            <ul class="client-logos">
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-1.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-2.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-3.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-4.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-5.png" alt="Client"></a></li>
            </ul>

        </div>
        
    </div><!-- End Bottom Section -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="img/piccolo-footer-logo.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Design Team</strong><br />
                        123 Main St, Suite 500<br />
                        New York, NY 12345<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Tweets</h5>
                    <ul>
                        <li><a href="#">@room122</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li><a href="#">@room122</a> In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices.</li>
                        <li><a href="#">@room122</a> Vivamus nec lectus sed orci molestie molestie. Etiam mattis neque eu orci rutrum aliquam.</li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Posts</h5>
                     <ul class="post-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur adipiscing elit est lacus gravida</a></li>
                        <li><a href="#">Lectus sed orci molestie molestie etiam</a></li>
                        <li><a href="#">Mattis consectetur adipiscing elit est lacus</a></li>
                        <li><a href="#">Cras rutrum, massa non blandit convallis est</a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Flickr Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
