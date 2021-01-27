<?php include 'header.php'; ?>


      <!--   search bar popup start   -->
      <div class="search-popup">
         <form class="search-form" action="#">
            <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
         </form>
         <div class="search-popup-overlay" id="searchOverlay"></div>
         <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
      </div>
      <!--   search bar popup end   -->     


      <!--  breadcrumb start  -->
      <div class="breadcrumb-area contact-breadcrumb-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <div class="breadcrumb-txt">
                     <span>Contact</span>
                     <h1>keep in touch with us for help </h1>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-overlay"></div>
      </div>
      <!--  breadcrumb end  -->


      <!--   contact section start    -->
      <div class="contact-section">
         <div class="container">
            <!--  contact infos start  -->
            <div class="contact-infos">
               <div class="row no-gutters">
                  <div class="col-lg-4 single-info-col">
                     <div class="single-info wow fadeInRight" data-wow-duration="1s">
                        <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                        <div class="info-txt">
                           <p>143 castle road 517</p>
                           <p>district, kiyev port south Canada</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 single-info-col">
                     <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                        <div class="info-txt">
                           <p>+1 872 205-5831</p>
                        
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 single-info-col">
                     <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                        <div class="info-txt">
                           <p>info@pedalexpresslogistics.com</p>
                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--  contact infos end  -->
            <!--  contact form and map start  -->
            <div class="contact-form-section">
               <div class="row">
                  <div class="col-lg-6">
                     <span class="title">Contact</span>
                     <h2 class="subtitle">KEEP IN TOUCH</h2>
                     <form action="#">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-element"><input type="text" placeholder="Name"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-element"><input type="text" placeholder="Email"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-element"><input type="text" placeholder="Phone"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-element"><input type="text" placeholder="Subject"></div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-element">
                                 <textarea name="comment" cols="30" rows="10" placeholder="Comment"></textarea>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-element">
                                 <button type="submit"><span>Submit</span></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-lg-6">
                     <div class="map-wrapper">
                        <div id="map"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!--  contact form and map end  -->
         </div>
      </div>
      <!--   contact section end    -->


      <?php include 'footer.php'; ?>