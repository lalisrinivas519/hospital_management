<!doctype html>
<html lang="en">


<head>
<?php include("php_include/head.php")?>
</head>
<body class="theme-cyan">

    <!-- Page Loader -->


<!-- Overlay For Sidebars -->

<div id="wrapper">
<?php include("php_include/nav.php")?>


<?php include("php_include/sidebar.php")?>
  
  <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>  Appointment Description</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Appointment</li>
							<li class="breadcrumb-item active"> Appointment Description</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>

            <div class="row clearfix">
                <div class=" col-md-6 ">
                    <div class="card">
					<form action="present_appointment.php" method="POST">
                        <div class="header">
						
                            <h2> Appointment Description</h2>
						
                        </div>
                        <div class="body">
                            <div class="row clearfix">
							<input type="hidden" name="userid" value="<?php echo $userid;?>">
							
                                <div class="col-sm-12">
								
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"  placeholder=" Name">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row clearfix">
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="gender">
                                            <option value="">- Gender -</option>
                                            <option value="male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="Service">
                                            <option value="">- Service -</option>
                                            <option>Select Service</option>
                                            <option>Dental Checkup</option>
                                            <option>Full Body Checkup</option>
                                            <option>ENT Checkup</option>
                                            <option>Heart Checkup</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="Doctor">
                                            <option value="">- Doctor -</option>
                                            <option>Dr. John Smith</option>
                                            <option>Dr. Maryam Amiri</option>
                                            <option>Dr. Hossein Shams </option>
                                        </select>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group mb-3">                                        
                                        <input data-provide="datepicker" name="date" data-date-autoclose="true" class="form-control" placeholder="Date">
                                    </div>
        
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">                                        
                                        <input data-provide="datepicker" name="appointment_date" data-date-autoclose="true" class="form-control" placeholder="Appointment Date">
                                    </div>
        
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea rows="6" name="description" class="form-control no-resize" placeholder="Plese type the Description..."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                   
                                </div>
                            </div>
                        </div>
						</form>
						<?php
								if(isset($_POST['submit'])){
									$userid=$_POST['userid'];
									$name=$_POST['name'];
									$gender=$_POST['gender'];
									$mobile=$_POST['mobile'];
									$email=$_POST['email'];
									$Service=$_POST['Service'];
									$Doctor=$_POST['Doctor'];
									$date=$_POST['date'];
									$appointment_date=$_POST['appointment_date'];
									$description=$_POST['description'];
									
									
									
									$query=mysqli_query($con,"INSERT INTO `description`(`name`, `gender`, `mobile`, `email`, `Service`, `Doctor`, `date`, `appointment_date`, `description`) VALUES ('$name','$gender','$mobile','$email','$Service','$Doctor','$date','$appointment_date','$description')");

									
									if($query){
										echo'<script>alert("updated succesfully");window.location.assign("present_appointment.php");</script>';
									}
									else{
										echo'<script>alert("not updated");window.location.assign("present_appointment.php");</script>';
									}
								}
								
								?>
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src=" assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>
