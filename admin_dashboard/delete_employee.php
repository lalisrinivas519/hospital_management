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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Employee</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Delete Employee </li>
                            
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
                            <h2>Delete Employee</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="fancy-checkbox">
                                                    <input class="select-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th>Name</th>                                    
                                            <th>Joining date</th>   
                                                                        
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 50px;">
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">John Smith</p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>20 march 2024</span>
                                            </td>
                                                                               
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                            </td>
                                            <td>                                            
                                              
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">Hossein Shams </p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>20 may 2023</span>
                                            </td>
                                                                           
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                            </td>
                                            <td>
                                           
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar9.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">Frank Camly</p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>20 january 2024</span>
                                            </td>
                                            
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                            </td>
                                            <td>
                                             
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar10.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">Tim Hank</p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>20 May 2024</span>
                                            </td>
                                            
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                            </td>
                                            <td>
                                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
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
