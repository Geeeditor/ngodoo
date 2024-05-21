<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>NYC - Donation Page</title>
<meta name="keywords" content="Nigerian Youth Congress PDonation and Support Page" />
<meta name="description" content="Nigerian Youth Congress Donation and Support">
<meta name="author" content="About Nigerian Youth Congress">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favico.png">
<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 

<!-- Template's stylesheets -->
<link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="css/theme-default.css" type="text/css">
<link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="css/corporate.css" type="text/css">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="js/owl-carousel/owl.theme.css" rel="stylesheet">

<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Style Customizer's stylesheets -->
<link rel="stylesheet" type="text/css" href="js/style-customizer/css/spectrum.css">
<link rel="stylesheet" type="text/css" href="js/style-customizer/css/style-customizer.css">
<link rel="stylesheet/less" type="text/css" href="less/skin.html">
<!-- Style Customizer's stylesheets END -->

<!-- Skin stylesheet -->

</head>
<body>
<!-- <div class="over-loader loader-live">
  <div class="loader">
    <div class="loader-item style4">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div>
</div> -->
<!--end loading--> 

<!-- Style Customizer -->
<!-- <section id="style-customizer">
  <div class="style-customizer-wrap form-horizontal">
    <h4 class="sc-header uppercase">Style Customizer</h4>
    <h5 class="uppercase">Layout Style</h5>
    <div class="sc-variable-row form-group">
      <div class="radio-group col-xs-12">
        <input type="radio" name="sc-layout-type" id="sc-layout-type-boxed" class="sc-variable" data-key="layoutType" value="boxed" checked>
        <input type="radio" name="sc-layout-type" id="sc-layout-type-wide" class="sc-variable" data-key="layoutType" value="wide">
        <label for="sc-layout-type-wide" class="style-fweight-normal">Wide</label>
        <label for="sc-layout-type-boxed" class="style-fweight-normal">Boxed</label>
      </div>
    </div>
    <fieldset id="outer-bg-section">
      <h5 class="customizer-style-tytle-padd">Outer Background Styles</h5>
      <div class="sc-variable-row form-group">
        <div class="col-xs-12">
          <select name="sc-bg-outer-type" id="sc-bg-outer-type" data-key="outerBgType" class="sc-variable col-xs-8">
            <option value="color" selected>Solid color</option>
            <option value="pattern">Pattern</option>
            <option value="image">Image</option>
          </select>
          <div class="col-xs-4">
            <div id="sc-bg-outer-color-wrap">
              <input type="color" name="sc-bg-outer-color" id="sc-bg-outer-color" class="sc-variable" data-key="outerBgColor">
            </div>
            <div id="sc-bg-outer-image-wrap">
              <input type="file" accept="image/*" name="sc-bg-outer-image" id="sc-bg-outer-image" class="sc-variable sr-only" data-key="outerBgImage">
              <label for="sc-bg-outer-image" class="sc-btn" title="Upload image"><i class="fa fa-upload"></i> </label>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <h5 class="customizer-style-tytle-padd">Color Options</h5>
    <div class="sc-variable-row form-group style-form-group">
      <label for="sc-color-prim" class="col-xs-8 control-label color-text">Primary Color</label>
      <div class="col-xs-4">
        <input type="color" id="sc-color-prim" class="sc-variable" data-key="colorPrimary">
      </div>
    </div>
    <br/>
    <div class="form-group">
      <div class="col-xs-12">
        <button class="sc-btn" id="sc-download-css"><i class="fa fa-download"></i> Get CSS file</button>
      </div>
    </div>
    <br/>
    <br/>
    
  </div>
  <button id="sc-toggle" title="Styles Customizer"><i class="fa fa-wrench"></i> </button>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="afterSaveCSSFileModal" aria-labelledby="afterSaveCSSFileModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="afterSaveCSSFileModalLabel">File saved</h4>
      </div>
      <div class="modal-body"> In order to apply the generated custom styles to your template, please follow these steps:
        <ol>
          <li class="sc-after-save-todo-point-file">Upload the "skin.css" file to "css" directory in your template</li>
          <li class="sc-after-save-todo-point-image">Upload the image file to "img" directory in your template. Keep the image file name unchanged.</li>
          <li class="sc-after-save-todo-point-stylesheet-code"> Copy this code and paste it into "index.html" file in your template, after the line marked as <code>&lt;!-- Skin stylesheet --&gt;</code>
            <pre><code>&lt;link rel="stylesheet" href="css/skin.css"&gt;</code></pre>
          </li>
          <li class="sc-after-save-todo-point-preloader"> Copy this code and paste it into "index.html" file in your template, after the line marked as <code>&lt;!-- Preloader icon --&gt;</code>
            <pre><code class="sc-preloader-html"></code></pre>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div> -->
