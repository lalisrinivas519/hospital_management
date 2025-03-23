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
                  <h1>Enqiry</h1>
               </div>
            </div>
         </div>
         <div class="lower-content">
            <div class="auto-container">
               <ul class="bread-crumb clearfix">
                  <li><a href="index.php">Home</a></li>
                  <li>Enqiry</li>
               </ul>
            </div>
         </div>
      </section>
	  <section class="registration-section bg-color-3">
            <div class="pattern">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-85.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-86.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="title-box">
                            <h3>Doctor Enguiry</h3>
                            
                        </div>
                        <div class="inner">
                            <form action="enquiry_process.php" method="POST" class="registration-form">
                                <div class="row clearfix">
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Userid</label>
                                        <input type="text" name="userid" placeholder="Enter your Userid" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Enter your Username" required="">
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="mobile" placeholder="Enter your Phone Number" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Your password" required="">
                                   <div class="col-lg-12 col-md-12 col-sm-12 form-group">
    <label>Confirm password</label>
    <input type="password" name="cpassword" placeholder="Confirm password" required="">
</div>


                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" name="submit" class="theme-btn-one">Enqiry Now<i class="icon-Arrow-Right"></i></button>
                                    </div>
                                </div>
                            </form>
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
      

      <?php include("php_include/footer.php");?>
      <?php include("php_include/all_js.php");?>
   </body>
</html>