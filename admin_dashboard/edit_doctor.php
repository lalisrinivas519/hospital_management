<!doctype html>
<html lang="en">
   <?php include("php_include/head.php");?>
   <body class="theme-cyan">
      <!-- Page Loader -->
      <?php include("php_include/loader.php")?>
      <!-- Overlay For Sidebars -->
      <div id="wrapper">
      <?php include("php_include/nav.php")?>
       <?php include("php_include/sidebar.php")?>
  
  

       <div id="main-content">
            <div class="container-fluid">
               <div class="block-header">
                  <div class="row">
                     <div class="col-lg-6 col-md-8 col-sm-12">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                           <li class="breadcrumb-item active">Edit Doctor</li>
                        </ul>
                     </div>
                     
                  </div> 
				  <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i>
				  </a> Edit Doctor</h2>
               </div>

            </div><br><br><br>
			               <div class="row clearfix">
                  <div class="col-md-6" >
                     <div class="card" >
                        <div class="header">
                           <h2>Edit Doctor Profile </h2>
                        </div>
						<?php
				include("php_include/connect.php");
					if(isset($_POST['edit_btn'])){
						$id = $_POST['edit_id'];
						$query = "SELECT * FROM `doctor` WHERE `id`='$id'";
						$query_run = mysqli_query($con,$query);
						
						foreach($query_run as $row){
				?>
						<form method="POST" action="edit_doctor.php">
                        <div class="body">
                           <div class="row clearfix">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $row['userid'];?>" placeholder=" Doctor Id">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $row['name'];?>" name="name" placeholder="Doctor Name" required>
                                 </div>
                              </div>
							   <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="date" data-provide="datepicker" data-date-autoclose="true" class="form-control" value="<?php echo $row['dob'];?>"  placeholder="Date of Birth" required>
                                 </div>
                              </div>
                           </div>
                           <div class="row clearfix">
                             
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <select class="form-control show-tick" name="gender" value="<?php echo $row['gender'];?>" required>
                                       <option value="">- Gender -</option>
                                       <option value="10">Male</option>
                                       <option value="20">Female</option>
									   <option value="10">Others</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>" placeholder="Mobile Number" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" placeholder="Enter Your Email" required>
                                 </div>
                              </div>
							  <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="designation" value="<?php echo $row['designation'];?>" placeholder="Designation" required>
                                 </div>
                              </div>
							    <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="speciality" value="<?php echo $row['speciality'];?>" placeholder="Speciality" required>
                                 </div>
                              </div>
                            <div class="col-sm-12">
                                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            
                              </div>
                           </div>
                        </div>
						<?php
						}
					}
				?>
                     </div>
					 <?php
   if(isset($_POST['submit'])) {
	   $id=$_POST['id'];
    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
	$department=$_POST['department'];
      $speciality=$_POST['speciality'];
	  
      $query_contact=mysqli_query($con,"UPDATE `doctor` SET `userid`='$userid',`name`='$name',`mobile`='$mobile',`email`='$email',`gender`='$gender',`dob`='',`qualification`='',`department`='$department',`speciality`='$speciality', WHERE `id`='$id'");
   	         echo '<script>alert("Update  Successful.");window.location.assign("doctor_list.php");</script>';								 
    }
?>
                  </div>
               </div>
         </div>
     <?php include("php_include/all_js.php");?>
   </body>
</html>

