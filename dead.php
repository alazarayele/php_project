<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Department Name</label>
                <input type="text" name="deptname" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label>description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter SubTitle">
            </div>
            
            <div class="form-group">
                <label>IMAGES</label>
                <input type="file" name="image" class="form-control" placeholder="ENter LINKS">
            </div>
        

        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="deptssave" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">ACADEMIcS
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>


    </h6>
  </div>

  <div class="card-body">

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

    <div class="table-responsive">
    <?php
                  
     $query = "SELECT * FROM records where leavestatus='no' && alive='no'  ORDER BY id";
             
          
               $query_run = mysqli_query($connection,$query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> fname</th>
            <th>mname </th>
            <th>lname</th>
            <th>gender </th>
          
            
            <th> wstatus</th>
            
            <th>mtype</th>
            <th>bdate </th>
            <th>bplace </th>
            <th> address </th>
         
            <th>mdate </th>
            <th>nochildren</th>
            <th>service </th>
          
       
            <th> felloship</th>
            <th>photo </th>
         
        
            <th> age </th>
            <th> addressofstreet</th>
         
        
           
 
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th> ID </th>
            <th> fname</th>
            <th>mname </th>
            <th>lname</th>
            <th>gender </th>
            <th> wstatus</th>
            <th>mtype</th>
            <th>bdate </th>
            <th>bplace </th>
            <th> address </th>
            <th>mdate </th>
            <th>nochildren</th>
            <th>service </th>
            <th> felloship</th>
            <th>photo </th>
          <th> age </th>
            <th> addressofstreet</th>
         
        
        
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
          
            <td> <?php   echo $row['wstatus'];   ?></td>
         
            <td> <?php   echo $row['mtype'];   ?></td>
            <td> <?php   echo $row['bdate'];   ?></td>
            <td> <?php   echo $row['bplace'];   ?></td>
            <td> <?php   echo $row['address'];   ?></td>
         
            <td> <?php   echo $row['mdate'];   ?></td>
            <td> <?php   echo $row['nochildren'];   ?></td>
            <td> <?php   echo $row['service'];   ?></td>
         
            <td> <?php   echo $row['felloship'];   ?></td>
            <td> <?php echo'<img src="upload/department/'.$row['photo'].'" width="100px;" height="100px;" alt="file">'?></td>
          
    
            <td> <?php   echo $row['age'];   ?></td>
            <td> <?php   echo $row['addressofstreet'];   ?></td>
           
            
            
       
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
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>