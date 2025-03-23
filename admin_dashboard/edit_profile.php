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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Edit Profile</h2>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                           <li class="breadcrumb-item active">Edit Profile</li>
                        </ul>
                     </div>
                     
                  </div>
               </div>

            </div><br><br><br>
			               <div class="row clearfix">
                  <div class="col-md-6" >
                     <div class="card" >
                        <div class="header">
                           <h2>Edit Profile </h2>
                        </div>
						<form method="POST" action="editprofile_process.php">
                        <div class="body">
                           <div class="row clearfix">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="hidden" class="form-control" name="userid" value="<?php echo $userid;?>">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                 </div>
                              </div>
							  
                           </div>
                           <div class="row clearfix">
                             <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email" required>
                                 </div>
                              </div>
                            <div class="col-sm-12">
                                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                 
                              </div>
                           </div>
                        </div>
						</form>
						<?php
if(isset($_POST['submit'])){
	$userid=$_POST['userid'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	
	
	
	
		$query=mysqli_query($con,"UPDATE `doctor` SET `userid`='$userid',`name`='$name',`mobile`='$mobile',`email`='$email' WHERE `userid`='$userid'");
		
		if($query){
			echo'<script>alert("updated succefully");window.location.assign*("edit_profile.php");</script>';
		}
		else{
			echo'<script>alert("Not updated");window.location.assign*("edit_profile.php");</script>';
		}
}
?>
						
						
                     </div>
                  </div>
               </div>
			   
         </div>
     <?php include("php_include/all_js.php");?>
   </body>
</html>