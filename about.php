<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>NYC - About Page</title>
<meta name="keywords" content="About Nigerian Youth Congress" />
<meta name="description" content="About Nigerian Youth Congress">
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
<link href="js/accordion/css/smk-accordion.css" rel="stylesheet">

<!-- Template's stylesheets -->
<link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="css/theme-default.css" type="text/css">
<link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="css/corporate.css" type="text/css">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" href="js/parallax/main.css">
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
<!-end loadin-> 

<!- Style Customizer ->
<section id="style-customizer">
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
<!- Style customizer END -->

<div class="wrapper-boxed">
  <div class="site-wrapper">
       <form>
                  
											
              </form>
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
  <!--  <form method="post" >-->
  <!--  <div class="form-group">-->
  <!--  <label for="email">Name:</label>-->
  <!--  <input type="text" id="name" name="name" class="form-control" id="email">-->
  <!--</div>-->
  
  <!--  <div class="form-group">-->
  <!--  <label for="email">Email address:</label>-->
  <!--  <input type="email" id="email" name="email" class="form-control" id="email">-->
  <!--</div>-->
  <!--<div class="form-group">-->
  <!--  <label for="pwd">Amount:</label>-->
  <!--  <input id="fundAmt" name="fundAmt" type="number" class="form-control" id="pwd">-->
  <!--</div>-->
 
          
  <!--      </div>-->
  <!--      <div class="modal-footer">-->
  <!--          <button class="btn btn-success" type="button" onclick="payWithPaystack()">-->
  <!--          <span class="align-middle">Donate</span>-->
  <!--        </button>-->
  <!--        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </form>-->
        </div>
      </div>
    </div>
  </div>
</div>

 <div class="col-md-12 nopadding">



