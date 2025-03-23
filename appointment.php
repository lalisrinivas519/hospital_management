<!DOCTYPE html>
<html lang="en">
   <?php include("php_include/head.php");?>
   <body>
      <div class="boxed_wrapper">
      <?php include("php_include/loader.php");?>
      <?php include("php_include/header.php");?>
      <?php include("php_include/moblie.php");?>
     
      <section class="page-title-two">
         <div class="title-box centred bg-color-2">
            <div class="pattern-layer">
               <div class="pattern-1" style="background-image: url(assets/images/shape/shape-70.png);"></div>
               <div class="pattern-2" style="background-image: url(assets/images/shape/shape-71.png);"></div>
            </div>
            <div class="auto-container">
               <div class="title">
                  <h1>Book Appointment</h1>
               </div>
            </div>
         </div>
         <div class="lower-content">
            <div class="auto-container">
               <ul class="bread-crumb clearfix">
                  <li><a href="index.php">Home</a></li>
                  <li>Book Appointment</li>
               </ul>
            </div>
         </div>
      </section>
	  <section class="appointment-section bg-color-3">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 left-column">
                        <div class="appointment-information">
                            <div class="title-box">
                                <h3>Appointment Information</h3>
                            </div>
                            <div class="inner-box">
                                <div class="single-box">
                                    <h3>Are You a New Patient?</h3>
                                    <div class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input" checked="">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Yes i have seen this doctor before</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">No i am a new patient</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box">
                                    <h3>Please Specify Your Sex</h3>
                                    <div class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input" checked="">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Male</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Female</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="information-form">
                                    <h3>Your Information:</h3>
                                    <form action="http://azim.commonsupport.com/Docpro/book-appointment.html" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Your name</label>
                                                <input type="text" name="name" placeholder="Enter your name" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Your email</label>
                                                <input type="email" name="email" placeholder="Enter your email" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" placeholder="Address" required="">
                                            </div>
                                           
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                <label>Zip</label>
                                                <input type="text" name="zip" placeholder="Zip" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                <label>Birthday</label>
                                                <input type="text" name="birthday" placeholder="Date" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <label>Note to the doctor (optional)</label>
                                                <textarea name="message" placeholder="Write your not..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="payment-information">
                                    <h3>Payment Information:</h3>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                            <div class="form-group">
                                                <label>Name on card</label>
                                                <input type="text" name="card_name" placeholder="Adam Smith" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 single-column">
                                            <div class="form-group">
                                                <label>Card number</label>
                                                <input type="text" name="card_number" placeholder="xxxx-xxxx-xxxx-xxxx" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 single-column">
                                            <div class="form-group">
                                                <label></label>
                                                <ul class="card-list clearfix">
                                                    <li><a href="#"><img src="assets/images/resource/card-1.png" alt=""></a></li>
                                                    <li><a href="#"><img src="assets/images/resource/card-2.png" alt=""></a></li>
                                                    <li><a href="#"><img src="assets/images/resource/card-3.png" alt=""></a></li>
                                                    <li><a href="#"><img src="assets/images/resource/card-4.png" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 single-column">
                                            <div class="form-group">
                                                <label>Expiration date</label>
                                                <input type="text" name="expiration_date" placeholder="mm/yy" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 single-column">
                                            <div class="form-group">
                                                <label>Security code</label>
                                                <input type="text" name="ccv" placeholder="CCV" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                            <div class="custom-check-box">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control material-checkbox">
                                                        <input type="checkbox" class="material-control-input">
                                                        <span class="material-control-indicator"></span>
                                                        <span class="description">I accept <a href="#">terms</a> and <a href="#">conditions</a> and general policy</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 right-column">
                        <div class="booking-information">
                            <div class="title-box">
                                <h3>Booking Summary</h3>
                            </div>
                            <div class="inner-box">
                                <div class="single-box">
                                    <ul class="clearfix">
                                        <li>Date<span>07/10/2020</span></li>
                                        <li>Time<span>09:30AM</span></li>
                                        <li>Doctor name<span>Dr. Agnes Ayres</span></li>
                                    </ul>
                                </div>
                                <div class="single-box">
                                    <ul class="clearfix">
                                        <li>General Consultation<span>$50</span></li>
                                        <li>Back Pain<span>$60</span></li>
                                    </ul>
                                </div>
                                <div class="total-box">
                                    <h5>Total<span>$110</span></h5>
                                </div>
                            </div>
                            <div class="btn-box">
                                <a href="#" class="theme-btn-one">Confirm and Pay<i class="icon-Arrow-Right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- appointment-section end -->


        <!-- agent-section -->
       
      <?php include("php_include/footer.php");?>
      <?php include("php_include/all_js.php");?>
   </body>
</html>