<!-- Style customizer END -->

<div class="wrapper-boxed">
<div class="wrapper-boxed">
  <div class="site-wrapper">
    <div class="topbar topbar-padding">
      <div class="container">
        <div class="topbar-left-items">
          <ul class="toplist toppadding pull-left paddtop1">
            <li class="rightl"><i class="fa fa-email">info@nyc.org.ng</i></li>
            <li><i class="fa fa-phone"> +234 803 713 0976</i></li>
          </ul>
        </div>
        <!--end left-->
        
        <div class="topbar-right-items pull-right">
          <ul class="toplist toppadding">
            <li class="lineright"><a href="coming.php">Login</a></li>
            <li class="lineright"><a href="coming.php">Register</a></li>
            <li><a href="https://web.facebook.com/nychq"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/nycng_hq"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/nigerianyouthcongresshq/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li class="last"><a href="https://www.linkedin.com/in/nigerian-youth-congress-hq-nyc-0a7ba31a4/"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!--end topbar-->
    
    <div class="col-md-12 nopadding">
      <div class="header-section style3 pin-style">
        <div class="container">
          <div class="mod-menu">
            <div class="row">
              <div class="col-sm-2"> <a href="#" title="" class="logo"> <img src="images/logo/loggo2.png" alt=""> </a> </div>
              <div class="col-sm-10">
                <div class="main-nav">
                  <ul class="nav navbar-nav top-nav">
                    <li class="search-parent"> <a href="#" title=""><i aria-hidden="true" class="fa fa-search"></i></a>
                      <div class="search-box">
                        <div class="content">
                          <div class="form-control">
                            <input type="text" placeholder="Type to search" />
                            <a href="#" class="search-btn"><i aria-hidden="true" class="fa fa-search"></i></a> </div>
                          <a href="#" class="close-btn">x</a> </div>
                      </div>
                    </li>
                    <!--<li class="cart-parent"> <a href="#" title=""> <i aria-hidden="true" class="fa fa-shopping-cart"></i> <span class="number"> 4 </span> </a>
                      <div class="cart-box">
                        <div class="content">
                          <div class="row">
                            <div class="col-xs-8"> 2 item(s) </div>
                            <div class="col-xs-4 text-right"> <span>$99</span> </div>
                          </div>
                          <ul>
                            <li> <img src="images/cart-img1.jpg" alt=""> Jean & Teashirt <span>$30</span> <a href="#" title="" class="close-btn">x</a> </li>
                            <li> <img src="images/cart-img2.jpg" alt=""> Jean & Teashirt <span>$30</span> <a href="#" title="" class="close-btn">x</a> </li>
                          </ul>
                          <div class="row">
                            <div class="col-xs-6"> <a href="#" title="View Cart" class="btn btn-block btn-warning">View Cart</a> </div>
                            <div class="col-xs-6"> <a href="#" title="Check out" class="btn btn-block btn-primary">Check out</a> </div>
                          </div>
                        </div>
                      </div>
                    </li>-->
                    <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                  </ul>
                  <div id="menu" class="collapse">
                    <ul class="nav navbar-nav">
                      <li class="right"> <a href="index.php">Home</a> <!--<span class="arrow"></span>
                      <ul class="dm-align-2">
                        <li> <a href="index2.html">Home Page 2</a></li>
                        <li> <a href="index3.html">Home Page 3</a></li>
                        <li> <a href="index4.html">Home Page 4</a></li>
                        <li> <a href="index5.html">Home Page 5</a></li>
                        <li> <a href="index6.html">Home Page 6</a></li>
                        <li> <a href="index7.html">Home Page 7</a></li>
                        <li> <a href="index8.html">Home Page 8</a></li>
                        <li> <a href="index9.html">Home Page 9</a></li>
                        <li> <a href="index10.html">Home Page 10</a></li>
                        <li> <a href="index.html">Home Default</a></li>
                        
                      </ul>-->
                    </li>
                      <li class="active"> <a href="about.php">About Us</a> <!--<span class="arrow"></span>
                        <ul class="dm-align-2">
                          <li> <a href="#">About <span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-about1.html">About Style 1</a> </li>
                              <li> <a href="page-about2.html">About Style 2</a> </li>
                              <li> <a href="page-about3.html">About Style 3</a> </li>
                              <li> <a href="page-about4.html">About Style 4</a> </li>
                              <li> <a href="page-about5.html">About Me</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Services <span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-services1.html">Services Style 1</a> </li>
                              <li> <a href="page-services2.html">Services Style 2</a> </li>
                              <li> <a href="page-services3.html">Services Style 3</a> </li>
                              <li> <a href="page-services4.html">Services Style 4</a> </li>
                            </ul>
                          </li>
                          
                          <li class="active"> <a href="#">Team <span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-team-classic.html">Team Classic</a> </li>
                              <li> <a href="page-team-parallax.html">Team Parallax</a> </li>
                              <li> <a href="page-team-dark.html">Team dark Style</a> </li>
                              <li class="active"> <a href="page-team-creative.html">Team Creative</a> </li>
                            </ul>
                          </li>
                          
                          <li> <a href="#">FAQ <span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-faq1.html">FAQ Style 1</a> </li>
                              <li> <a href="page-faq2.html">FAQ Style 2</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Contact<span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                             <li> <a href="page-contact.html">Contact Classic</a> </li>
                              <li> <a href="page-contact-left-sidebar.html">Contact Left Sidebar</a> </li>
                             
                               <li> <a href="page-contact-map.html">Full Width Map</a> </li>
                               
                               
                            </ul>
                          </li>
                          <li> <a href="#">Other Pages 1<span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-full-width.html">Full Width Page</a></li>
                              <li> <a href="page-left-sidebar.html">Left Sidebar</a></li>
                              <li> <a href="page-right-sidebar.html">Right Sidebar</a></li>
                              <li> <a href="page-packages.html">Package Plans</a></li>
                              <li> <a href="page-careers.html">Careers</a></li>
                              <li> <a href="page-coming-soon.html">Coming Soon</a></li>
                            </ul>
                          </li>
                          <li> <a href="#">Other Pages 2<span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              
                              <li> <a href="page-sitemap.html">Sitemap</a></li>
                              <li> <a href="page-maintenance.html">Maintenance</a></li>
                              <li> <a href="page-404.html">404 Error Page</a></li>
                              <li> <a href="page-404-2.html">404 Error Page 2</a></li>
                            </ul>
                          </li>
                         
                        </ul>-->
                      </li>
                      <li class="right"> <a href="#">Management Team</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                        
                            <li> <a href="#">Patron and Patroness</a> </li>
                              <li> <a href="board.php">Governing Board</a> </li>
                              <li> <a href="national.php">National Executives</a> </li>
                              <li><a href="directorate.php">National Directorates</a></li>
                              <li> <a href="national_appointees.php">National Appointees</a> </li>
                             <li> <a href="International.php">Nat./Int. Special Status <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="#">Africa Continent <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> <span class="arrow"></span> 
                                <ul>
                                  <li><a href="#">East Africa</a></li>
                                  <li><a href="#">West Africa</a></li>
                                  <li><a href="#">Central Africa</a></li>
                                  <li><a href="#">North Africa</a></li>
                                  <li><a href="#">South Africa</a></li>
                                </ul>
                              </li>

                              <li> <a href="#">Asia Continent <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a><span class="arrow"></span>
                                <ul>
                                  <li><a href="#">Eastern Asia</a></li>
                                  <li><a href="westernasia.php">Western Asia</a></li>
                                  <li><a href="#">Central Asia</a></li>
                                  <li><a href="#">Southern Asia</a></li>
                                </ul>
                               </li>
                               <li> <a href="#">America Continent <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a><span class="arrow"></span>
                                 <ul>
                                  <li><a href="#">Northern America</a></li>
                                  <li><a href="#">Southern America</a></li>
                                </ul>

                                </li>
                              <li> <a href="#">Europe Continent <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a><span class="arrow"></span> 
                                <ul>
                                  <li><a href="#">Eastern Europe</a></li>
                                  <li><a href="#">Western Europe</a></li>
                                  <li><a href="#">Northern Europe</a></li>
                                  <li><a href="#">Southrn Europe</a></li>
                                </ul>
                              </li>
                              <li> <a href="#">Oceania Continent </a></li>
                              <li><a href="#">Antartical Continent</a></li>
                            </ul>
                          </li>
                             <li> <a href="state.php">State Chairmen</a> </li> 
                              <li> <a href="#">LGA Coordinators</a> </li>
                              <li> <a href="#">Ward Coordinators</a> </li>
                        </ul>
                      </li>
                      <!--<li> <a href="page-about4.html">Features</a>  <span class="arrow"></span>
                        <ul class="dm-align-2">
                          
                          <li> <a href="page-about4.html">Headers <span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-about4.html">Header Light</a> </li>
                              <li> <a href="page-about5.html">Header Dark</a> </li>
                              <li> <a href="index4.html">Header Modern</a> </li>
                              <li> <a href="index.html">Header Transparent</a> </li>
                              <li> <a href="page-team-creative.html">Header Creative</a> </li>
                              <li> <a href="index.html">Header Left Logo</a> </li>
                              <li> <a href="page-team-creative.html">Header Center Logo</a> </li>
                              <li> <a href="index7.html">Header White</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Menu Styles <span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="index-barber.html">Menu Transparent</a> </li>
                              <li> <a href="index-creative.html">Menu Left logo</a> </li>
                              <li> <a href="index-realestate.html">Menu Right Logo</a> </li>
                              <li> <a href="index-toys.html">Menu Dark</a> </li>
                              <li> <a href="index-bakery.html">Menu Center Logo</a> </li>
                              <li> <a href="index-agro.html">Menu Boxed</a> </li>
                              <li> <a href="index-icecream.html">Menu Center</a> </li><li> <a href="onepage-corporate.html">Menu One Page</a> </li>
                              <li> <a href="onepage-leftsidebar.html">Dark Left Side Menu</a> </li>
                              
                            </ul>
                          </li>
                          <li> <a href="#">Loading Styles<span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="loading-style1.html">Loading Style 1</a> </li>
                              <li> <a href="loading-style2.html">Loading Style 2</a> </li>
                              <li> <a href="loading-style3.html">Loading Style 3</a> </li>
                              <li> <a href="loading-style4.html">Loading Style 4</a> </li>
                              <li> <a href="loading-style5.html">Loading Style 5</a> </li>
                              <li> <a href="loading-style6.html">Loading Style 6</a> </li>
                              <li> <a href="loading-style7.html">Loading Style 7</a> </li>
                              <li> <a href="loading-style8.html">Loading Style 8</a> </li>
                              <li> <a href="loading-style9.html">Loading Style 9</a> </li>
                              <li> <a href="loading-style10.html">Loading Style 10</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Footer Styles<span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="index-corporate4.html">Footer Dark</a> </li>
                              <li> <a href="shop-full-width.html">Footer Light</a> </li>
                              <li> <a href="index-fashion.html">Footer Simple</a> </li>
                              <li> <a href="index-beauty.html">Footer Parallax</a> </li>
                              <li> <a href="index-corporate7.html">Footer Big</a> </li>
                              <li> <a href="index-pro-landing.html">Footer Modern</a> </li>
                              <li> <a href="shortcodes-maps.html">Footer With Map</a> </li>
                              <li> <a href="index-band.html">Footer Transparent</a> </li>
                              <li> <a href="index-cosmetics.html">Footer Classic</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Videos<span class="sub-arrow dark"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="shortcodes-videos.html">Youtube Videos</a> </li>
                              <li> <a href="shortcodes-videos.html">Vimeo Videos</a> </li>
                              <li> <a href="shortcodes-videos.html">HTML 5 Videos</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Layered PSD Files</a> </li>
                          <li> <a href="#">Unlimited Colors</a> </li>
                          <li> <a href="#">Wide & Boxed</a> </li>
                        </ul>
                      </li>-->
                     <!-- <li class="mega-menu">  <a href="portfolio-full-width.html">Portfolio</a> <span class="arrow"></span>
                        <ul>
                          <li> <a href="#" title="home samples">Portfolio columns</a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="portfolio-1-columns.html"><i class="fa fa-angle-right"></i> &nbsp; One Column</a> </li>
                              <li> <a href="portfolio-2-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Two Column</a> </li>
                              <li> <a href="portfolio-3-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Three Column</a> </li>
                              <li> <a href="portfolio-4-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Four Column</a> </li>
                              <li> <a href="portfolio-5-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Five Column</a> </li>
                              <li> <a href="portfolio-6-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Six Column</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Portfolio Styles</a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="portfolio-masonry.html"><i class="fa fa-angle-right"></i> &nbsp; Masonry</a> </li>
                              <li> <a href="portfolio-masonry-projects.html"><i class="fa fa-angle-right"></i> &nbsp; Masonry-Projects</a> </li>
                              <li> <a href="portfolio-mosaic.html"><i class="fa fa-angle-right"></i> &nbsp; Mosaic</a> </li>
                              <li> <a href="portfolio-mosaic-flat.html"><i class="fa fa-angle-right"></i> &nbsp; Mosaic-Flat</a> </li>
                              <li> <a href="portfolio-mosaic-projects.html"><i class="fa fa-angle-right"></i> &nbsp; Mosaic-Projects</a> </li>
                              <li> <a href="portfolio-slider-projects.html"><i class="fa fa-angle-right"></i> &nbsp; slider-projects</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Portfolio Styles</a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="portfolio-full-width.html"><i class="fa fa-angle-right"></i> &nbsp; Full Width</a> </li>
                              <li> <a href="portfolio-gallery.html"><i class="fa fa-angle-right"></i> &nbsp; Gallery</a> </li>
                              <li> <a href="portfolio-classic.html"><i class="fa fa-angle-right"></i> &nbsp; Classic</a> </li>
                              <li> <a href="portfolio-nospace.html"><i class="fa fa-angle-right"></i> &nbsp; No Space</a> </li>
                              <li> <a href="portfolio-boxed-size.html"><i class="fa fa-angle-right"></i> &nbsp; Boxed Size</a> </li>
                              <li> <a href="portfolio-modern.html"><i class="fa fa-angle-right"></i> &nbsp; Modern</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Portfolio Single Page</a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="portfolio-parallax.html"><i class="fa fa-angle-right"></i> &nbsp; Parallax Image</a> </li>
                              <li> <a href="portfolio-video.html"><i class="fa fa-angle-right"></i> &nbsp; Video Background</a> </li>
                              <li> <a href="portfolio-left-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp; Left Sidebar</a> </li>
                              <li> <a href="portfolio-right-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp; Right Sidebar</a> </li>
                              <li> <a href="portfolio-carousel.html"><i class="fa fa-angle-right"></i> &nbsp; Carousel</a> </li>
                              <li> <a href="portfolio-fullwidth-image.html"><i class="fa fa-angle-right"></i> &nbsp; Full width Image</a> </li>
                            </ul>
                          </li>
                        </ul>
                      </li>-->
                    </ul>
                    <ul class="nav navbar-nav">

                      <li class="mega-menu"> <a href="#">Gallery</a>  <span class="arrow"></span>
                       <ul>
                              <li><a href="Gallery.php"> NYC Event Gallery</a> </li>
                              <li><a href="nyc-document-gallery.php"> NYC Document Gallery</a> </li>
                    
                        </ul>
                      </li>
                        <li class="right"> <a href="donate.php">Donate</a> <!--<span class="arrow"></span>
                        <ul class="dm-align-2">
                        
                              <li> <a href="blog-full-width.html">Full Width</a> </li>
                              <li> <a href="blog-left-sidebar.html">Left Sidebar</a> </li>
                             <li> <a href="blog-3-columns.html">Three Column</a> </li> 
                              <li> <a href="blog-default-author.html">Author Page</a> </li>
                              <li> <a href="blog-default-comments.html">Blog Comments</a> </li>
                              <li> <a href="blog-image-post.html">Image Post</a> </li>
                              <li> <a href="blog-video-post.html">Video Post</a> </li>
                          
                        </ul>-->
                      </li>
                      <li class="right"> <a href="#">News</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                        
                              <li> <a href="news.php">NYC News</a> </li>
                              <li> <a href="https://news.nyc.org.ng/">News Blog</a> </li>
                            
                          
                        </ul>
                      </li>
                      <li class="right"> <a href="contact.php">Contact</a>  <!--<span class="arrow"></span>
                       <ul>
                         <li> <a href="shop-full-width.html">Full Width</a> </li>
                          <li> <a href="shop-left-sidebar.html">Left Sidebar</a> </li>
                           <li> <a href="shop-3-columns.html">Three Column</a> </li>
                           <li> <a href="shop-single-full-width.html">Product Preview</a> </li>
                               <li> <a href="shop-single-left-sidebar.html">Preview Sidebar</a> </li>

                        </ul>-->
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
      
    </div>
    <!--end menu-->
    
    <div class="clearfix"></div>      <!--end menu--> 
      
    </div>
    <!--end menu-->
    
    <div class="clearfix"></div>
    
    <div class="clearfix"></div>
    <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
         <div class="background-imgholder" style="background:url(images/hed.jpg);"><img class="nodisplay-image" src="images/hed.jpg" alt=""/> </div>
      </div>
      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
            <div class="header-inner less-height">
              <div class="overlay">
                <div class="text text-center">
                  <h3 class="uppercase text-white less-mar-1 title">Donation Page</h3>
                  <h6 class="uppercase text-white sub-title">Nigerian Youth Congress</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end header section -->
    
    <section>
      <div class="pagenation-holder">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4>Donation</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="current"><a href="Gallery.php">Portfolio</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->

