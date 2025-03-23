<!doctype html>
<html lang="en">
   <?php include("php_include/head.php");?>
   <body class="theme-cyan">
      <!-- Page Loader -->
      <?php include("php_include/loader.php");?>
      <!-- Overlay For Sidebars -->
      <div id="wrapper">
         <?php include("php_include/nav.php");?>
         <?php include("php_include/side_bar.php");?>
         <div id="main-content">
            <div class="container-fluid">
               <div class="block-header">
                  <div class="row">
                     <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Book Appointment</h2>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                           <li class="breadcrumb-item active">Book Appointment</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <br><br><br>
            <div class="row clearfix">
               <div class=" col-md-6 ">
                  <div class="card">
                     <div class="header">
                     </div>
                     <div class="body">
                        <form action="book_app.php" method="POST" style="padding: 30px 25px 25px 25px;">
                        <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                        <div class="row clearfix">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="name" placeholder=" Name">
                              </div>
                           </div>
                        </div>
                        <div class="row clearfix">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <input type="date" data-provide="datepicker" name="date" data-date-autoclose="true" class="form-control" placeholder="Date of Birth">
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group" >
                                 <select class="form-control show-tick" name="gender">
                                    <option value="">- Gender -</option>
                                    <option value="10">Male</option>
                                    <option value="20">Female</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group" >
                                 <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group" >
                                 <input type="text" name="moblie" class="form-control" placeholder="Phone">
                              </div>
                           </div>
                        </div>
                        <div class="row clearfix">
                           <div class="col-sm-12">
                              <div class="form-group" >
                                 <input type="text" name="services" class="form-control" placeholder="Services">
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="doctor">
                                    <option value="">- Doctor -</option>
                                    <option>Dr. John Smith</option>
                                    <option>Dr. Maryam Amiri</option>
                                    <option>Dr. Hossein Shams </option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group mb-3">                                        
                                 <input data-provide="datepicker" name="app_date" data-date-autoclose="true" class="form-control" placeholder="Appointment Date">
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <textarea rows="6" name="msg" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               if(isset($_POST['submit'])){
                  
                   $name      =      $_POST['name'];
               $moblie      =    $_POST['moblie'];
               $email      =      $_POST['email'];
               $services        =      $_POST['services'];
                $doctor      =      $_POST['doctor'];
                   $date      =    $_POST['date'];
               $app_date      =    $_POST['app_date'];
               $msg        =      $_POST['msg'];
                 
               
               $query_username=mysqli_query($con,"SELECT * FROM `appointment` WHERE `userid`='$userid'");
               
               $query=mysqli_query($con,"INSERT INTO `appointment`( `name`, `moblie`, `email`, `service`, `doctor`, `date`, `appointment_date`, `description`) VALUES 
               ('$name','$moblie','$email',' $services','$doctor','$date','$app_date ','$msg ')");
               
               if($query){
               echo"<script>alert('Inserted  is successful');window.location.assign('book_app.php');</script>";
               }
               else{
               echo"<script>alert('Insertion is failed');window.location.assign('book_app.php');</script>";
               }
               
               
               
               
               }else{
               
               }
               ?>
         </div>
      </div>
      <?php include("php_include/all_js.php");?>
   </body>
</html>