<div class="topbar light topbar-padding">
      <div class="container">
        <div class="topbar-left-items">
          <ul class="toplist toppadding pull-left paddtop1">
            <li class="rightl">info@nyc.org.ng</li>
            <li><i class="fa fa-phone">+234 803 713 0976</li></i>
          </ul>
        </div>
        <!--end left-->
        
        <div class="topbar-right-items pull-right">
          <ul class="toplist toppadding">
              
            
            
  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Donate</button>
  <!--<div id="showMsgs"></div>-->
    
          
            <li class="lineright"><a href="coming.php">Login</a></li>
            <li class="lineright"><a href="coming.php">Register</a></li>
            <li><a href="https://web.facebook.com/nychq"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/nycng_hq"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="last"><a href="https://www.linkedin.com/in/nigerian-youth-congress-hq-nyc-0a7ba31a4/"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>


 


      <div class="header-section style1 pin-style">
        <div class="container">
          <div class="mod-menu">
            <div class="row">
              <div class="col-sm-2"> <a href="index.html" title="" class="logo style-2 mar-4"> <img src="images/logo/loggo.png" alt=""> </a> </div>
              <div class="col-sm-10">
                <div class="main-nav">
                  <ul class="nav navbar-nav top-nav">
                    <li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true" class="fa fa-search"></i></a>
                      <div class="search-box ">
                        <div class="content">
                          <div class="form-control">
                            <input type="text" placeholder="Type to search" />
                            <a href="#" class="search-btn mar-1"><i aria-hidden="true" class="fa fa-search"></i></a> </div>
                          <a href="#" class="close-btn mar-1">x</a> </div>
                      </div>
                    </li>
                    <!--<li class="cart-parent"> <a href="javascript:void(0)" title=""> <i aria-hidden="true" class="fa fa-shopping-cart"></i> <span class="number mar2"> 4 </span> </a>
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
                      <li class="right active"> <a href="index.php">Home</a> <!--<span class="arrow"></span>-->
                        <!--<ul class="dm-align-2">
                          <li> <a href="index2.html">Home Page 2</a></li>
                          <li> <a href="index3.html">Home Page 3</a></li>
                          <li> <a href="index4.html">Home Page 4</a></li>
                          <li> <a href="index5.html">Home Page 5</a></li>
                          <li> <a href="index6.html">Home Page 6</a></li>
                          <li> <a href="index7.html">Home Page 7</a></li>
                          <li> <a href="index8.html">Home Page 8</a></li>
                          <li> <a href="index9.html">Home Page 9</a></li>
                          <li> <a href="index10.html">Home Page 10</a></li>
                          <li class="active"> <a href="index.html">Home Default</a></li>
                        </ul>-->
                      </li>
                      <li> <a href="about.php">About Us</a> 
                        <!--<ul class="dm-align-2">
                          <li> <a href="#">About <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-about1.html">About Style 1</a> </li>
                              <li> <a href="page-about2.html">About Style 2</a> </li>
                              <li> <a href="page-about3.html">About Style 3</a> </li>
                              <li> <a href="page-about4.html">About Style 4</a> </li>
                              <li> <a href="page-about5.html">About Me</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Services <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-services1.html">Services Style 1</a> </li>
                              <li> <a href="page-services2.html">Services Style 2</a> </li>
                              <li> <a href="page-services3.html">Services Style 3</a> </li>
                              <li> <a href="page-services4.html">Services Style 4</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Team <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-team-classic.html">Team Classic</a> </li>
                              <li> <a href="page-team-parallax.html">Team Parallax</a> </li>
                              <li> <a href="page-team-dark.html">Team dark Style</a> </li>
                              <li> <a href="page-team-creative.html">Team Creative</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">FAQ <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-faq1.html">FAQ Style 1</a> </li>
                              <li> <a href="page-faq2.html">FAQ Style 2</a> </li>
                            </ul>
                          </li>
                          <li> <a href="#">Contact<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-contact.html">Contact Classic</a> </li>
                              <li> <a href="page-contact-left-sidebar.html">Contact Left Sidebar</a> </li>
                             
                              <li> <a href="page-contact-map.html">Full Width Map</a> </li>
                              
                              
                            </ul>
                          </li>
                          <li> <a href="#">Other Pages 1<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="page-full-width.html">Full Width Page</a></li>
                              <li> <a href="page-left-sidebar.html">Left Sidebar</a></li>
                              <li> <a href="page-right-sidebar.html">Right Sidebar</a></li>
                              <li> <a href="page-packages.html">Package Plans</a></li>
                              <li> <a href="page-careers.html">Careers</a></li>
                              <li> <a href="page-coming-soon.html">Coming Soon</a></li>
                            </ul>
                          </li>
                          <li> <a href="#">Other Pages 2<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
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
                              <li><a href="national_appointees.php">National Appointees</a></li>
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
                      <li class="right"> <a href="#">Gallery</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                              <li> <a href="Gallery.php">NYC Event Gallery</a> </li>
                              <li> <a href="nyc-document-gallery.php">NYC Document Gallery</a> </li>
                        </ul>
                      </li>
                      <li class="right"><a href="donate.php">Donate</a></li>
                      <li class="right"> <a href="#">News</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                              <li> <a href="news.php">NYC News</a> </li>
                              <li> <a href="https://news.nyc.org.ng/">News Blog</a> </li>
                        </ul>
                      </li>
                      <li class="right"> <a href="contact.php">Contact</a>
                      
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
    
    
    <script>
  //function payWithPaystack(){
      

                
// 	var amt = document.getElementById('fundAmt').value;
// 	var email = document.getElementById('email').value;
// 	if(amt == '')
// 	{
// 		alert('Amount required');
// 	}else if(amt < 200)
// 	{
// 		alert('Minimum fund is N200');
// 	}
// 	else
// 	{
// 		var amount = parseInt(amt) * 100;
// 		var handler = PaystackPop.setup({
// 		  key: 'pk_test_110ecc877e06a41bab6ebb34ceda664a731f69f3',  
// 		  email: email,
// 		  amount: parseInt(amt) * 100,
// 		 // amount: 10000,
// 		  ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
// 		  metadata: {
// 			 custom_fields: [
// 				{
// 					display_name: "Mobile Number",
// 					variable_name: "mobile_number",
// 					value: "+2348012345678"
// 				}
// 			 ]  
// 		  },

		  
// 		  callback: function(response){
//       let data = $('form').serialize(); 
//           $.ajax({
//             type : 'post',
//             url : 'donate.php', //Here you will fetch records 
//             data :  data + "&page=" + page, //Pass $id
//             beforeSend: function(){
//               $("#ajaxLoad").show();
//             },
//             success : function(data){
//             $('#showMsgs').html(data); 
//             },
//             complete: function(){
//               $("#ajaxLoad").hide();
//             },
//         });


//       },
// 		  onClose: function(){
// 			  alert('window closed');
// 		  }
// 		});
// 		handler.openIframe();
// 	}
	
// 	$('#myModal').modal('hide');
	
	
//   }
</script>    <div class="col-md-12 nopadding">
    
      <!--end menu--> 
      
    </div>
    <!--end menu-->
    
    <div class="clearfix"></div>

