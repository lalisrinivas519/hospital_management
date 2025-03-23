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
                  <h1>Forgot Password</h1>
               </div>
            </div>
         </div>
         <div class="lower-content">
            <div class="auto-container">
               <ul class="bread-crumb clearfix">
                  <li><a href="index.php">Home</a></li>
                  <li>Forgot Password</li>
               </ul>
            </div>
         </div>
      </section>
      
        <section class="doctors-dashboard bg-color-3">
            
            <div class="right-panel">
                <div class="content-container">
                    <div class="outer-container">
                        <div class="add-listing change-password">
                            <div class="single-box">
                                <div class="title-box">
                                    <h3>Change Password</h3>
                                </div>
                                <div class="inner-box">
								<?php
								include("php_include/connect.php");
								$query=mysqli_query($con,"SELECT * FROM `user` ");
								$row=mysqli_fetch_array($query);
								$userid=$row['userid'];
								
								?>
                                    <form action="forgot_process.php" method="POST">
                                        <div class="row clearfix">
										
                                                
                                                <input type="hidden" name="userid" required="" value="<?php echo $userid; ?>">
                                            
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                <label>Old Password</label>
                                                <input type="password" name="old" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                <label>New Password</label>
                                                <input type="password" name="new" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="confirm" required="">
                                            </div>
											
											<div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                              <button type="submit" name="submit" class="theme-btn-one">Submit<i class="icon-Arrow-Right"></i></button>
                           </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- doctors-dashboard -->
      <?php include("php_include/footer.php");?>
      <?php include("php_include/all_js.php");?>
   </body>
</html>