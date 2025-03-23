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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Paitent Descrptions</h2>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                           <li class="breadcrumb-item active">Paitent Descrptions</li>
                        </ul>
                     </div>
                     
                  </div>
               </div>

            </div><br><br><br>
			            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card patients-list">
                        <div class="header">
                          
                            <ul class="header-dropdown">
                                <li><a class="tab_btn" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Weekly">W</a></li>
                                <li><a class="tab_btn" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Monthly">M</a></li>
                                <li><a class="tab_btn active" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Yearly">Y</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs-new2">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#All">All</a></li>
                                
                            </ul>
                                
                            <!-- Tab panes -->
                            <div class="tab-content m-t-10 padding-0">
                                <div class="tab-pane table-responsive active show" id="All">
                                    <table class="table m-b-0 table-hover">
                                        <thead class="thead-dark">
                                            <tr>                                       
                                                <th>SL.NO</th>
                                                <th>Patients ID</th>
                                                <th>Name</th>
                                                <th>moblie</th>
                                                <th>email</th>
                                                <th>doctor</th>
                                                 <th>Last Visit</th>
                                                <th>Status</th>
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

		<br>	              
         </div>
      </div>
     <?php include("php_include/all_js.php");?>
   </body>
</html>