<div class="header-inner-tmargin" style="
    margin-top: auto;
">
        <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background:url(images/hed.jpg);"><img class="nodisplay-image" src="images/hed.jpg" alt=""/> </div>
      </div>
      
<div class="container-fluid" >
        <div class="row">       
        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
        <div class="header-inner">        
       <div class="overlay">       
       <div class="text text-center">
    <h3 class="uppercase text-white less-mar-1 title">About <acronym title="Nigerian Youth Congress">NYC</acronym></h3>
    <h6 class="uppercase text-white sub-title">The Governing Body of Young <acronym title="Federal Republic of Nigeria" >FRN</acronym> Citizen </h6>
    </div>
       </div>       
        </div></div>        
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end section-->
    </div>
    <div class="clearfix"></div>
    <!--end header inner-->
    
<section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       <div class="col-md-6"> <h4>About Us</h4></div>
        <div class="col-md-6">
        <ol class="breadcrumb">
    <li><a href="index.html">Home</a></li>
 
    <li class="current"><a href="#">About us</a></li>
</ol>  
</div>
          
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!--end section-->

  <section class="sec-tpadding-2 section-light-3 section-bgimg-13">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> <img src="images/hb.png" alt="" class="img-responsive"/> </div>
          <!--end item-->
          
          <div class="col-md-6 padding-left-4">
           <div class="col-sm-12 nopadding">
                      <div class="sec-title-container less-padding-4 text-left">
                        <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Nigerian Youth Congress</h5>
                        <h2 class="font-weight-6 less-mar-1 line-height-5">INTRODUCTION</h2>
                        <div class="ce-title-line align-left"></div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--end title-->

         
          <p align="justify">The Nigerian Youth Congress (NYC)is a registered non-governmental, non-partisan, and a not-for-profit organizationfounded in 2016, recognised by the federal government, and is saddled with the responsibility of coordinating and regulating the affairs of all youth associations within the Federal Republic of Nigeria.</p>
<p align="justify">The NYC is under the supervision of the Federal Ministry of Youth and Sports Development and the Office of the Senior Special Assistant to the President on Youth and Students Affairs, it seeks to empower young people to take action through community and national service, towards creating sustainable solutions to local and national challenges, connecting with the global community to expand professional networks, exchange ideas with leaders, cultivate lifelong friendship around the world, and develop skills to become community, national and global leaders.</p>

<p align="justify">The organization was founded by decisive young leaders, youth developers, result oriented leaders, patriotic, vibrant and charismatic youth crusaders, emancipators, activists, strategists, and result-oriented leaders.</p>

<p align="justify">
 <h4 class="font-weight-4 less-mar-1 line-height-4 text-primary bg-opacity-8"> It comprises of;</h4>
 <ol class="modal-content">
<li>the Governing Board of fifteen (15) prominent philanthropists and reputed leaders within the Federal Republic of Nigeria who have excelled in their various fields, selected from all the six (6) geopolitical zones of the federation</li>
<li> the National Executive Committee (NEC) of twenty-seven (27) members who are democratically elected from their respective state chapters </li>
<li> State Chairmen from the 36 state chapters and the FCT, Abuja, and their Executives</li>
<li> Local Government Coordinators from the 774 local governments and their Executives </li>
<li> Ward Coordinators from the 8809 wards in the Federal Republic of Nigeria. </li>
</ol>
</p>
        
              
  </div>
  <!--end item-->
             
            </div>
          <!--end item--> 
          
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->

  <section class="sec-padding">
  <div class="container">
  <div class="row">
  
  <div class="col-md-9 col-centered text-center">
          <h4 class="text-dark font-weight-8 raleway font-color-red"><accronyms title="Nigerian Youth Congress">NYC</accronyms> WATCH WORD</h4><p>We are focused driven youths. We are patriots and law abiding citizens. Our voice must be heard through constructive approaches and dialogues.</p>
        </div>

  </div>
  </div>
  </section>
