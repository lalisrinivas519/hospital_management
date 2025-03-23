<!DOCTYPE html>
<html lang="en">
   <?php include("php_include/head.php");?>
   <body>
      <div class="boxed_wrapper">
      <?php include("php_include/loader.php");?>
      <?php include("php_include/header.php");?>
      <?php include("php_include/moblie.php");?>
     
      <section class="page-title-two">
         <div class="title-box centred bg-color-2">
            <div class="pattern-layer">
               <div class="pattern-1" style="background-image: url(assets/images/shape/shape-70.png);"></div>
               <div class="pattern-2" style="background-image: url(assets/images/shape/shape-71.png);"></div>
            </div>
            <div class="auto-container">
               <div class="title">
                  <h1>Login</h1>
               </div>
            </div>
         </div>
         <div class="lower-content">
            <div class="auto-container">
               <ul class="bread-crumb clearfix">
                  <li><a href="index.php">Home</a></li>
                  <li>Login</li>
               </ul>
            </div>
         </div>
      </section>
      
      <section class="registration-section bg-color-3">
         <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/banner/banner-bg-2.jpg);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/banner/banner-bg-2.jpg);"></div>
         </div>
         <div class="auto-container">
           
               <center>
            <div style="width:420px; background:#708ce736; color:; position:relative; border-radius:20px; padding:30px 40px;">
               
               <form action="login_process.php" method="POST">
                  <h1 style="font-size:34px; color:black;" >LOGIN NOW?</h1>
                  <div  style="width:100%; height:50px; margin:30px 0;" >
                     <input type="text" placeholder="Userid" name="userid" required style="width:100%; height:100%; background:#708ce732; border:none; outline:none; border: 2px solid rgba(255,255,255,.2); border-radius:40px; padding:20px 45px 20px 20px;  " >
                     <!--<i class='bx bxs-user' style="position:absolute; right:50px; top:30%; transform:translateY(-50%); font-size:20px; color:black;"></i>-->
                     <i class='bx bx-user' style="position:absolute; right:55px; top:27%; transform:translateY(-50%); font-size:20px; color:black;"></i>
                  </div>
				   
                  <div style="width:100%; height:50px; margin:30px 0;">
                     <input type="password" placeholder="password" name="password" required style="width:100%; height:100%; background:#708ce732; border:none; outline:none; border: 2px solid rgba(255,255,255,.2); border-radius:40px; padding:20px 45px 20px 20px;" >
                     <!--<i class='bx bxs-lock-alt' style="position:absolute; right:50px; top:49%; transform:translateY(-50%); font-size:20px; color:black;"></i>-->
                     <i class='bx bx-lock-alt'  style="position:absolute; right:55px; top:47%; transform:translateY(-50%); font-size:20px; color:black;" ></i>
                  </div>
                  <div  style=" text-align:center; font-size:14.5px; margin:-15px 0 15px;">
                     <!--<label ><input type="checkbox" style="accent-color:white; margin-right:5px;" >Remember Me</label>-->
                     <a href="forgot_password.php"><u  style="color:red;">Forgot Password?</u></a>
                  </div>
                  <button type="submit" class="btn btn-success"  name="submit" style="width:80%; height:45px; background:#007aff; border:none; outline:none; border-radius:40px; box-shadow:0 0 10px rgba(0,0,0,.1); cursor:pointer: font-size:16px; font-weight:600; ">LOGIN</button>
                 
               </form>
            </div>
         </center>
            
         </div>
      </section>
      <?php include("php_include/footer.php");?>
      <?php include("php_include/all_js.php");?>
   </body>
</html>