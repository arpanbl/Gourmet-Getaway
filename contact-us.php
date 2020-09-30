<?php include 'header.php';?>
<main class="main">
   <!-- SECTION TOP -->
   <section class="section section-top patern gap-up-1-top">
      <div class="container text-center">
         <h1 class="wow fadeInLeft animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;">Contact Us</h1>
         <nav class="breadcrumb">
            <a class="breadcrumb-item wow fadeInLeft animated" data-wow-delay="1.3s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInLeft;" href="index.php">Home</a>
            <span class="breadcrumb-item active wow fadeInRight animated" data-wow-delay="1.6s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInRight;">Contact Us</span>
         </nav>
      </div>
   </section>
   <div class="container">
      <div class="row">
      	<div class="col-md-12 text-center">
        	<h2 style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; margin-bottom: 20px;" class="wow fadeInUp  animated" data-wow-delay="1.6s">Contact Us</h2>
        </div>
         <div class="col-md-7">
            <div class="contact-form">
               
               <form>
                  <div class="form-row">
                     <div class="form-group col-lg-12 ml-auto  wow fadeInUp    animated" data-wow-delay="0.6" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                        <input type="text" class="form-control contact-form-item" id="contact-name" placeholder="First-Name" required>
                     </div>
                     <div class="form-group col-lg-12 ml-auto wow fadeInUp    animated" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
                        <input type="email" class="form-control contact-form-item" id="contact-email" placeholder="E-mail" required>
                     </div>
                     <div class="form-group col-lg-12 ml-auto wow fadeInUp    animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
                        <input type="text" class="form-control contact-form-item" id="contact-email" placeholder="Mobile" required>
                     </div>
                     <div class="form-group col-lg-12 ml-auto wow fadeInUp   animated" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
                       
                        <select class="form-control contact-form-item">
                           <option value="" disabled selected> Please select your option</option>
                           <option>Media</option>
                           <option>Partnership</option>
                           <option>Sponsorship</option>
                           <option>Others</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-lg-12 ml-auto wow fadeInUp    animated" data-wow-delay="1.8s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;">
                        <textarea placeholder="Write a message" class="form-control contact-form-item" id="Message" rows="8" required></textarea>
                     </div>
                  </div>
                  <div class="contact-btn wow fadeInUp animated" data-wow-delay="2.1s" style="visibility: visible; animation-delay: 2.5s; animation-name: fadeInUp;">
                     <input type="submit" class="btn btn-primary btn-lg" value="Submit">
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-5">
            <div class="location-bar  wow fadeInUp    animated" data-wow-delay="0.6" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
               <div class="location-icon">
                  <i class="fa fa-map-marker bigl" aria-hidden="true"></i>
               </div>
               <div class="loc-text">
                  <h3>Address</h3>
                  <address>
                     E-145, C Scheme<br>
                     Ramesh Marg<br>
                     Jaipur, Rajasthan
                  </address>
               </div>
            </div>
            <div class="location-bar wow fadeInUp animated" data-wow-delay="0.9" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
               <div class="location-icon ">
                  <i class="fa fa-envelope-o bigl" aria-hidden="true"></i>
               </div>
               <div class="loc-text">
                  <h3 class="">Email</h3>
                  <address>
                     <a href="mailto:info@gourmetgetaway.in">info@gourmetgetaway.in</a>
                     <a href="mailto:dushyant.indian@gmail.com">dushyant.indian@gmail.com</a>
                  </address>
               </div>
            </div>
            <div class="social_link">
            	<h3 class="wow fadeInUp animated" data-wow-delay="0.9" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">Follow us on Social Media:</h3>	
                <a target="_blank" href="https://www.facebook.com/GourmetGetawayIndia/" class="wow fadeInUp animated" data-wow-delay="0.9" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/gourmet.getaway/" class="wow fadeInUp animated" data-wow-delay="1.2" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><i class="fa fa-instagram"></i></a>
                <a target="_blank" href="https://www.youtube.com/watch?v=eBPr-natveo" class="wow fadeInUp animated" data-wow-delay="1.5" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><i class="fa fa-youtube"></i></a>
            </div>
         </div>
      </div>
   </div>
</main>
<?php include 'footer.php';?>