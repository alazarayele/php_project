<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>




<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data" id="form-code">

        <div class="modal-body">

           <h4>Are you sure you want to delete</h4>
        
<input type="hidden" name="id">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
            <button type="submit" name="deletefelloship_btn" class="btn btn-primary">Yes for Sure</button>
        </div>
      </form>

    </div>
  </div>
</div>    






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
                    <label for="inputState">የ ህብረት ስም  </label>
                   

                    <input type="text"  name="fname" class="form-control" id="inputWebsite" placeholder="Felloship name">
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የ ህብረት ቀን </label>
                    

                    <input type="text"  name="fdate" class="form-control" id="inputWebsite" placeholder="Felloship Date">
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የ ህብረት ሰዓት </label>
                 

                    <input type="text"  name="ftime" class="form-control" id="inputWebsite" placeholder="Felloship Time">
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የ ህብረት </label>
                    <label>  አይነት</label>

                    <input type="text"  name="ftype" class="form-control" id="inputWebsite" placeholder="Felloship Type">
                   
                    </div>

                    <div class="col-sm-3">
                    <label for="inputState">የ ህብረት </label>
                    <label>  ቦታ </label>

                    <input type="text"  name="fplace" class="form-control" id="inputWebsite" placeholder="Felloship Place">
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የ ህብረት መሪ</label>
                    <label>  ስም</label>
                    <input type="text"  name="fleader" class="form-control" id="inputWebsite" placeholder="Felloship leader">
                   
                
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የ ሰዎች ብዛት </label>
                   
                    <input type="text"  name="fnumber" class="form-control" id="inputWebsite" placeholder="number of people">
                   
                
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



  


                     
            
                </div>
              
               

                          
                <button type="submit" name="InsertFellow" class="btn btn-primary px-4 float-right">Save</button>
            </form>
        </div>

        <div class="table-responsive">
    <?php
                  
               $query = " SELECT * FROM felloship";
               $query_run = mysqli_query($connection,$query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> name</th>
            <th>leader </th>
            <th>number of people</th>
            <th>date </th>
            <th>time </th>
            <th> place </th>
            <th> type</th>
            
 
          </tr>
        </thead>
        <tfoot>
        <tr>
        <th> ID </th>
            <th> name</th>
            <th>leader </th>
            <th>number of people</th>
            <th>date </th>
            <th>time </th>
            <th> place </th>
            <th> type</th>
            
           
 
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
            <td> <?php   echo $row['name'];   ?></td>
            <td> <?php   echo $row['leader'];   ?></td>
            <td> <?php   echo $row['numberofpeople'];   ?></td>
            <td> <?php   echo $row['date'];   ?></td>
            <td> <?php   echo $row['time'];   ?></td>
            <td> <?php   echo $row['place'];   ?></td>
            <td> <?php   echo $row['type'];   ?></td>
           
            
             
            
            <td>
                <form action="fellowshipedit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php   echo $row['id'];   ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>


            <td>
                 
            <input type="hidden" name="duedelete" value=" <?php echo $row['id'];?>">
  <button type="submit" class="btn btn-danger deletebtn" data-id=" <?php echo $row['id'];?>" onclick="confirmDelete(this);">
              DELETE
  </button>
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
 

      <script>
function confirmDelete(self){
  var id = self.getAttribute("data-id");
  document.getElementById("form-code").id.value = id;
  $("#deletemodal").modal("show");

}




</script>
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