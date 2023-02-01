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
      <form action="code.php" method="POST"  enctype="multipart/form-data">  

        <div class="modal-body">

            <div class="form-group">
                <label> name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>desgination</label>
                <input type="text" name="desgination" class="form-control" placeholder="Enter desgination">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter descriptio">
            </div>
            <div class="form-group">
                <label>Upload images</label>
                <input type="file" name="file" id="file" class="form-control" placeholder="uploads">
            </div>
        

        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="faculity" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Faculity 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
            <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="deletemultiple"  style="" class="btn btn-danger"> DELETE MULTIPLE VALUES</button>
                </form>

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
                  
               $query = " SELECT * FROM faculity ORDER BY id";
               $query_run = mysqli_query($connection,$query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th> CHECK</th>
            <th> ID </th>
            <th> NAME </th>
            <th>DESIGNATION </th>
            <th>DESCRIPTION</th>
            <th>IMAGES</th>
            <th>EDIT </th>
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
          <td> 
          <input type="checkbox" onclick="toggleChecckbox(this)" value="<?php   echo $row['id'] ?>"  <?php echo $row['visible'] == 1 ? "checked" : "" ?>>
          </td>
            <td> <?php   echo $row['id'];   ?></td>
            <td> <?php   echo $row['name'];   ?></td>
            <td> <?php   echo $row['desgination'];   ?></td>
            <td> <?php   echo $row['description'];   ?></td>
           
            <td> <?php echo'<img src="upload/'.$row['file'].'" width="100px;" height="100px;" alt="file">'?></td>
            <td>
                <form action="faculityedit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php   echo $row['id'];   ?>">
                    <button  type="submit" name="edit_fac" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php   echo $row['id'];   ?>">
                  <button type="submit" name="deletefaculity_btn" class="btn btn-danger"> DELETE</button>
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
<!-- /.container-fluid -->

<script>
      function toggleChecckbox(box)
      {
                          var id = $(box).attr("value");

                          if($(box).prop("checked") == true)
                          {
                               var visible = 1;
                          }
                          else
                          {
                               var visible = 0;
                          }

                                      var data = {
                                        "search_data":1,
                                        "id":id,
                                        "visible":visible
                                      }
                          $.ajax({
                            type:"post",
                            url:"code.php",
                            data:data,
                           
                            success:function(response){
                               alert("Data Checked");
                            }
                          });
      }
</script>

<?php  
    
    include('includes/scripts.php');
    include('includes/footer.php');
   
   ?>
