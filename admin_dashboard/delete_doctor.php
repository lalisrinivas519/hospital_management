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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Delete Doctor </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Delete</li>
                            <li class="breadcrumb-item active">Doctor</li>
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
                <div class="col-lg-12">
                    
                    <div class="card">
                        <div class="header">
                            <h2>Delete Doctor</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 c_list">
                                     <thead class="thead-dark">
                                        <tr>
                                            
											<th>Sl No</th>
											<th>Doctor Id</th>
                                            <th>Doctor Name</th>
                                             <th>Mobile Number</th>
											 <th>Email</th>
											<th>Gender</th>
                                            <th>Department</th>
											 <th>Specification</th>
											  <th>Action</th>
											 
                                        </tr>
                                    </thead>
                                       </thead>
               <?php
                            $query=mysqli_query($con,"SELECT * FROM `doctor`");
                            while($row=mysqli_fetch_array($query)) {
                                $id=$row["id"];
                                $userid=$row["userid"];
                                $name=$row["name"];
								   $mobile=$row["mobile"];
								   $email=$row["email"];
								   $gender=$row["gender"];
								  
								    $department=$row["department"];
									 $speciality=$row["speciality"];
                                echo "<tr>
                                        <td style='border:1px solid black;'>$id</td>
                                        <td style='border:1px solid black;'>$userid</td> 
                                        <td style='border:1px solid black;'>$name</td> 
                                        
										<td style='border:1px solid black;'>$mobile</td>
										<td style='border:1px solid black;'>$email</td>
										<td style='border:1px solid black;'>$gender</td>
					<td style='border:1px solid black;'>$department</td>
					<td style='border:1px solid black;'>$speciality</td>
<td style='border:1px solid black;'>
                                <form method='post' action='#'>
                                    <input type='hidden' name='id' value='$id'>
                                    <button type='submit' class='btn btn-danger'>Delete</button>
                                </form>
                            </td>					
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










     <?php include("php_include/all_js.php");?>
   </body>
</html>