<!-- <section class="sec-padding">
  <div class="container-fluid">
  <div class="row">
  
  <div class="col-md-10 col-centered">
  
    
          
          <div class="col-md-6">
           
           <div class="col-sm-12 nopadding">
                <div class="sec-title-container less-padding-3 text-left">
                  <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary">We are offring best Services</h5>
                  <h2 class="font-weight-6 less-mar-1 line-height-4">We offer best Services <br/>
                    for your Business </h2>
                  <div class="ce-title-line align-left"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!-end title->
              
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. </p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar.</p>
            <br/>
            <br/>
            <a class="btn btn-prim btn-xround-2 uppercase" href="#">Read more</a> </div>
          <!-end item-> 
          
          <div class="col-md-6 margin-bottom"> <img src="images/p3.jpg" alt="" class="img-responsive"/> </div>
          <!-end item->
          
  </div>
  <!-end main col->

          
  </div>
  </div>
  </section>
<div class="clearfix"></div> -->
  <!-- end section -->
  
  
  <div class="divider-line solid light"></div>
  <section class="sec-padding">
  <div class="container-fluid">
  <div class="row">
  
  <div class="col-md-10 col-centered">
  
    
     <div class="col-md-6 margin-bottom"> <img src="images/hh.jpg" alt="" class="img-responsive"/> </div>
          <!--end item-->
          
          
          <div class="col-md-6">
           
           <div class="col-sm-12 nopadding">
                <div class="sec-title-container less-padding-3 text-left">
                  <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary">Welcome to Nigerian Youth Congress</h5>
                  <h2 class="font-weight-6 less-mar-1 line-height-4">Thank You for considering to be part of What We Do</h2>
                  <div class="ce-title-line align-left"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!--end title-->
              
            <br/>
            <p>Thank you for considering making a donation to Nigerian Youth Congress COVID-19 Support Fund</p>
