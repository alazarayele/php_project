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


       <?php

       if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM gift WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
            <form  action="code.php"  method="POST"  enctype="multipart/form-data">
                <div class="form-group row">
                <input  type="hidden" value="<?php echo $row['id'] ?>" name=id>

                <div class="form-group row">
               
                    <div class="col-sm-3">
                        <label for="inputmn">september</label>
                        <select name="september"  class="form-control"  >
                <option value="">  </option>
                <option value="september" <?php  if($row["s"]=='september'){echo "selected";}?> >መስከረም </option>
              
                </select>
                         </div>
                    <div class="col-sm-3">
                        <label for="inputln">october</label>
                        <select name="october"  class="form-control" value="" >
                <option value="">  </option>
                <option value="october" <?php  if($row["oc"]=='october'){echo "selected";}?> > ጥቅምት   </option>
                
                </select>
                         </div>
                         
                    <div class="col-sm-3">
                        <label for="inputState">november</label>
                        <select name="november"  class="form-control" value="" >
                <option value="">  </option>
                <option value="november"  <?php  if($row["no"]=='november'){echo "selected";}?> > ህዳር  </option>
    
                </select>
                             
                    </div>
                    <div class="col-sm-3" >
                    <label class="radio-inline">december
                            </label>&nbsp;&ensp;
                    
                            <select name="december"  class="form-control" value="" >
                <option value="">  </option>
                <option value="december"   <?php  if($row["de"]=='december'){echo "selected";}?> > ታህሳስ   </option>
                
                </select>
                               
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">january</label>
                   

                <select name="january"  class="form-control" value="" >
                <option value="">  </option>
                <option value="january"  <?php  if($row["ja"]=='january'){echo "selected";}?>  > ጥር  </option>
            
                </select>
                       
                   
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">  february</label>
                        <select name="february"  class="form-control" value="" >
                <option value="">  </option>
                <option value="february"    <?php  if($row["fe"]=='february'){echo "selected";}?>  > የካቲት  </option>
               
                </select>
                         </div>
                         
                    <div class="col-sm-3">
                    <label for="inputState">march</label>
                    
                    <select name="march"  class="form-control" value="" >
                <option value="">  </option>
                <option value="march"    <?php  if($row["ma"]=='march'){echo "selected";}?>  > መጋቢት   </option>
                
                </select>
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">april</label>
                   
                
                    <select name="april"  class="form-control" value="" >
                <option value="">  </option>
                <option value="april"   <?php  if($row["ap"]=='april'){echo "selected";}?>  >ሚያዝያ  </option>
                 </select>
                       
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">may</label>
                    

                    <select name="may"  class="form-control" value="" >
                <option value="">  </option>
                <option value="may"   <?php  if($row["may"]=='may'){echo "selected";}?>  > ግንቦት   </option>
                
                </select>
                       
                    </div>
                   
                    <div class="col-sm-3">
                    <label for="inputState">june</label>
                   

                    <select name="june"  class="form-control" value="" >
                <option value="">  </option>
                <option value="june"  <?php  if($row["jun"]=='june'){echo "selected";}?>  > ሰኔ  </option>
                
                </select>
                       
                       
                   
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">july</label>
                        <select name="july"  class="form-control" value="" >
                <option value="">  </option>
                <option value="july"   <?php  if($row["jul"]=='july'){echo "selected";}?>  > ሀምሌ  </option>
                </select>
                               </div>
                               <div class="col-sm-3">
                        <label for="inputState">august</label>
                        <select name="august"  class="form-control" value="" >
                <option value="">  </option>
                <option value="august"   <?php  if($row["aug"]=='august'){echo "selected";}?>  > ነሀሴ   </option>
               
                </select>
                          </div>

                </div>
                    
                  
                    
            
                <div class="form-group row">
                 
                 

                  
                    




     
            
                </div>
            
               

          

                          
               
                <button type="submit" name="updategift" class="btn btn-primary px-4 float-right">Save</button>
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