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
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <?php
                  
                  $query = " SELECT * FROM records";
                  $query_run = mysqli_query($connection,$query);
       ?>
      <table class="table table-bordered" id="dataTable" width="200%" cellspacing="0">
        <thead>
        <tr>
            <th> ID </th>
            <th> fname</th>
            <th>mname </th>
            <th>lname</th>
            <th>gender </th>
            <th>work </th>
            <th> house </th>
            <th> wstatus</th>
            <th    style="width:200px;">wdate d dada</th>
            <th>mtype</th>
            <th>bdate </th>
            <th>bplace </th>
            <th> address </th>
            <th> phonenumber</th>
            <th>mdate </th>
            <th>nochildren</th>
            <th>service </th>
            <th>leavestatus </th>
            <th> alive </th>
            <th> felloship</th>
            <th>photo </th>
            <th>levelofschool</th>
            <th>schooltype </th>
            <th>dayspermonth </th>
            <th> age </th>
            <th> addressofstreet</th>
            <th>economic </th>
            <th>emergency</th>
            <th>emergencyphonenumber</th>
            <th>edit</th>
            <th>delete</th>
 
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th> ID </th>
            <th> fname</th>
            <th>mname </th>
            <th>lname</th>
            <th>gender </th>
            <th>work </th>
            <th> house </th>
            <th> wstatus</th>
            <th>wdate</th>
            <th>mtype</th>
            <th>bdate </th>
            <th>bplace </th>
            <th> address </th>
            <th> phonenumber</th>
            <th>mdate </th>
            <th>nochildren</th>
            <th>service </th>
            <th>leavestatus </th>
            <th> alive </th>
            <th> felloship</th>
            <th>photo </th>
            <th>levelofschool</th>
            <th>schooltype </th>
            <th>dayspermonth </th>
            <th> age </th>
            <th> addressofstreet</th>
            <th>economic </th>
            <th>emergency</th>
            <th>emergencyphonenumber</th>
            <th>edit</th>
            <th>delete</th>
 
          </tr>
        </tfoot>
        <tbody>
        <?php

if(mysqli_num_rows($query_run)>0)
{
  while($row = mysqli_fetch_assoc($query_run))
  {
     ?>

   
          <tr>
            <td> <?php   echo $row['id'];   ?></td>
            <td> <?php   echo $row['fname'];   ?></td>
            <td> <?php   echo $row['mname'];   ?></td>
            <td> <?php   echo $row['lname'];   ?></td>
            <td> <?php   echo $row['gender'];   ?></td>
            <td> <?php   echo $row['work'];   ?></td>
            <td> <?php   echo $row['house'];   ?></td>
            <td> <?php   echo $row['wstatus'];   ?></td>
            <td style="width:900px;">   <?php   echo $row['wdate'];   ?></td>
            <td> <?php   echo $row['mtype'];   ?></td>
            <td> <?php   echo $row['bdate'];   ?></td>
            <td> <?php   echo $row['bplace'];   ?></td>
            <td> <?php   echo $row['address'];   ?></td>
            <td> <?php   echo $row['phonenumber'];   ?></td>
            <td> <?php   echo $row['mdate'];   ?></td>
            <td> <?php   echo $row['nochildren'];   ?></td>
            <td> <?php   echo $row['service'];   ?></td>
            <td> <?php   echo $row['leavestatus'];   ?></td>
            <td> <?php   echo $row['alive'];   ?></td>
            <td> <?php   echo $row['felloship'];   ?></td>
            <td> <?php echo'<img src="upload/department/'.$row['photo'].'" width="100px;" height="100px;" alt="file">'?></td>
          
            <td> <?php   echo $row['levelofschool'];   ?></td>
            <td> <?php   echo $row['schooltype'];   ?></td>
            <td> <?php   echo $row['dayspermonth'];   ?></td>
            <td> <?php   echo $row['age'];   ?></td>
            <td> <?php   echo $row['addressofstreet'];   ?></td>
            <td> <?php   echo $row['economic'];   ?></td>
            <td> <?php   echo $row['emergency'];   ?></td>
            <td> <?php   echo $row['emergencyphonenumber'];   ?></td>
            
            
            <td>
                <form action="departedit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php   echo $row['id'];   ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php   echo $row['id'];   ?>">
                  <button type="submit" name="deletedep_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
        

          <?php
  }
}
else{
  echo "NO RECORD FOUND";
}


