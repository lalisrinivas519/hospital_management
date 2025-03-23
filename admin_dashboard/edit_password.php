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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Edit Password</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Doctor Profile</li>
                            <li class="breadcrumb-item active">Edit Password</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Visitors</small>
                                <h6 class="mb-0 mt-1"><i class="icon-user"></i> 1,784</h6>
                            </div>
                            <span class="bh_visitors float-right">2,5,1,8,3,6,7,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Visits</small>
                                <h6 class="mb-0 mt-1"><i class="icon-globe"></i> 325</h6>
                            </div>
                            <span class="bh_visits float-right">10,8,9,3,5,8,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Chats</small>
                                <h6 class="mb-0 mt-1"><i class="icon-bubbles"></i> 13</h6>
                            </div>
                            <span class="bh_chats float-right">1,8,5,6,2,4,3,2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                  <div class="col-md-6">
                     <div class="card">
                        <div class="header">
                            <h2>Edit Password </h2>
                        </div>
						<form method="POST" action="edit_password.php">
                        <div class="body">
                           <div class="row clearfix">
						   <input type="hidden" name="userid" value="<?php echo $userid;?>">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="old"  placeholder="Old Password" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="new"  placeholder="New Password" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="confirm"  placeholder="Confirm Password" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
                                 
                              </div>
                           </div>
                        </div>
						</form>
						<?php
								if(isset($_POST['submit'])){
									$userid=$_POST['userid'];
									$old=$_POST['old'];
									$new=$_POST['new'];
									$confirm=$_POST['confirm'];
									
									$query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'");
									$row_old_password=mysqli_fetch_array($query);
									$password=$row_old_password['password'];
									if($password===$old){
										if($new==$confirm){
											$update=mysqli_query($con,"UPDATE `admin` SET `password`='$confirm' WHERE `userid`='$userid'");
											echo"<script>alert('update successful');window.location.assign('edit_password.php');</script>";
										}
										else{
											echo"<script>alert('old and new doesn't match');window.location.assign('edit_password.php');</script>";
										}
									}
									else{
										echo"<script>alert('old password doesnt match');window.location.assign('edit_password.php');</script>";
									}
									
								}
								else{
								}
								?>
                     </div>
                  </div>
               </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<?php include("php_include/all_js.php");?>
   </body>
</html>