<?php 
             include("php_include/connect.php");
			 if(isset($_POST['submit'])){
                         $userid=$_POST['userid'];
                        
                        $name=$_POST['name'];
                        $dob=$_POST['dob'];
                        $email=$_POST['email'];
                        $mobile=$_POST['mobile'];
                       
                                $query_username_check=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'");
                                $row=mysqli_fetch_array($query_username_check);
                          $staf=$row['userid'];
                           if($userid!=''){
                        				 if($staf == $userid){
                        					 
                        				$status='on';
                                          	         $query=mysqli_query($con,"UPDATE `admin` SET `name`='$name',`mobile`='$mobile',`email`='$email' WHERE `userid`='$userid'");
                                          	    
                                          	     if($query){
                                          	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("edit_profile.php");</script>';
                                          	     }else{
                                          	         echo '<script>alert("Something Went Wrong.");window.location.assign("edit_profile.php");</script>'; 
                                          	     }
                                          	     }else{
                        				  echo '<script>alert("invalid Staff Id");window.location.assign("edit_profile.php");</script>';
                        			 }
                                          	     }else{
                                          	         echo '<script>alert("Please Field All The Field.");window.location.assign("edit_profile.php");</script>';
                                          	     }   
                                      }
                        ?>