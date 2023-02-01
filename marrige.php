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
               <h3> <label> ለ ወንድ  </label></h3>
                <input type="text" name="male_fname" class="form-control" placeholder=" የመጠሪያ ስም ">
            </div>
            
            <div class="col-sm-3">
                       <h3> <label >ለ ሴት</label></h3>
                        <input type="text"  name="female_fname" class="form-control" placeholder="የመጠሪያ ስም">
            </div> 
            </div> 

              <div class="form-group row">
            <div class="col-sm-3">
                        <label ></label>
                        <input type="text"  name="male_mname" class="form-control" placeholder="የአባት ስም">
            </div> 
            
          
            <div class="col-sm-3">
                <label> </label>
                <input type="text" name="female_mname" class="form-control" placeholder="የአባት ስም">
            </div>
            </div>


            <div class="form-group row">
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="male_lname" class="form-control" placeholder="የአያት ስም">
            </div>
           
            <div class="col-sm-3">
                <label> </label>
                <input type="text" name="female_lname" class="form-control" placeholder="የአያት ስም">
            </div>
            </div>


            <div class="form-group row">
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="male_age" class="form-control" placeholder="እድሜ">
            </div>
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="female_age" class="form-control" placeholder="እድሜ">
            </div>
            </div>
            <div class="form-group row">
             <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="male_where" class="form-control" placeholder="ኬት ቤተክርስቲያን ነው">
           
            </div>
           
         
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="female_where" class="form-control" placeholder="ኬት ቤተክርስቲያን ነው">
            </div>
            </div>

            <div class="form-group row">
            <div class="col-sm-3">
                <label> </label>
                <input type="text" name="male_phone" class="form-control" placeholder="ስልክ">
            </div>
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="female_phone" class="form-control" placeholder="ስልክ">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-3">
                <label> </label>
                <input type="date" name="date" class="form-control" >
            </div>
            </div>
           
            <button type="submit" name="marrige" class="btn btn-primary">Save</button>
        </div>
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