<p>Your kind donation to the most vulnerable Youths occasioned by the on-going national lockdown consequent upon the dreaded COVID-19 pandemic in the society will be greatly appreciated.</p>
<p>Thank you and may God reward you abundantly.</p>


<p><strong>Blessing A. Akinlosotu, </strong><br>
President, <br>
Nigerian Youth Congress</p>
            <br/>
            <br/>
        <div id="showMsgs"></div>
            <!--<a class="btn btn-prim btn-xround-2 uppercase" href="#">DONATE</a>-->
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Donate</button>
            </div>
          <!--end item--> 
          
         
         
         
         
         
         
             <script src="https://js.paystack.co/v1/inline.js"></script>
                   
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Donate Now</h4>
        </div>
        <div class="modal-body">
    <form method="post" >
    <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" id="name" name="name" class="form-control" id="email">
  </div>
  
    <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" id="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Amount:</label>
    <input id="fundAmt" name="fundAmt" type="number" class="form-control" id="pwd">
  </div>
 
          
        </div>
        <div class="modal-footer">
            <button class="btn btn-success" type="button" onclick="payWithPaystack()">
            <span class="align-middle">Donate</span>
          </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <script>
  function payWithPaystack(){
      
//       let data = $('form').serialize(); 
//   $.ajax({
//             url : 'process.php', //Here you will fetch records 
//             type : 'post',
//             data :  data + "&page=" + page , 
//                   success:function(data){
//                     if($.trim(data)  == 1){
//                       alert('Click ok to proceed to payment');
//                     }

                    
//                   }

//                 });
                
                
	var amt = document.getElementById('fundAmt').value;
	var email = document.getElementById('email').value;
	if(amt == '')
	{
		alert('Amount required');
	}else if(amt < 100)
	{
		alert('Minimum fund is N100');
	}
	else
	{
		var amount = parseInt(amt) * 100;
		var handler = PaystackPop.setup({
		 // key: 'pk_test_110ecc877e06a41bab6ebb34ceda664a731f69f3',  
		  key: 'pk_live_70c9c8898aa9789fa0d9eaa820341231129427f1',  
		  email: email,
		  amount: parseInt(amt) * 100,
		 // amount: 10000,
		  ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
		  metadata: {
			 custom_fields: [
				{
					display_name: "Mobile Number",
					variable_name: "mobile_number",
					value: "+2348012345678"
				}
			 ]  
		  },
// 		  callback: function(response){
// 			//  alert('success. transaction ref is ' + response.reference);

// 			 window.location.href = "add-fund-db.php?payment_ref="+response.reference+"&amt="+amt+"&pf="+0;


// 		  },
		  
		  callback: function(response){
      let data = $('form').serialize(); 
     //alert(data); 
       // console.log(data,page);
          $.ajax({
            type : 'post',
            url : 'processAjax.php', //Here you will fetch records 
            data :  data , //Pass $id
            beforeSend: function(){
              $("#ajaxLoad").show();
            },
            success : function(data){
            $('#showMsgs').html(data); 
            },
            complete: function(){
              $("#ajaxLoad").hide();
            },
        });


      },
		  onClose: function(){
			  alert('window closed');
		  }
		});
		handler.openIframe();
	}
	
	$('#myModal').modal('hide');
	
	
  }
