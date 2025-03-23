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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Edit Password</h2>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                           <li class="breadcrumb-item active">Edit Password</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <br><br><br>
            <div class="row clearfix">
               <div class="col-md-6">
                  <div class="card">
                     <div class="header">
                     </div>
                     <div class="body">
                        <form action="edit_password.php" method="POST" style="padding: 30px 25px 25px 25px;">
                           <input type="text" name="userid" value="<?php echo $userid; ?>">
                           <div class="row clearfix">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="old_password" style="width: 290px; " placeholder="Old Password">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="new_password" style="width: 290px; " placeholder="New Password">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="confrim_password" style="width: 290px; " placeholder="Confirm Password">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               include("php_include/connect.php");
               if(isset($_POST['submit'])){
               	$old_password=$_POST['old_password'];
               	$new_password=$_POST['new_password'];
               	$confrim_password=$_POST['confrim_password'];
               	$userid=$_POST['userid'];
               	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
               	$row_old_password=mysqli_fetch_array($query);
               	$password=$row_old_password['password'];
               	if($password===$old_password){
               		if($new_password==$confrim_password){
               			$update=mysqli_query($con,"UPDATE `user` SET `password`='$confrim_password'  WHERE `userid`='$userid'");
               			echo"<script>alert('update successful');window.location.assign('edit_password.php');</script>";
               		}
               		else{
               			echo"<script>alert('old and new doesn't match');window.location.assign('edit_password.php');</script>";
               		}
               	}
               	else{
               		echo"<script>alert('old password doesn't match');window.location.assign('edit_password.php');</script>";
               	}
               }
               else{
               }
               ?>
         </div>
      </div>
      <?php include("php_include/all_js.php");?>
   </body>
</html>