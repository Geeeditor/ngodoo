<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>NYC - Gallery</title>
<meta name="keywords" content="Nigerian Youth Congress Portfolio" />
<meta name="description" content="Nigerian Youth Congress Portfolio">
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

<link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
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
<!--<div class="over-loader loader-live">
  <div class="loader">
    <div class="loader-item style4">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div>
</div>
<-end loading--> 

<!-- Style Customizer -->
<!--<section id="style-customizer">
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
</div>
< Style customizer END -->

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
    
    <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background:url(images/hed.jpg);"><img class="nodisplay-image" src="images/header-inner-1.jpg" alt=""/> </div>
      </div>
      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
            <div class="header-inner less-height">
              <div class="overlay">
                <div class="text text-center">
                  <h3 class="uppercase text-white less-mar-1 title">Portfolio</h3>
                  <h6 class="uppercase text-white sub-title">Welcome to Nigerian Youth Congress Gallery Page</h6>
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
              <h4>NYC Gallery</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="current"><a href="#">View our Projects</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->

<section class="sec-padding">
      <div class="container">
        <div class="row">
          
          <div class="clearfix">
        <div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
            <div class="cbp-l-filters-dropdownWrap">
                <!-- <div class="cbp-l-filters-dropdownHeader">Sort Gallery</div>
                <div class="cbp-l-filters-dropdownList">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
                    <div data-filter=".identity" class="cbp-filter-item">NYC Events</div>
                    <div data-filter=".web-design" class="cbp-filter-item">NYC State Recommendations</div>
                    <div data-filter=".print" class="cbp-filter-item">NYC Programs</div>
                </div> -->
            </div>
        </div>

        <!-- <div id="js-filters-lightbox-gallery2" class="cbp-l-filters-button cbp-l-filters-left">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
            <div data-filter=".graphic" class="cbp-filter-item">Events</div>
            <div data-filter=".logos" class="cbp-filter-item">Documents</div>
        </div> -->
    </div>
    
    
    <div id="js-grid-lightbox-gallery" class="cbp">
        <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol38.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/zazzau/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">NYC Leadership visit Emir of Zazzau</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
       <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol37.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/kadina/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Kaduna State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Kaduna State Inauguratin</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
      <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol36.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/summit/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Kogi State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Kogi State at 2020 Youth Summit</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
       <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol35.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/ekiti/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">NYC Leadership visit Ekiti State</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
       <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol34.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/youth/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">NYC Celebrate 2020 International Youth Day</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
         <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol33.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/ims/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">Nigerian Youth Congress Leadership Visit to Imo State</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
          <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol32.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/immo/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Anambra State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Anambra State paid courtesy vist to Igwe of Nnewi</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
           <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol31.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/immo/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Imo State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Inaugurate Imo State Chapter</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol30.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/minister/1b.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">Courtesy Visit to the Hon Minister for Youth and Sports</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol29.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/minister/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">The Leadership of NYC at the Office of the SSA on youth</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
         <div class="cbp-item identity graphic print">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol28.html" class="cbp-caption cbp-singlePageInline" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/cybercrime/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress</div>
                            <div class="cbp-l-caption-desc">E-Summit on Strategies to curb Cyber Crime</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
      <div class="cbp-item identity graphic print">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol27.html" class="cbp-caption cbp-singlePageInline" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/support/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Kwara State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Kwara State provides cash support for private school owners</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
      <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol26.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Yobe/1b.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Yobe State Chapter</div>
                            <div class="cbp-l-caption-desc">Courtesy Visit to NYC Borno State Chapter</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity graphic print">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol25.html" class="cbp-caption cbp-singlePageInline" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Next/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress</div>
                            <div class="cbp-l-caption-desc">Annonymous</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item motion print logos web-design">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol24.html" class="cbp-caption cbp-singlePageInline" data-title="Remind~Me Widget<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/sourv/s3.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">Souvenir</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol23.html" class="cbp-caption cbp-singlePageInline" data-title="Workout Buddy<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Yobe/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Yobe State Chapter</div>
                            <div class="cbp-l-caption-desc">Yobe State Appreciation on E-Summit Success</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity print logos motion">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol22.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Bayelsa/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Bayelsa State Chapter</div>
                            <div class="cbp-l-caption-desc">E-Summit to Mark World Youth Skill Day</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
         <div class="cbp-item identity print logos motion">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol21.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Communique/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">kk
                            <div class="cbp-l-caption-title">NYC Nassarawa State Chapter</div>
                            <div class="cbp-l-caption-desc">Communique Issued with Nassarawa State Governor</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design graphic print motion">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol19.html" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Yobe/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Yobe State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Yobe State Chapter visited Director for Research</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design logos identity graphic">
             <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol20.html" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/ondo/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Ondo State Chapter</div>
                            <div class="cbp-l-caption-desc">E-Summit on Technology as A Catalyst</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic print identity">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol19.html" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Katsina/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Katsina State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Katsina State Chapter partner to train youth on SKILL Aquisition</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol18.html" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/abia/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Abia State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Abia State Visit Ministry of Youth and Sports</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity graphic print">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol17.html" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Nassarawa/1c.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Nassarawa State Chapter</div>
                            <div class="cbp-l-caption-desc">Continuity of the fam9iliarization visit</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item motion print logos web-design">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol16.html" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Education/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">E-Summit on Quality Education</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic logos">
             <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol1.html" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Nassarawa/1b.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Nassarawa State Chapter</div>
                            <div class="cbp-l-caption-desc">1 Day Interactive Session</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity print logos motion">
             <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol2.html" class="cbp-caption cbp-singlePageInline" data-title="Bolt UI<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Nassarawa/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Nassarawa State Chapter</div>
                            <div class="cbp-l-caption-desc">Commissioner for youth receives NYC Nassarawa State Delegate</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
         <div class="cbp-item identity print logos motion">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol3.html" class="cbp-caption cbp-singlePageInline" data-title="WhereTO App<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Nassarawa/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Nassarawa State Chapter</div>
                            <div class="cbp-l-caption-desc">Condolence visit to the Executive State Governor</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
         <div class="cbp-item web-design graphic print motion">
           <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol4.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Yobe/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Yobe Chapter</div>
                            <div class="cbp-l-caption-desc">Leadershipo of NYC Yobe State Chapter Visit Commissioner for Youth</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design logos identity graphic">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol5.html" class="cbp-caption cbp-singlePageInline" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/oyo/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Oyo State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Oyo task Government to be proactive</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic print identity">
           <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol6.html" class="cbp-caption cbp-singlePageInline" data-title="Remind~Me Widget<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/oyo-visit/1b.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">Youth scribe visit Oyo State Chapter</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design motion logos">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol7.html" class="cbp-caption cbp-singlePageInline" data-title="Workout Buddy<br>by Tiberiu Neamu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Bauchi/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Bauchi State Chapter</div>
                            <div class="cbp-l-caption-desc">Tanko Dutse Receives in Audience of NYC</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity graphic print">
           <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol8.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Electoral/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">Nigeria's Electoray System</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item motion print logos web-design">
           <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol9.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/Communique/1b.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Nassarawa State Chater</div>
                            <div class="cbp-l-caption-desc">Communique After Inaugural</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic logos">
             <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol10.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/oyo-visit/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Oyo State Chapter</div>
                            <div class="cbp-l-caption-desc">NYC Oyo State Chapter Visit to the Hon. Commissioner on Youth.</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity print logos motion">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol11.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/osun/1b.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">The leadership of NYC extend Courtesy Visit</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
         <div class="cbp-item identity print logos motion">
             <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol12.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/osun/1a.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">NYC Flag Up Agro Empowerment</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
         <div class="cbp-item web-design graphic print motion">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol13.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/osun/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress HQ</div>
                            <div class="cbp-l-caption-desc">Courtesy Visit to Oba Adedotun Abolarin</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design logos identity graphic">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol14.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/eld/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Nigerian Youth Congress</div>
                            <div class="cbp-l-caption-desc">Happy Eid-El-Fitr</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic print identity">
            <a href="js/cubeportfolio/ajax-lightbox-gallery/portfol15.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                <div class="cbp-caption-defaultWrap">
                    <img src="images/portfolio/distribute/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">NYC Kogi State Chapter</div>
                            <div class="cbp-l-caption-desc">Distribution of Medical and Consumable Materials to Vulnerable</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
    </div>
    
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

<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="js/cubeportfolio/lightbox-gallery.js"></script> 
  
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