</script>


          
  </div>
  <!--end main col-->

          
  </div>
  </div>
  </section>
<div class="clearfix"></div>
  <!-- end section -->
  
  
    
       <section class="section-primary">
      <div class="container">
        <div class="divider-line solid light opacity-1"></div>
        <div class="row sec-padding-6">
          <ul class="clients-list grid-cols-5 hover-7 noborder">
            <li><a href="#"><img src="images/clients/6.png" alt=""></a></li>
            <li><a href="#"><img src="images/clients/7.png" alt=""></a></li>
            <li><a href="#"><img src="images/clients/8.png" alt=""></a></li>
            <li><a href="#"><img src="images/clients/9.png" alt=""></a></li>
            <li><a href="#"><img src="images/clients/10.png" alt=""></a></li>
          </ul>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
    
<div class="section-dark sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12 colmargin clearfix margin-bottom">
            <div class="fo-map">
              <div class="footer-logo"><img src="images/logo/loggo.png" alt=""/></div>
              <p class="text-light">The Nigerian Youth Congress is a major stakeholder in the implementation of the youth agenda of the Federal government, and, as such, will be strengthened by the government.  <a href="about.php"><span>Readmore>>> </span></a></p>
            </div>
          </div>
          <!--end item-->
          
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="text-white less-mar3 font-weight-5">About Us</h4>
            <div class="clearfix"></div>
            <br/>
            <ul class="footer-quick-links-4 white">
              <li><a href="#"><i class="fa fa-angle-right"></i> Introduction</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Aims and Objective</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Vision and Mission </a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>affiliations</a></li>
            </ul>
          </div>
          <!--end item-->
          
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="text-white less-mar3 font-weight-5">Quick Links</h4>
            <div class="clearfix"></div>
            <br/>
            <ul class="footer-quick-links-4 white">
              <li><a href="index.php"><i class="fa fa-angle-right"></i> Home</a></li>
              <li><a href="about.php"><i class="fa fa-angle-right"></i> About Us</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Patron and Patroness</a></li>
              <li><a href="board.php"><i class="fa fa-angle-right"></i> Governing Board</a></li>
              <li><a href="national.php"><i class="fa fa-angle-right"></i> National Executives</a></li>
