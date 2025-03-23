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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Apply Claim</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Salary Kit</li>
							<li class="breadcrumb-item active"> Apply Claim</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> Apply Claim</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <option value="">- Gender -</option>
                                            <option value="10">Male</option>
                                            <option value="20">Female</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <option value="">- Service -</option>
                                            <option>Select Service</option>
                                            <option>Dental Checkup</option>
                                            <option>Full Body Checkup</option>
                                            <option>ENT Checkup</option>
                                            <option>Heart Checkup</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <option value="">- Doctor -</option>
                                            <option>Dr. John Smith</option>
                                            <option>Dr. Maryam Amiri</option>
                                            <option>Dr. Hossein Shams </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">                                        
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Appointment Date">
                                    </div>
        
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea rows="6" class="form-control no-resize" placeholder="Plese type the Descrition..."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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

<script src=" assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>
