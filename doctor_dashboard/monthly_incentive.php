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
 
 <?php include ("php_include/sidebar.php")?> 
  
  <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Monthly Incentive</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Salary Kit</li>
                            <li class="breadcrumb-item active">Monthly Incentive</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Monthly Incentive</h2>
                        </div>
                        <div class="body">
                            <table id="mainTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Departments</th>
                                        <th>Monthly Incentive</th>
                                       
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

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src=" assets/vendor/editable-table/mindmup-editabletable.js"></script> <!-- Editable Table Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/editable-table.js"></script>
</body>

</html>