<div class="clearfix"></div>

 <section class="sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 margin-bottom"> <img src="images/hb.png" alt="" class="img-responsive"/> </div>
          <!--end item-->
          
          
          <div class="col-md-6 padding-left-6">
           
           <div class="col-sm-12 nopadding">
                <div class="sec-title-container less-padding-3 text-left">
                  <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary">Welcome to <acronym title="Nigerian Youth Congress">NYC</acronym> Official Page </h5>
                  <h2 class="font-weight-6 less-mar-1 line-height-4">About Us</h2>
                  <div class="ce-title-line align-left"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!--end title-->
              
            <br/>
            <p align="justify">The Nigerian Youth Congress is a major stakeholder in the implementation of the youth agenda of the Federal government, and, as such, will be strengthened by the government. Government at all levels shall endeavour to fund the activities of the youth body through subvention annually without necessarily controlling or interfering in the day-to-day running of the youth congress. Government shall provide some oversight functions to the congress. </p>
            <p align="justify">Voluntary youth organizations and groups, youth NGOs and CBOs shall partner with the congress for proper collaboration. As the coordinating body for all youth organizations across the country, the NYC shall endeavour at all times to pursue democratic norms, embrace the principles of accountability and transparency in all its conduct, avoid partisanship, initiate and execute activities that are in consonance with the goals of the Federal government youth agenda.</p>
             </div>
          <!--end item--> 
          
           
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
  
<section class="section-light sec-padding section-bgimg-12">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="ce-feature-box-19">
              <div class="icon-plain-medium center icon"><span class="pe-7s-drop"></span></div>
              <br/>
              <h5 class="title font-weight-5">VISION STATEMENT</h5>
              <p class="content">To inspire and coordinate Nigerian young people towards global standards in the realization of their full potentials, dreams and aspirations, and being responsible to themselves, their families and the nation at large, while also establishing cogent orientations to being an antidote to curbing youth thuggery in Nigeria and around the world.<br><br><br><br><br></p>
              <div class="clearfix"></div>
               </div>
          </div>
          <!--end item-->
          
          <div class="col-md-4">
            <div class="ce-feature-box-19 primary">
              <div class="icon-plain-medium center icon"><span class="pe-7s-switch"></span></div>
              <br/>
              <h5 class="title font-weight-5">MISSION STATEMENT</h5>
              <p class="content">To actualize the full rights of all Nigerian youths to enjoy social, political and economic development and to respect the rights of others, while actively participating in all decision making processes and equally complimenting government efforts in nation building. <br><br><br><br><br><br><br><br> </p>
              <div class="clearfix"></div>
               </div>
          </div>
          <!--end item-->
          
          <div class="col-md-4">
            <div class="ce-feature-box-19">
              <div class="icon-plain-medium center icon"><span class="pe-7s-mouse"></span></div>
              <br/>
              <h5 class="title font-weight-5">AIM</h5>
              <p class="content">The Nigerian Youth Congress aims to promote youth empowerment,allow young people create interstate and intercultural relationship with people from different backgrounds, and provide a common platform for all the structures of the youth congress for the advancement of the course of the Nigerian youth through enhanced social enlightenment, mobilization and coordination as a tool for complimenting the efforts of government and other relevant stakeholders in youth development.</p>
              <div class="clearfix"></div>
               </div>
          </div>
          <!--end item--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->

     <section class="section-side-image section-light clearfix">
      <div class="img-holder col-md-6 col-sm-3 pull-left">
        <div class="background-imgholder" style="background:url(images/20.jpg);"><img class="nodisplay-image" src="images/20.jpg" alt=""/> </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 text-inner-6 clearfix align-left">
            <div class="text-box">
              <div class="text-left">
                <div class="col-sm-12">
                  <div class="sec-title-container less-padding-3 text-left">
                    <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary">We offer Wide range of products and services</h5>
                    <h2 class="font-weight-6 less-mar-1 line-height-5">Get wide range of products and unlimited features</h2>
                  </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->
                
                <div class="col-md-12 col-sm-12 col-xs-12 slide-controls-primary"> 
                  <!-- Accordion begin -->
                  <div class="accordion_example"> 
                    
                    <!-- Section 1 -->
                    <div class="accordion_in style7 act-light acc_active">
                      <div class="acc_head text-dark font-weight-5">Objectives</div>
                      <div class="acc_content no-lpadd">
                        <p align="justify">
                          <ol>
                            <li>To coordinate the activities of all nationally recognized voluntary youth organizations and their state chapters.</li>
                            <li>To study various problems confronting the youths of this country and find means of alleviating same.</li>
                            <li>To be responsible for the active mobilization of Nigerian youths for youth development programmes nationwide.</li>
                            <li>To ensure that all international engagements by nationally recognized voluntary youth organizations are properly brought to the notice of the Federal Ministry responsible for Youth Affairs through the youth congress before such engagements are undertaken.</li>
                            <li>To ensure effective participation of the youth congress in international youth activities.</li>
                            <li>To evaluate at the end of the year, the programmes and activities of nationally recognized voluntary youth organizations and their state chapters, and submit its recommendations to the Federal Ministry of Youth Development.
