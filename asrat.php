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
                <div class="col-sm-3">
                   <label for="inputstate">የ አባልነት አይዲ</label>
                   







                   <?php


$query = "SELECT * FROM records where leavestatus='no' && alive='yes'  ORDER BY id";
$dep_run = mysqli_query($connection,$query);

if(mysqli_num_rows($dep_run) > 0)
{
  ?>
  <div class="form-group">


<select name="mid"  class="form-control"  required>
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
                    <div class="col-sm-3">
                        <label for="inputmn">september</label>
                        <select name="september"  class="form-control" value="" >
                <option value="">  </option>
                <option value="september"> መስከረም </option>
              
                </select>
                         </div>
                    <div class="col-sm-3">
                        <label for="inputln">october</label>
                        <select name="october"  class="form-control" value="" >
                <option value="">  </option>
                <option value="october"> ጥቅምት   </option>
                
                </select>
                         </div>
                         
                    <div class="col-sm-3">
                        <label for="inputState">november</label>
                        <select name="november"  class="form-control" value="" >
                <option value="">  </option>
                <option value="november"> ህዳር  </option>
    
                </select>
                             
                    </div>
                    <div class="col-sm-3" >
                    <label class="radio-inline">december
                            </label>&nbsp;&ensp;
                    
                            <select name="december"  class="form-control" value="" >
                <option value="">  </option>
                <option value="december"> ታህሳስ   </option>
                
                </select>
                               
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">january</label>
                   

                <select name="january"  class="form-control" value="" >
                <option value="">  </option>
                <option value="january"> ጥር  </option>
            
                </select>
                       
                   
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">  february</label>
                        <select name="february"  class="form-control" value="" >
                <option value="">  </option>
                <option value="february"> የካቲት  </option>
               
                </select>
                         </div>
                         
                    <div class="col-sm-3">
                    <label for="inputState">march</label>
                    
                    <select name="march"  class="form-control" value="" >
                <option value="">  </option>
                <option value="march"> መጋቢት   </option>
                
                </select>
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">april</label>
                   
                
                    <select name="april"  class="form-control" value="" >
                <option value="">  </option>
                <option value="april">ሚያዝያ  </option>
                 </select>
                       
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">may</label>
                    

                    <select name="may"  class="form-control" value="" >
                <option value="">  </option>
                <option value="may"> ግንቦት   </option>
                
                </select>
                       
                    </div>
                   
                    <div class="col-sm-3">
                    <label for="inputState">june</label>
                   

                    <select name="june"  class="form-control" value="" >
                <option value="">  </option>
                <option value="june"> ሰኔ  </option>
                
                </select>
                       
                       
                   
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">july</label>
                        <select name="july"  class="form-control" value="" >
                <option value="">  </option>
                <option value="july"> ሀምሌ  </option>
                </select>
                               </div>
                               <div class="col-sm-3">
                        <label for="inputState">august</label>
                        <select name="august"  class="form-control" value="" >
                <option value="">  </option>
                <option value="august"> ነሀሴ   </option>
               
                </select>
                          </div>

                </div>
                    
                  
                    
            
                <div class="form-group row">
                 
                 

                    <div class="col-sm-1" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
                   
                         <input type="hidden" name="restore" value="no">
                    
                     <label class="radio-inline"  name="alive" class="form-control">
                    
                    </div>
                
                    




     
            
                </div>
            
               

          

                          
               
                <button type="submit" name="insertgift" class="btn btn-primary px-4 float-right">Save</button>
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