?>  
          
        </tbody>
      </table>
    </div>
  </div>
</div>

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
                    <label for="inputState">??????????????? ?????????</label>
                    

                <select name="mtype"  class="form-control"  >
                <option value="">   </option>
                <option value="marraige"> ??? ?????? ???????????? </option>
                <option value="changing_living_place">  ??? 5?????? ?????????   </option>
                <option value="Chaning_church_membership"> ??? 10??? ?????????   </option>
                <option value="changing_country"> ??? 12??? ????????? </option>
                <option value="New_Christian">  10 +1 </option>
                <option value="Baptized"> 10 +2 </option>
                <option value="back_again"> 10 +3 </option>
                <option value="is_not_membership_of_any_church">  ??????????????????   </option>
                
                <option value="Baptized"> ????????????  </option>
                <option value="back_again"> ?????????  </option>
                <option value="New_Christian">  ??????????????? </option>
                <option value="Baptized">???????????????</option>
             
                <option value="is_not_membership_of_any_church">  ??????????????????   </option>
                <option value="is_not_membership_of_any_church">  ??????????????? ?????????????????? ??????????????? ?????????????????? </option>
                </select>
                    </div>

                    <div class="col-sm-4">
                    <label for="inputState">??????????????? ????????????</label>
                    

                <select name="mtype"  class="form-control"  >
                <option value="">   </option>
                <option value="agriculture"> ???????????? </option>
                <option value="engineering">  ?????????????????????     </option>
                <option value="medicine"> ?????? ????????? </option>
                <option value="accounting">??????????????????   </option>
                <option value="bussines">  ???????????? </option>
                <option value="communication"> ??????????????????   </option>
                <option value="computer_science"> ????????????  ????????????  </option>
                <option value="teaching">  ???????????????  </option>
                <option value="law">  ??????   </option>
                <option value="sport"> ????????????   </option>
                <option value="social_science"> ?????????????????????   </option>
                <option value="natural_science"> ???????????? ????????????  </option>
                <option value="other">  ????????????????????? ??????  </option>
                </select>
                    </div>
                    <div class="col-sm-4">
                    <label for="inputState">????????? ????????? ?????? ????????? ???????????????</label>
                    

                <select name="mtype"  class="form-control"  >
                <option value="">   </option>
                <option value="verylow">  ??? ??????</option>
                <option value="low">   ??? ??????-??? ??????    </option>
                <option value="moderate"> ??? ??????-??? ??????   </option>
                <option value="good"> ??? ??????-??? ??????  </option>
                <option value="verygood">   ??? ??????-??? ??????   </option>
                <option value="excellent">  ??? ??????-???????????? </option>
                <option value="outstanding"> ?????? ??????-????????? </option>
                <option value="fulltimeservice">   ????????????-????????? </option>
                </select>
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="inputState">?????????</label>
                        <input type="text" name="age" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-4">
                        <label for="inputState">??? ??????????????? ????????????</label>
                        <input type="text" name="address" class="form-control" id="inputState" placeholder="#">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputState">??????????????? ???????????? ???????????????</label>
                        <input type="text" name="economic" class="form-control" id="inputState" placeholder="#">
                    </div>
                          
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputState">??? ????????? ?????? ????????? ??????</label>
                        <input type="text" name="emergency" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-6">
                        <label for="inputState">??? ????????? ?????? ?????????  ????????? ?????????</label>
                        <input type="text" name="phonenumber" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                          
                    </div>
                    
                    
  
                     </div>


                <button type="submit" name="insertrecord" class="btn btn-primary px-4 float-right">Save</button>
            </form>
        </div>
              </div>
    </div>
   
  </div>
  <!-- /.container-fluid -->

 <!-- End of Main Content -->
     
<?php


include('includes/scripts.php');

include('includes/footer.php');
?>