</li>
                            <li>To serve as a training ground for the youths as future leaders of the country.</li>
                            <li>To ensure proper mainstreaming of the youths in vital processes of governance, policy formulation, implementation and nation building.</li>
                            <li>To enhance the promotion of the bonds of peace and friendship among Nigerian youths and their global counterparts.</li>
                          </ol>
                        </p>
                      </div>
                    </div>

                    
                    <!-- Section 2 -->
                    <div class="accordion_in style7 act-light ">
                      <div class="acc_head text-dark font-weight-5">
                        <div class="acc_icon_expand"></div>
                      Core Values</div>
                      <div class="acc_content no-lpadd">
                        <p>
                          <ol>
                            <li>Inclusiveness and Team work.</li>
                            <li>Originality of our Culture and Values.</li>
                            <li>Non-partisanship.</li>
                            <li>Quality and Excellence.</li>
                            <li>Transparency and Accountability.</li>
                          </ol>
                        </p>
                      </div>
                    </div>
                    
                    <!-- Section 3 -->
                    <div class="accordion_in style7 act-light">
                      <div class="acc_head text-dark font-weight-5">Thematic Areas of Focus.</div>
                      <div class="acc_content no-lpadd">
                        <p>
                          <ol>
                            <li>Economic Empowerment of Nigerian Youths.</li>
                            <li>Entrepreneurship and Community Development of the Nigerian society.</li>
                            <li>National Sustainable Development Goals.</li>
                            <li>Reawakening Nigerian Cultural Values.</li>
                            <li>Peace Building and Conflict Resolution.</li>
                            <li>Partnerships and Charity towards empowering the young people.</li>
                            
                          </ol>
                        </p>
                      </div>
                    </div>
                  </div>


                   <!-- Section 3 -->
                    <div class="accordion_in style7 act-light">
                      <div class="acc_head text-dark font-weight-5">Strategies</div>
                      <div class="acc_content no-lpadd">
                        <p>
                          <ol>
                            <li>Community engagement and focal consultation of community leaders.</li>
                            <li>Awareness creation through sensitization and peaceful processions.</li>
                            <li>Advocacy for community development.</li>
                            <li>Capacity building through seminars, workshops, summits, and conferences. </li>
                            <li>Research, statistics and planning.</li>
                          </ol>
                        </p>
                      </div>
                    </div>
                  </div>


                  <!-- Accordion end --> 
                </div>
                <!--end item--> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


    
    <div class="parallax vertical-align" data-parallax-bg-image="images/parallax/2.jpg" data-parallax-speed="0.9" data-parallax-direction="down">
      <div class="parallax-overlay bg-opacity-8">
        <div class="container sec-tpadding-2 sec-bpadding-2">
          <div class="row">
          
            <div class="col-md-12 text-center">
              
              
               <div class="col-sm-12">
            <div class="sec-title-container less-padding-1 text-center">
              <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Our Affilication</h5>
              <h4 class="font-weight-6 less-mar-1 line-height-5 text-white">The Nigerian Youth Congress is affiliated to the World Assembly of Youths, Pan-African Youth Union, African Youth Congress, International Youth Congress, World Youth Congress, European Youth Congress, American Youth Congress, Asian Youth Congress and any other INTERNATIONAL bodies or institutions sharing similar objectives with the Congress.  </h2>
              <div class="ce-title-line"></div>
              <br/>
              
            </div>
          </div>
          <div class="clearfix"></div>
          <!--end title-->



            </div>
            <!--end item-->

          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- end section -->
    


    
     <section class="sec-padding section-light">
  <div class="container">
  <div class="row slide-controls-2">
  
          
          <!--end title-->
          
 <!--<div id="owl-demo3" class="owl-carousel">
 <div class="item">         
