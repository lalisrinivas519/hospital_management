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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>View Appointments</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Appointments</li>
                            <li class="breadcrumb-item active">View Appointments</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>View Appointments</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Patient Id</th>
											 <th>Name</th>
                                            <th>Adress</th>
											<th>moblie</th>
                                            <th>email</th>
                                            <th>Department</th>
                                            <th>Doctor</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <?php
                            include("php_include/connect.php");
                            $query=mysqli_query($con,"SELECT * FROM `appointment` ");
                            while($row=mysqli_fetch_array($query)) {
								$id=$row["id"];
                                $userid=$row["userid"];
                                $name=$row["name"];
                                $moblie=$row["moblie"];
                                $email=$row["email"];
                                $doctor=$row["doctor"];
								 $date=$row["date"];
								 $status=$row["status"];
                                
                                echo "<tr>
								 <td style='border:1px solid black;'>$id</td>
                                        <td style='border:1px solid black;'>$userid</td>
                                        <td style='border:1px solid black;'>$name</td> 
                                        <td style='border:1px solid black;'>$moblie</td> 
                                        <td style='border:1px solid black;'>$email</td> 
                                        <td style='border:1px solid black;'>$doctor</td> 
                                        <td style='border:1px solid black;'>$date</td> 
										<td style='border:1px solid black;'>$status</td> 
                                    </tr>";
                            }
                        ?>
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
    $('.sparkbar').sparkline('html', { type: 'bar' });
</script>
</body>

</html>
