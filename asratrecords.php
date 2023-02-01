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
            <button type="submit" name="deletegift" class="btn btn-primary">Yes for Sure</button>
        </div>
      </form>

    </div>
  </div>
</div>    


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">GIFTS
          


    </h6>
    
    <button class="btn btn-secondary" style="float:right;"><a href="generated.php?export=true">Export</a></button>
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
                  
               $query = " SELECT * FROM gift";
               $query_run = mysqli_query($connection,$query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> አስራት  አይዲ </th>
            <th>አባልነት አይዲ</th>
            <th>መስከረም </th>
            <th>ጥቅምት </th>
            <th>ህዳር</th>
            <th>ታህሳስ </th>
            <th> ጥር</th>
            <th>የካቲት </th>
            <th>መጋቢት </th>
            <th>ሚያዝያ</th>
            <th>ግንቦት</th>
            <th>ሰኔ</th>
            <th>ሀምሌ </th>
            <th>ነሀሴ </th>
          
            <th>edit</th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th> አስራት  አይዲ </th>
            <th>አባልነት አይዲ</th>
            <th>መስከረም </th>
            <th>ጥቅምት </th>
            <th>ህዳር</th>
            <th>ታህሳስ </th>
            <th> ጥር</th>
            <th>የካቲት </th>
            <th>መጋቢት </th>
            <th>ሚያዝያ</th>
            <th>ግንቦት</th>
            <th>ሰኔ</th>
            <th>ሀምሌ </th>
            <th>ነሀሴ </th>
          
            <th>edit</th>
            <th>DELETE </th>
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
            <td> <?php   echo $row['mid'];   ?></td>
            <td> <?php   echo $row['s'];  ?></td>
            <td> <?php   echo $row['oc'];   ?></td>
            <td> <?php   echo $row['no'];   ?></td>
            <td> <?php   echo $row['de'];   ?></td>
            <td> <?php   echo $row['ja'];   ?></td>
            <td> <?php   echo $row['fe'];  ?></td>
            <td> <?php   echo $row['ma'];   ?></td>
            <td> <?php   echo $row['ap'];   ?></td>
            <td> <?php   echo $row['may'];   ?></td>
            <td> <?php   echo $row['jun'];   ?></td>
            <td> <?php   echo $row['jul'];  ?></td>
            <td> <?php   echo $row['aug'];   ?></td>
            
          
           
          
            
            <td>
                <form action="gifftedit.php" method="post">
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
    <div class="table-responsive">
  

     
       

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');


?>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    
    
</body>

</html>