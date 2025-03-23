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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Claim Slip</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Salary Kit</li>
                            <li class="breadcrumb-item active">Claim Slip</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Claim Slip</h2>
                        </div>
                        <div class="body">
                            <button type="button" class="btn  btn-simple btn-sm btn-default btn-filter" data-target="all">Todos</button>
                            <button type="button" class="btn  btn-simple btn-sm btn-success btn-filter" data-target="approved">Approved</button>
                            <button type="button" class="btn  btn-simple btn-sm btn-warning btn-filter" data-target="suspended">Suspended</button>
                            <button type="button" class="btn  btn-simple btn-sm btn-info btn-filter" data-target="pending">Pending</button>
                            <button type="button" class="btn  btn-simple btn-sm btn-danger btn-filter" data-target="blocked">Blocked</button>
                            <div class="table-responsive m-t-20">
                                <table class="table table-filter table-hover m-b-0">   
<thead class="thead-dark">
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Age</th>
                                          
                                            <th>Status</th>
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

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
        $(document).ready(function () {
            $('.star').on('click', function () {
                $(this).toggleClass('star-checked');
            });
    
            $('.ckbox label').on('click', function () {
                $(this).parents('tr').toggleClass('selected');
            });
    
            $('.btn-filter').on('click', function () {
                var $target = $(this).data('target');
                if ($target != 'all') {
                    $('.table tr').css('display', 'none');
                    $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
                } else {
                    $('.table tr').css('display', 'none').fadeIn('slow');
                }
            });
        });
    </script>
</body>

</html>
