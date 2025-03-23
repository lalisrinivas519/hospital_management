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
							<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Bed Allotment</h2>
							<ul class="breadcrumb">
							   <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
							   <li class="breadcrumb-item active">Add Bed Allotment</li>
							</ul>
						 </div>
						 
					  </div>
				   </div>

				</div><br><br><br>
							   <div class="row clearfix">
					  <div class="col-md-6	">
						 <div class="card" >
							<div class="header">
							   <h2>Bed Allotment  </h2>
							</div>
							<form method="POST" action="#">
							<div class="body">
							   <div class="row clearfix">
								  <div class="col-sm-12">
									 <div class="form-group">
										<input type="text" class="form-control" name="doctor" placeholder="Doctor Name" required>
									 </div>
								  </div>
								  <div class="col-sm-12">
									 <div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Patient Name" required>
									 </div>
								  </div>
							   </div>
							   <div class="row clearfix">
								  <div class="col-sm-12">
									 <div class="form-group">
										<input type="text" data-provide="datepicker" name="dob" data-date-autoclose="true" class="form-control" placeholder="Date of Birth" required>
									 </div>
								  </div>
								  <div class="col-sm-12">
									 <div class="form-group">
										<select class="form-control show-tick" name="gender" required>
										   <option value="">- Gender -</option>
										   <option value="10">Male</option>
										   <option value="20">Female</option>
										   <option value="20">Others</option>
										   
										</select>
									 </div>
								  </div>
								   <div class="col-sm-12	">
									 <div class="form-group">
										<input type="text" class="form-control" name="mobile" placeholder="Phone" required>
									 </div>
								  </div>
								  <div class="col-sm-12">
									 <div class="form-group">
										<input type="text" class="form-control" name="bed" placeholder="Bed No" required>
									 </div>
								  </div>
								  <div class="col-sm-12">
									 <div class="form-group">
										<input type="text" class="form-control" name="status" placeholder="Bed Status" required>
									 </div>
								  </div>
								
								  <div class="col-sm-12">
									 <div class="form-group mt-3">
										<textarea rows="4" class="form-control no-resize" name="report" placeholder="Please type what you want..."></textarea>
									 </div>
								  </div>
								  <div class="col-sm-12">
									 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
									 <button type="submit" class="btn btn-outline-secondary">Cancel</button>
								  </div>
							   </div>
							</div>
							</form>
							<?php
   if(isset($_POST['submit'])) {
    $doctor=$_POST['doctor'];
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $bed=$_POST['bed'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$status=$_POST['status'];
	$report=$_POST['report'];
     
      $query_contact=mysqli_query($con,"INSERT INTO `allotment`(`name`, `bed`, `doctor`, `dob`, `gender`, `mobile`, `report`, `status`) 
	  VALUES ('$name','$bed','$doctor','$dob','$gender','$mobile','$report','$status')");
   	        if($query_contact){
   	        echo"<script>alert('Inserted successfully');window.assign.location('add_doctor.php');</script>";								 

	  }else{
	  }
   	        echo"<script>alert('Not Inserted successfully');window.assign.location('add_doctor.php');</script>";								 
    }
?>
						 </div>
					  </div>
				   </div>
			 </div>
		 <?php include("php_include/all_js.php");?>
	   </body>
	</html>