<div class="col-md-6">
              <div class="text-box white padding-3 bmargin">
                <div class="icon-plain-msmall right text-primary"><span class="icon-pencil"></span></div>
                <div class="text-box-left less-padding-1">
                  <h5 class="uppercase less-mar2">Graphic design</h5>
                  <p><span class="text-primary">2001-2002</span> - Infomedia</p>
                  <p class="paddtop1">Lorem ipsum dolor sit amet consectetuer adipiscing elit Sus  Aliquam ornare hendrerit augue. </p>
                </div>
              </div>
            </div>
            <!-end item->
            
            <div class="col-md-6">
              <div class="text-box white padding-3 bmargin">
                <div class="icon-plain-msmall left text-primary"><span class="icon-laptop"></span></div>
                <div class="text-box-right less-padding-1">
                  <h5 class="uppercase less-mar2">UI Design</h5>
                  <p><span class="text-primary">2002-2004</span> - Infomedia</p>
                  <p class="paddtop1">Lorem ipsum dolor sit amet consectetuer adipiscing elit Sus  Aliquam ornare hendrerit augue. </p>
                </div>
              </div>
            </div>
            <!-end item->
            
            <div class="col-divider-margin-3"></div>
            
            <div class="col-md-6">
              <div class="text-box white padding-3 bmargin">
                <div class="icon-plain-msmall right text-primary"><span class="icon-lightbulb"></span></div>
                <div class="text-box-left less-padding-1">
                  <h5 class="uppercase less-mar2">Web Developer</h5>
                  <p><span class="text-yellow-4">2004-2005</span> - Infomedia</p>
                  <p class="paddtop1">Lorem ipsum dolor sit amet consectetuer adipiscing elit Sus  Aliquam ornare hendrerit augue. </p>
                </div>
              </div>
            </div>
            <!-end item->
            
            <div class="col-md-6">
              <div class="text-box white padding-3 bmargin">
                <div class="icon-plain-msmall left text-primary"><span class="icon-camera"></span></div>
                <div class="text-box-right less-padding-1">
                  <h5 class="uppercase less-mar2">Photographer</h5>
                  <p><span class="text-yellow-4">2006-20014</span> - Infomedia</p>
                  <p class="paddtop1">Lorem ipsum dolor sit amet consectetuer adipiscing elit Sus  Aliquam ornare hendrerit augue. </p>
                </div>
              </div>
            </div>
            <!-end item->
            
 </div>
 <!-end carousel item->
            
 </div>
 <!-end carousel item-> 
  
    </div>
  <!-end carousel-->  
             
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
<script type="text/javascript" src="js/ytplayer/jquery.mb.YTPlayer.js"></script> 
<script type="text/javascript" src="js/ytplayer/elementvideo-custom.js"></script> 
<script type="text/javascript" src="js/ytplayer/play-pause-btn.js"></script> 
<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> 
<script type="text/javascript">
          var tpj=jQuery;     
          var revapi4;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_4_1").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_4_1");
            }else{
              revapi4 = tpj("#rev_slider_4_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"auto",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"off",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  }
                  ,
                  
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"dione",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[640,640,650,400],
                lazyType:"none",
                parallax: {
                  type:"mouse",
                  origo:"slidercenter",
                  speed:2000,
                  levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                disableProgressBar:"on",
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script> 
<script type="text/javascript">
                var tpj = jQuery;

                var revapi280;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_280_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_280_1");
                    } else {
                        revapi280 = tpj("#rev_slider_280_1").show().revolution({
                            sliderType: "hero",
                            jsFileLocation: "../../revolution/js/",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {},
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1000, 1024, 778, 480],
                            gridheight: [700, 520, 420, 420],
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                type: "scroll",
                            },
                            shadow: 0,
                            spinner: "spinner2",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "60",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script> 
<script>
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })

  </script> 
<script src="js/parallax/parallax-background.min.js"></script> 
<script>
  (function ($) {
    $('.parallax').parallaxBackground();
  })(jQuery);
</script> 
<script src="js/jFlickrFeed/jflickrfeed.min.js"></script> 
<script>
$('#basicuse').jflickrfeed({
limit: 6,
qstrings: {
id: '133294431@N08'
},
itemTemplate: 
'<li>' +
'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
'</li>'
});
</script> 
<script src="js/tabs/js/responsive-tabs.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="js/cubeportfolio/main-mosaic3-cols3.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/owl-carousel/custom.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/accordion/js/smk-accordion.js"></script>
<script src="js/accordion/js/smk-accordion.js"></script>  
<script src="js/accordion/js/custom.js"></script> 
<script src="js/progress-circle/raphael-min.js"></script> 
<script src="js/progress-circle/custom.js"></script> 
<script src="js/progress-circle/jQuery.circleProgressBar.js"></script> 
<script src="js/functions/functions.js"></script>
</body>

</html>
