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
                   
                    <div class="col-sm-3">
                    <label for="inputState">አገልግሎት</label>
                    <label>  አይነት</label>

                <select name="service"  class="form-control"  >
                <option value="">  </option>
                <option value="half"> ግማሽ ጊዜ</option>
                <option value="full"> ሙሉ ጊዜ  </option>
                <option value="none"> ምንም  </option>
                </select>
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">አገልግሎት</label>
                    <label>  ስም</label>

                <select name="servicename"  class="form-control"  >
                <option value="">  </option>
                <option value="quwayr"> ዝማሬ</option>
                <option value="evagelist"> ወንጌላዊ  </option>
                <option value="asher"> ዲያቆን  </option>
                <option value="Paster"> ፓስተር </option>
                <option value="musicandsound"> ሙዚቃ ተጫዋችእና ሳዉንድ ሲስተም   </option>
                <option value="guard"> ጥበቃ </option>
                <option value="teacher"> አስተማሪ  </option>
                <option value="natanim"> ናታኒም  </option>
                <option value="felloleader"> ህብረት መሪ  </option>
                </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="inputState">አገልግሎት የጀመረበት ቀን</label>
                        
                        <input type="date"  name="sdate" class="form-control" id="inputWebsite" placeholder="DATE">
                    </div> 
                </div>
                <div class="form-group row">
                   
                    
                    <div class="col-sm-1" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
                   
                         <input type="hidden" name="alive" value="yes">
                    
                     <label class="radio-inline"  name="alive" class="form-control">
                    
                    </div>
                    <div class="col-sm-1" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
                   
                      
                    <input type="hidden" name="leave" value="no">
                      
                     <label class="radio-inline"  name="leave" class="form-control">
                      
                    </div>
                    </div>
                    <div class="form-group row">      


<?php

$fell = "SELECT * FROM felloship";
$fell_run = mysqli_query($connection,$fell);

if(mysqli_num_rows($fell_run) > 0)
{
  ?>
  <div class="col-sm-3" >
<label class="radio-inline">ህብረት
                            </label>&nbsp;&ensp;

                            <select name="felloship"  class="form-control"  >
                            <option >  </option>

<?php
foreach($fell_run as $row)
{
 ?>
 <option value="<?php echo $row['id']; ?>"><?php echo $row['name'];?> </option>
 <?php
}
?>
</select>

</div>
<?php
}
 else{
   echo"no record";
 }

  ?>

<div class="col-sm-3">
                    <label for="inputState">የስልክ ቁጥር</label>
                    

              
                    <input type="number" name="pnumber" class="form-control" id="inputWebsite" placeholder="phone number">
                
                    </div>
                   <div class="col-sm-3">
                   <label for="inputstate">የ አባልነት አይዲ</label>
                   







                   <?php

$department = "SELECT * FROM records";
$dep_run = mysqli_query($connection,$department);

if(mysqli_num_rows($dep_run) > 0)
{
  ?>
  <div class="form-group">


<select name=" dep_list_id"  class="form-control"  required>
<option value=""> የ አባልነት አይዲ </option>

<?php
foreach($dep_run as $row)
{
 ?>
 <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?> -> <?php echo $row['fname'];?> </option>
 <?php
}
?>
</select>

</div>
<?php
}
 else{
   echo"no record";
 }

  ?>


                   </div>
            
                </div>
              
               

                          
                <button type="submit" name="insertservice" class="btn btn-primary px-4 float-right">Save</button>
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