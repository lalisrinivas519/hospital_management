<!doctype html>
<html lang="en">
   <?php include("php_include/head.php");?>
   <body class="theme-cyan">
      <div id="wrapper">
      <?php include("php_include/nav.php")?>
       <?php include("php_include/sidebar.php")?>
  
       <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Nurse List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Table</li>
                            <li class="breadcrumb-item active">Nurse List</li>
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
				<br><br>
                    <div class="card">
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-dark">
                                        <tr><th>Sl No</th>
										<th>Nurse Id</th>
                                            <th>Nurse Name</th>
                                            <th>Mobile Number</th>
											 <th>Email</th>
											<th>Gender</th>
                                            <th>Department</th>
											 <th>Specification</th>
											  <th>Edit</th>
											   <th>Delete</th>
                                        </tr>
                                    </thead>
									 <?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM employee WHERE designation='nurse'");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
											$userid = $row['userid'];
											$name = $row['name'];
											$mobile = $row['mobile'];
											$email = $row['email'];
										$gender =$row['gender'];
											$department = $row['department'];
											$speciality =$row['speciality'];
										?>
                                        	<tr>
                                            	<td><?php echo $i ?></td>
                                                <td><?php echo $userid ?></td>
												<td><?php echo $name ?></td>
													<td><?php echo $mobile ?></td>
												<td><?php echo $email ?></td>
                                                <td><?php echo $gender ?></td>
                                                <td><?php echo $department ?></td>
												<td><?php echo $speciality ?></td>
												 <td>
													<form method="post" action="edit_employee.php">
														<input type="hidden" name="edit_id" value="<?php echo $id; ?>">
														<input type="submit" name="edit_btn" value="Edit" class="btn btn-primary" >
													</form>
												</td>
                                               <td>
													<form method="post" action="nurse_list.php">
													    <input type="hidden" name="id" value="<?php echo $id?>">
														<input type="submit" name="delete_id" value="Delete" class="btn btn-danger" >
													</form>
												</td>
												
                                            </tr>
                                        <?php
											$i++;
										}
									}
									else{
									?>
                                    	<tr>
                                        	<td colspan="2">Sorry you have no List.</td>
                                        </tr>
                                    <?php
									}
								?>
                  </tbody>
            </table>
			
			<?php
    if(isset($_POST['delete_id'])){
        $id=$_POST['id'];
        $query=mysqli_query($con,"DELETE FROM `employee` WHERE `id`='$id'");
               echo '<script>alert("Delete Successful.");window.location.assign("nurse_list.php");</script>';
       
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
