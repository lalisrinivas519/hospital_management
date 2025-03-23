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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add Medicine </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Medicine</li>
                            <li class="breadcrumb-item active">Add Medicine</li>
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
                            <h2>Add Medicine </h2>
                        </div>
						<?php
				include("php_include/connect.php");
					if(isset($_POST['edit_btn'])){
						$id = $_POST['edit_id'];
						$query = "SELECT * FROM `medicine` WHERE `id`='$id'";
						$query_run = mysqli_query($con,$query);
						
						foreach($query_run as $row){
				?>
						<form method="POST" action="edit_medicine.php">
                        <div class="body">
                           <div class="row clearfix">
						   <div class="col-sm-12">
                                 <div class="form-group">
								 <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                     <input type="text" class="form-control" name="medicine_id"  value="<?php echo $row['medicine_id'];?>" placeholder="Medicine ID" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="name"  value="<?php echo $row['name'];?>" placeholder="Medicine Name" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                   <input type="text" class="form-control" name="manufacture_date"  value="<?php echo $row['manufacture_date'];?>" placeholder="Manufactured Date" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="expiry_date" value="<?php echo $row['expiry_date'];?>" placeholder="Expiry Date" required>
                                 </div>
                              </div>
							   <div class="col-sm-12">
                                 <div class="form-group">
                                   <input type="text" class="form-control"  name="stock"  value="<?php echo $row['stock'];?>" placeholder="In stock"required>
                                 </div>
                              </div>
							   <div class="col-sm-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="mg" value="<?php echo $row['mg'];?>"  placeholder="MG" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                
                              </div>
                           </div>
                        </div>
						</form>
						
						<?php
						}
					}
				?>
						
                     </div>
					 <?php
   if(isset($_POST['submit'])) {
	   $id=$_POST['id'];
    $medicine_id=$_POST['medicine_id'];
    $name=$_POST['name'];
    $manufacture_date=$_POST['manufacture_date'];
    $expiry_date=$_POST['expiry_date'];
    $stock=$_POST['stock'];
	$mg=$_POST['mg'];
     
      $query_contact=mysqli_query($con,"UPDATE `medicine` SET `medicine_id`='$medicine_id',`name`='$name',`manufacture_date`='$manufacture_date',`expiry_date`='$expiry_date',`stock`='$stock',`mg`='$mg' WHERE `id`='$id'");
   	         echo '<script>alert("Update  Successful.");window.location.assign("medicine_list.php");</script>';								 
    }
?>
                  </div>
               </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<?php include("php_include/all_js.php");?>
   </body>
</html>

