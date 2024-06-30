const navigationSection = document.querySelector('.header-section');
const footerSection = document.querySelector('.footer-section');

const headerContent = `
 <div class="container">
          <div  class="mod-menu">
            <div class="row">
              <style>
                @media screen and (max-width: 986px) {
                  .logo-main{
                    max-height: 75px !important;
                  }
                  
                }
              </style>
              <div class="col-sm-2"> <a href="index.html" title=""  class="logo style-2 mar-4"> <img class="logo-main"  src="images/logo/logo.png" alt=""> </a> </div>
              <div id="col-sm-10" class="col-sm-10">

                <style>
                  @media screen and (min-width: 700px) {
                    .col-sm-10{
                      margin-top: 36px;
                    }
                  }
                </style>
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
                   
                    <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                  </ul>
                  <div id="menu" class="collapse">
                    <ul class="nav navbar-nav">
                      <li class="right "> <a href="index.html">Home</a> <!--<span class="arrow"></span>-->
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
                      
                      <li class="right "> <a href="">About US</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                                <li> <a href="#">About Us</a> </li>
                              <li> <a href="board.html">Management </a> </li>
                              
                        </ul>
                      </li>
                      <li class="right"> <a href="#">Gallery</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                              <li> <a href="Gallery.html">Ngodoo Event Gallery</a> </li>
                              <!-- <li> <a href="nyc-document-gallery.php">NYC Document Gallery</a> </li> -->
                        </ul>
                      </li>
                      <!-- <li class="right"><a href="donate.php">Donate</a></li> -->
                      <li class="right"> <a href="#">News</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                              <li> <a href="news.html">Ngodoo Blog</a> </li>
                              <!-- <li> <a href="https://news.nyc.org.ng/">News Blog</a> </li> -->
                        </ul>
                      </li>
                      <li class="right"> <a href="contact.html">Contact</a>
                      
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
`;

const footerContent = `
 <div class="row">
          <div class="col-md-3 col-sm-12 colmargin clearfix margin-bottom">
            <div class="fo-map">
              <!-- <div class="footer-logo"><img height="80" src="images/ccc.png" alt=""/></div> -->
              <h4 class="text-white less-mar3 font-weight-5">Ngodoo Development Initiative</h4>
              <p class="text-light">At NDI, we aim to ensure a more equitable, sustainable future where women, children, and youth are respected through sustainable socio-political, economic, and environmental development. We address critical global challenges via Education, Environment, Gender inclusion, Human Health, Good Governance and Gender Inclusion </p>
            </div>
          </div>
          <!--end item-->
          
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <!-- <h4 class="text-white less-mar3 font-weight-5">About Us</h4>
            <div class="clearfix"></div>
            <br/>
            <ul class="footer-quick-links-4 white">
              <li><a href="#"><i class="fa fa-angle-right"></i> Introduction</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Aims and Objective</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Vision and Mission </a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>affiliations</a></li>
            </ul> -->
          </div>
          <!--end item-->
          
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="text-white less-mar3 font-weight-5">Quick Links</h4>
            <div class="clearfix"></div>
            <br/>
            <ul class="footer-quick-links-4 white">
              <li><a href="index.html"><i class="home fa fa-angle-right"></i> Home</a></li>
              <li><a href="about.html"><i class="about fa fa-angle-right"></i> About Us</a></li>
              <li><a href="gallery.html"><i class="gallery fa fa-angle-right"></i> Gallery</a></li>
              <li><a href="contact.html"><i class="contact fa fa-angle-right"></i> Contact</a></li>
              
            </ul>
          </div>
          <!--end item-->
          
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="text-white less-mar3 font-weight-5">Contact Us</h4>
            <div class="clearfix"></div>
            <br/>
            <address class="text-light">
            <strong class="text-white">Address:</strong> <br>
           No. 83, Benue Crescent, Wadata, Makurdi, Benue State-Nigeria.
            </address>
            <strong class="text-white">Address II:</strong> <br>
            <address class="text-light">
          NO. 9, William F. Kumuyi Street Gwarimpa Abuja, Nigeria.
            </address>
            <span class="text-light "><strong class="text-white">Phone:</strong> 0701 289 5121</span><br>
        
            <span  class="email text-light"><strong class="text-white">Email:</strong> info@ngodoodevelopment.com</span><br>
            <ul class="footer-social-icons white left-align icons-plain text-center">
              <li><a id="twitter" class="twitter" href="https://twitter.com/ngodoodev"><i class="fa fa-twitter"></i></a></li>
              <li><a id="facebook" href="https://web.facebook.com/ngodoo development initative"><i class="fa fa-facebook"></i></a></li>
             
              <!-- <li><a id="linkedin" href="https://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a></li> -->
              <li><a id="instagram" href="https://www.instagram.com/_ngo.doo"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <!--end item--> 
          
        </div>
`;
navigationSection.insertAdjacentHTML('afterbegin', headerContent);

footerSection.insertAdjacentHTML('afterbegin', footerContent);