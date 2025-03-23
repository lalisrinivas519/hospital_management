<!doctype html>
<html lang="en">


<head>
<title>Doctor_Dashboard</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="  assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="  assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="  assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="  assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="  assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="  assets/vendor/sweetalert/sweetalert.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
<style>
    td.details-control {
    background: url('  assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('  assets/images/details_close.png') no-repeat center center;
    }
</style>
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Monthly Pay Slips</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Salary Kit</li>
                            <li class="breadcrumb-item active">Monthly Pay Slips</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Monthly Pay Slips </h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            
                                            <th>Salary date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                   
                               </table>
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

<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="  assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="  assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="  assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="  assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="  assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="  assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 


<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>
