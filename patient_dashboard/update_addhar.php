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
                     <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Update Aaadhar</h2>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Update Aaadhar</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <br><br><br>
         <div class="tab-content padding-0">
            <div class="tab-pane active" id="Basic">
               <div class=" col-md-6 ">
                  <div class="card" >
                     <div class="body">
                        <form action="update_addhar.php" method="POST" style="padding: 30px 25px 25px 25px;">
                           <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                        <h4> Upload Aadhar Card</h4>
                        <br>
                        <div class="row clearfix">
                           <div class=" col-md-12">
                             
                              <div class="form-group">
                                 <input type="number"  placeholder="Aadhar Number" name="aadhar_no" class="form-control" required>
                              </div>
                             
                              <div class="card">
                                 <h6>Upload Aadhar front image</h6>
                                 <div class="body">
                                    <input type="file" name="aadhar_front" class="dropify">
                                 </div>
                              </div>
                              <div class="card">
                                 <h6>Upload Aadhar Back image</h6>
                                 <div class="body">
                                    <input type="file" name="aadhar_back" ="dropify">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button> &nbsp;&nbsp;
                     </div>
					 </form>
                  </div>
               </div>
            </div>
			
			<?php
				    if(isset($_POST['submit'])){
				       
				        $aadhar_no      =      $_POST['aadhar_no'];
				        $aadhar_front      =    $_POST['aadhar_front'];
				        $aadhar_back        =      $_POST['aadhar_back'];
				        
				       
				  $query=mysqli_query($con,"UPDATE `user` SET `aadhar_no`='$aadhar_no',`aadhar_front`='$aadhar_front',
				  `aadhar_back`='$aadhar_back' WHERE `userid`='$userid'");
               
               if($query){
               	echo'<script>alert("Update Successful");window.location.assign("update_addhar.php");</script>';
               }
               else{
               echo'<script>alert("Not updated");window.location.assign("update_addhar.php");</script>';
               }
               
               }
                                ?>
         </div>
      </div>
      <?php include("php_include/all_js.php");?>
   </body>
</html>