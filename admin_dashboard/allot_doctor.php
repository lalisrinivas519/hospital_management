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
                     <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Doctor Allotment</h2>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Doctor Allotment</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <br><br><br>
         <div class="row clearfix">
            <div class="col-md-6">
               <div class="card" >
                  <div class="header">
                     <h2>Doctor Allotment  </h2>
                  </div>
				  <form method="POST" action="#">
                  <div class="body">
                     <div class="row clearfix">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="patient_id" placeholder="Patient Id" required>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="patient_name" placeholder="Patient Name" required>
                           </div>
                        </div>
                     </div>
                     <div class="row clearfix">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" name="dob" placeholder="Date of Birth" required>
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
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="alloted_doctor" placeholder="Alloted Doctor" required>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label>Patient Report</label>
                              <input type="file" class="form-control" name="Patient_report" required>
                           </div>
                        </div>
                      
                        <div class="col-sm-12">
                           <button type="submit" class="btn btn-primary">Submit</button>
                           <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include("php_include/all_js.php");?>
   </body>
</html>