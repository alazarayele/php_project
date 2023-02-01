
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"  >
    <link rel="stylesheet" type="text/css" href="../globalcss/globalcss.css">

   

   

                                               <title>login page</title>

                                               
  </head>
 


  <body style=" background: url(../images/back.jpeg);">

          
    <div class="container-fluide " >
  
    	<div class=row>
    		<div class="col-sm-4">
    			col1
    		</div>
                 <div class="col-sm-4">
                  
    			<form class="form-container" method="POST" action="code.php" >

          <h4 style="padding:0px 13vh;">login form</h4>
         
          <div class="text-danger"></div>
          <img src="../images/login.gif" class="rounded-circle "  margin="auto";  style="width:150px; height:150px; margin: 5px 75px; ">

          <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='' )

                    {
                        
                        echo $_SESSION['status'];
                        unset($_SESSION['status']);
                    }
                      
                      ?>
  <div class="form-group">
    <label for="InputEmail1">Email address</label>
    <input type="email" class="form-control" name="name"  placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="remember"  class="form-check-input" >
    <label class="form-check-label" for="exampleCheck1">Remember ME</label>
  </div>
  <button type="submit" name="login_btn"  class="btn btn-success btn-block">Submit</button>
</form>
    		</div>
    		<div class="col-sm-4">
    			col2
    		</div>


   
    	</div>



    </div>

    
  </body>
</html>



<?php

include('includes/scripts.php');
?>
