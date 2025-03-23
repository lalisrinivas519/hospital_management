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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Upload PAN Card</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Docter Profile</li>
                            <li class="breadcrumb-item active"> Upload PAN Card</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="tab-content padding-0 ">
<div class="col-md-6 ">
                        <div class="tab-pane active" id="Basic">
                            <div class="card" >
                                <div class="body">
								<form action="upload_pan.php" method="POST">
                                    <h4> Upload PAN Card</h4>
									<br>
                                    <div class="row clearfix">
									
                                       <div class="col-lg-6 col-md-12">
									   <input type="hidden" name="userid" value="<?php echo $userid;?>">
									    <div class="form-group">
                                   
                                    <input type="text" name="pan_no" style="width: 290px; placeholder="Enter PAN Number" class="form-control" required>
                                </div>
								 
                    <div class="card">
                       
                        <div class="body">
                            <input type="file" name="pan_image" style="width: 290px; class="dropify">
                        </div>
                    </div>
                                   
                    
                </div>
			</div>
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                  
                                </div>
								</form>
								
								<?php
								if(isset($_POST['submit'])){
									$userid=$_POST['userid'];
									$pan_no=$_POST['pan_no'];
									$pan_image=$_POST['pan_image'];
									
									$query=mysqli_query($con,"UPDATE `doctor` SET `pan_no`='$pan_no',`pan_image`='$pan_image' WHERE `userid`='$userid'");
									
									if($query){
										echo'<script>alert("update Sucessfully");window.location.assign("upload_pan.php");</script>';
									}
									else{
										echo'<script>alert("not updated");window.location.assign("upload_pan.php");</script>';
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