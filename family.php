<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>






<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  
  <!-- End of Topbar -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
    <?php
   if(isset($_SESSION['success'])&& $_SESSION['success']  !='')
   {
     echo '<h2>'.$_SESSION['success'].' </h2>';
     unset($_SESSION['success']);
    
   }


   if(isset($_SESSION['status'])&& $_SESSION['status']  !='')
   {
     echo '<h2>'.$_SESSION['status'].' </h2>';
     unset($_SESSION['status']);
    
   }
  ?>

       <div class="col-md-10 mx-auto">
            <form  action="code.php"  method="POST"  enctype="multipart/form-data">
                <div class="form-group row">


                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="inputfn">የ ቤተሰብ አባወራ  ስም </label>
                        <input type="text" name="fname" class="form-control" id="" placeholder="name">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputmn">የ ቤተሰብ እማወራ ስም </label>
                        <input type="text"  name="mname" class="form-control" id="inputState" placeholder=" name">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputln">የ ልጆች ስም</label>
                        <input type="text"  name="first" class="form-control" id="inputState" placeholder=" #">
                    </div>
                 
                  

                </div>
                   
                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="second" class="form-control" id="inputState" placeholder="#">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">የ ልጆች ስም </label>
                        <input type="text" name="third" class="form-control" id="inputAddressLine1" placeholder="#">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">  የ ልጆች ስም</label>
                        <input type="text"  name="fourth" class="form-control" id="inputAddressLine1" placeholder="#">
                    </div>
                </div>
                <div class="form-group row">
                    
                    
                  




     
            
               
               
                <div class="col-sm-3">
                    <label for="inputState">የ ልጆች ስም</label>
                    

              
                    <input type="text" name="fiveth" class="form-control" id="inputWebsite" placeholder="#">
                
                    </div>
                    <div class="col-sm-4">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="sixth" class="form-control" id="inputState" placeholder="#">
                    </div>
                   
                    <div class="col-sm-3">
                    <label for="inputState">የ ልጆች ስም</label>
                    

              
                    <input type="text"  name="seventh" class="form-control" id="inputWebsite" placeholder="#">
                
                    </div>
                </div>
               

                           <div class="form-group row">
                           
                         



                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="eight" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="nine" class="form-control" id="inputState" placeholder="#">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="ten" class="form-control" id="inputState" placeholder="#">
                    </div>
                           </div>
                           <div class="form-group row">
                           

                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="eleven" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    
                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text"  name="twelve" class="form-control" id="inputState" placeholder="#">
                        
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">ፎቶ</label>
                        <input type="file" name="image" class="form-control" id="inputState" placeholder="State">
                    </div>
                           </div>
               
                <button type="submit" name="insertfamily" class="btn btn-primary px-4 float-right">Save</button>
            </form>
        </div>


    </div>
   
  </div>
  <!-- /.container-fluid -->

 <!-- End of Main Content -->
              <?php     
            $date = date ('F d, y, g: i a');
   echo $date;
     ?>
<?php


include('includes/scripts.php');

include('includes/footer.php');
?>