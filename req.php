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


<form action="code.php" method="POST">
            
            
            <div class="form-group row">
            <div class="col-sm-3">
                <label> የተከፋይ ስም </label>
                <input type="text" name="laki" class="form-control" placeholder="#">
            </div>
            </div>
            
             <div class="form-group row">
            <div class="col-sm-3">
                <label> ምክንያት </label>
                <textarea cols="30" rows="10" name="request"class="form-control" placeholder="#"></textarea><br>
            </div>
             </div>
            <div class="form-group row">
            <div class="col-sm-3">
                <label> ብር </label>
                <input type="text" name="birr" class="form-control" placeholder="#">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-3">
                        <label >ቀን</label>
                        
                        <input type="date"  name="sdate" class="form-control" placeholder="DATE">
                    </div> 
                    </div> 
      
        <div >
           
            <button type="submit" name="requst" class="btn btn-primary">Save</button>
        </div>
      </form>
</div>
  





           <?php     
            $date = date ('F d, y, g: i a');
   echo $date;
     ?>

 <?php   
include('includes/scripts.php');
include('includes/footer.php');
?>