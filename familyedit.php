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
  <?php

if(isset($_POST['edit_btn']))
{
$id = $_POST['edit_id'];
$query = "SELECT * FROM family WHERE id='$id' ";
$query_run = mysqli_query($connection, $query);

foreach($query_run as $row)
{
 ?>
       <div class="col-md-10 mx-auto">
            <form  action="code.php"  method="POST"  enctype="multipart/form-data">
                <div class="form-group row">

                 <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="inputfn">የ ቤተሰብ አባወራ  ስም </label>
                        <input type="text" name="fname"  value="<?php echo $row['fname']?>" class="form-control" id="" placeholder="name">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputmn">የ ቤተሰብ እማወራ ስም </label>
                        <input type="text"  name="mname" value="<?php echo $row['lname']?>" class="form-control" id="inputState" placeholder=" name">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputln">የ ልጆች ስም</label>
                        <input type="text"  name="first" value="<?php echo $row['first']?>" class="form-control" id="inputState" placeholder=" #">
                    </div>
                 
                  

                </div>
                   
                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="second" value="<?php echo $row['second']?>" class="form-control" id="inputState" placeholder="#">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">የ ልጆች ስም </label>
                        <input type="text" name="third"  value="<?php echo $row['third']?>" class="form-control" id="inputAddressLine1" placeholder="#">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">  የ ልጆች ስም</label>
                        <input type="text"  name="fourth" value="<?php echo $row['fourth']?>" class="form-control" id="inputAddressLine1" placeholder="#">
                    </div>
                </div>
                <div class="form-group row">
                    
                    
                  




     
            
               
               
                <div class="col-sm-3">
                    <label for="inputState">የ ልጆች ስም</label>
                    

              
                    <input type="text" name="fiveth" value="<?php echo $row['fiveth']?>"  class="form-control" id="inputWebsite" placeholder="#">
                
                    </div>
                    <div class="col-sm-4">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="sixth" value="<?php echo $row['sixth']?>" class="form-control" id="inputState" placeholder="#">
                    </div>
                   
                    <div class="col-sm-3">
                    <label for="inputState">የ ልጆች ስም</label>
                    

              
                    <input type="text"  name="seventh" value="<?php echo $row['seventh']?>" class="form-control" id="inputWebsite" placeholder="#">
                
                    </div>
                </div>
               

                           <div class="form-group row">
                           
                         



                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="eight" value="<?php echo $row['eight']?>" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="nine"  value="<?php echo $row['nine']?>" class="form-control" id="inputState" placeholder="#">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="ten"  value="<?php echo $row['ten']?>" class="form-control" id="inputState" placeholder="#">
                    </div>
                           </div>
                           <div class="form-group row">
                           

                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text" name="eleven" value="<?php echo $row['eleven']?>" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    
                    <div class="col-sm-3">
                        <label for="inputState">የ ልጆች ስም</label>
                        <input type="text"  name="twelve" value="<?php echo $row['twelve']?>" class="form-control" id="inputState" placeholder="#">
                        
                    </div>
                   
                           </div>
               
                <button type="submit" name="updatefamily" class="btn btn-primary px-4 float-right">Save</button>
            </form>
            <?php

}

}
?>
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