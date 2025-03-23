<!doctype html>
<html lang="en">


<head>
<?php include("php_include/head.php")?>
</head>
<body class="theme-cyan">

<!-- Page Loader -->
<?php include("php_include/preloader.php")?>

<!-- Overlay For Sidebars -->

<div id="wrapper">


<?php include("php_include/nav.php")?>


  <?php include("php_include/sidebar.php")?>
  
  
<div id="main-content" class="profilepage_2 blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Upload Aadhar Card</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Docter Profile</li>
                            <li class="breadcrumb-item active"> Upload Aadhar Card</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>

            <div class="tab-content padding-0">

                        <div class="tab-pane active" id="Basic">
						 <div class=" col-md-6 ">
                            <div class="card" >
                                <div class="body">
								<form action="upload_aadhar.php" method="POST">
                                    <h4> Upload Aadhar Card</h4>
									<br>
                                    <div class="row clearfix">
									
                                       <div class=" col-md-12"> 
									   <input type="hidden" name="userid" value="<?php echo $userid;?>">
									   <div class="form-group">
                                    
                                    <input type="text" name="name" placeholder="Name As Per Aadhar Card" class="form-control" required>
                                </div>
								
									    <div class="form-group">
                                   
                                    <input type="number" name="aadhar_no" placeholder="Aadhar Number" class="form-control" required>
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
                            <input type="file" name="aadhar_back" class="dropify">
                        </div>
                    </div>
                                   
                    
                </div>
			</div>
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    
									</form>
									<?php
				    if(isset($_POST['submit'])){
				       $userid    =      $_POST['userid'];
					   $name    =      $_POST['name'];
				        $aadhar_no    =      $_POST['aadhar_no'];
				        $aadhar_front      =    $_POST['aadhar_front'];
				        $aadhar_back        =      $_POST['aadhar_back'];
				        
				       
				  $query=mysqli_query($con,"UPDATE `doctor` SET `aadhar_no`='$aadhar_no',`aadhar_front`='$aadhar_front',`aadhar_back`='$aadhar_back ' WHERE `userid`='$userid '");
               
               if($query){
               	echo'<script>alert("Update Successful");window.location.assign("upload_aadhar.php");</script>';
               }
               else{
               echo'<script>alert("Not updated");window.location.assign("upload_aadhar.php");</script>';
               }
               
               }
                                ?>
                                </div>
                            </div>
							</div>
                        </div>
            </div>
                    
               </div>
    </div>

</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src=" assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
$(function () {
    $('.knob').knob({
        draw: function () {
        }
    });
});
</script>
</body>

</html>