<li><a href="directorate.php"><i class="fa fa-angle-right"></i> National Directorates</a></li>
<li><a href="national_appointees.php"><i class="fa fa-angle-right"></i> National Appointees</a></li>
<li><a href="International.php"><i class="fa fa-angle-right"></i>Nat./Int. Special Status</a></li>
<li><a href="state.php"><i class="fa fa-angle-right"></i> State Chairmen</a></li>
<li><a href="#"><i class="fa fa-angle-right"></i> LGA Coordinators</a></li>
<li><a href="#"><i class="fa fa-angle-right"></i> Ward Coordinators</a></li>
            </ul>
          </div>
          <!--end item-->
          
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="text-white less-mar3 font-weight-5">Contact Us</h4>
            <div class="clearfix"></div>
            <br/>
            <address class="text-light">
            <strong class="text-white">Address:</strong> <br>
           C/o Office of the Senior Special Assistant to the President on Youth and Students Affairs, Phase 1, 5th Floor, Federal Secretariat, Abuja.
            </address>
            <span class="text-light"><strong class="text-white">Phone:</strong> +234 803 713 0976</span><br>
            <span class="text-light"><strong class="text-white">Email:</strong> info@nyc.org.ng </span><br>
            <ul class="footer-social-icons white left-align icons-plain text-center">
              <li><a class="twitter" href="https://twitter.com/nycng_hq"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://web.facebook.com/nychq"><i class="fa fa-facebook"></i></a></li>
             
              <li><a href="https://www.linkedin.com/in/nigerian-youth-congress-hq-nyc-0a7ba31a4/"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.instagram.com/nigerianyouthcongresshq/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <!--end item--> 
          
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- end section -->
    
    <section class="sec-padding-6 section-medium-dark">
      <div class="container">
        <div class="row">
          <div class="fo-copyright-holder text-center"> Copyright © 2020 <a href="index.php">Nigerian Youth Congress</a> | All rights reserved. </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>    <div class="clearfix"></div>
    <!-- end section -->  
    

    
    <a href="#" class="scrollup"></a><!-- end scroll to top of the page--> 
    
  </div>
  <!--end site wrapper--> 
</div>
<!--end wrapper boxed--> 

<!-- Scripts --> 
<script src="js/jquery/jquery.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<script src="js/style-customizer/js/spectrum.js"></script> 
<script src="js/less/less.min.js" data-env="development"></script> 
<script src="js/style-customizer/js/style-customizer.js"></script> 
<!-- Scripts END --> 

<!-- Template scripts --> 
<script src="js/megamenu/js/main.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/owl-carousel/custom.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/owl-carousel/custom.js"></script> 
<script src="js/parallax/jquery.parallax-1.1.3.html"></script>

<script>
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })

  </script>
<script src="js/functions/functions.js"></script> 

</body>

</html>
