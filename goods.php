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
            <button type="submit" name="deletethings_btn" class="btn btn-primary">Yes for Sure</button>
        </div>
      </form>

    </div>
  </div>
</div>    

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> ITEM NAME</label>
                <input type="text" name="itemname" class="form-control" placeholder="Enter Item">
            </div>
            <div class="form-group">
                <label>ITEM DESCIPTION</label>
                <input type="text" name="idesc" class="form-control" placeholder="Enter Item Description">
            </div>
           
            <div class="form-group">
                <label>QUNANTITY</label>
                <input type="text" name="qunantity" class="form-control" placeholder="ENter numbers">
            </div>
        

        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="goodssubmit" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>






<div class="modal fade" id="broken" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> ID</label>
                <input type="text" name="id" class="form-control" placeholder="Enter ID">
            </div>
            
            <div class="form-group">
                <label>BROKEN</label>
                <input type="text" name="broken" class="form-control" placeholder="ENter numbers">
            </div>
        

        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="brokensubmit" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>





<div class="modal fade" id="increased" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> ID</label>
                <input type="text" name="id" class="form-control" placeholder="Enter ID">
            </div>
            
            <div class="form-group">
                <label>new</label>
                <input type="text" name="increasednew" class="form-control" placeholder="ENter numbers">
            </div>
        

        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="increased" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">NIBRET
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
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
                  
               $query = " SELECT * FROM nibret";
               $query_run = mysqli_query($connection,$query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> ITEM</th>
            <th> ITEMDESCRIPTION</th>
            <th>QUNANTITY </th>
            <th>ACTION</th>
            <th>BROKEN</th>
            <th>ACTION</th>
            <th>NEW</th>
           
            
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
<?php

if(mysqli_num_rows($query_run)>0)
{
  while($row = mysqli_fetch_assoc($query_run))
  {
     ?>

   
          <tr>
            <td> <?php   echo $row['id'];   ?></td>
            <td> <?php   echo $row['item'];   ?></td>
            <td> <?php   echo $row['itemdesc'];   ?></td>
            <td> <?php   echo $row['amonut'];   ?></td>
            <td>
        <button  name="add" id="add" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#broken" >
 BROKEN
</button>



        </td>
            <td> <?php   echo $row['isssued'];   ?></td>
            
            <td>
 <button  name="add" id="add" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#increased" >
 NEW
</button>



        </td>
            <td> <?php   echo $row['increased'];   ?></td>
            <?php
           
      
            $idd= $row['id'];
          
          
                
           
            
        ?>
         



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
    <div class="table-responsive">
  

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>