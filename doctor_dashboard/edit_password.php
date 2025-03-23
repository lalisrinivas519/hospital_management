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
              </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-6">
                    <div class="card" >
                        <div class="header">
                            <h2>Edit Password</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" method="post" novalidate>
							
                                <div class="form-group">
                                   
                                    <input type="hidden" placeholder="User ID" name="userid" value="<?php echo $userid; ?>" >
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" name="old" placeholder="Old Password" style="width: 290px; class="form-control" required>
                                </div>
								<div class="form-group">
                                   
                                    <input type="text" name="new" placeholder="New Password"  style="width: 290px; class="form-control" required>
                                </div>
								<div class="form-group">
                                    
                                    <input type="text" name="confirm" placeholder="Confirm Password"  style="width: 290px; class="form-control" required>
                                </div>
                                
                               
                               
                               
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
							
							<?php
include("php_include/connect.php");
if(isset($_POST['submit'])){
	$old=$_POST['old'];
	$new=$_POST['new'];
	$confirm=$_POST['confirm'];
	$userid=$_POST['userid'];
	$query=mysqli_query($con,"SELECT * FROM `doctor` WHERE userid='$userid'");
	$row_old_password=mysqli_fetch_array($query);
	$password=$row_old_password['password'];
	if($password===$old){
		if($new==$confirm){
			$update=mysqli_query($con,"UPDATE `doctor` SET password='$confirm' WHERE userid='$userid'");
			echo"<script>alert('updateA successful');window.location.assign('edit_password.php');</script>";
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
                </div>
          </div>
            
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src=" assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src=" assets/vendor/parsleyjs/js/parsley.min.js"></script>
    
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();

        // initialize after multiselect
        $('#basic-form').parsley();
    });
    </script>
</body>

</html>

