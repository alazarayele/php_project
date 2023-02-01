<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');

?>



    

    

<div class="modal fade" id="acceptmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

           <h4>Are you sure you want to accept</h4>
        
<input type="hidden" name="id">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
            <button type="submit" name="accept" class="btn btn-primary">Yes for Sure</button>
        </div>
      </form>

    </div>
  </div>
</div> 
  


 

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data" id="form-delete">

        <div class="modal-body">

           <h4>Are you sure you want to Reject</h4>
        
<input type="hidden" name="id">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
            <button type="submit" name="del" class="btn btn-primary">Yes for Sure</button>
        </div>
      </form>

    </div>
  </div>
</div> 
  


  


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">የልዩ ልዩ ወጪ ማጽደቂያ </h6>
  </div>

  <div class="card-body">

  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=' ')
     {
       echo '<h2 class= "bg-primary text-white">'.$_SESSION['success'].'</h2>';
       unset($_SESSION['success']);
     }
     if(isset($_SESSION['status']) && $_SESSION['status'] !=' ')
     {
       echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
       unset($_SESSION['status']);
     }

  ?>

    <div class="table-responsive">

   <?php
   $connection = mysqli_connect("localhost","root","","snv");

     $query = "SELECT rq_id,rq_laki_id,  rq_des, birr,date,statuse,name,tekcbaydate FROM req";
     $query_run = mysqli_query($connection, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th> id </th>
            <th> የተከፋይ ስም </th>
            <th>ምክንያት</th>
            <th>ብር</th>
            <th>ቀን</th>
            <th>ሁኔታ</th>
            <th>ACCEPT </th>
            <th>DELETE </th>
            <th>የአጽዳቂ ስም ማስገቢያ </th>
            <th> የአጽዳቂ ስም </th>
            <th> የጸደቀበት ቀን</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
           <th> id </th>
            <th> የተከፋይ ስም </th>
            <th>ምክንያት</th>
            <th>ብር</th>
            <th>ቀን</th>
            <th>ሁኔታ</th>
            <th>ACCEPT </th>
            <th>DELETE </th>
            <th>የአጽዳቂ ስም ማስገቢያ </th>
            <th> የአጽዳቂ ስም </th>
            <th> የጸደቀበት ቀን</th>

        </tr>
      </tfoot>
        <tbody>
          <?php
          if(mysqli_num_rows($query_run) > 0) 
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
              ?>
    
          <tr>
          <td><?php echo $row['rq_id']; ?> </td>
            <td><?php echo $row['rq_laki_id']; ?> </td>
            <td><?php echo $row['rq_des']; ?> </td>
            <td><?php echo $row['birr']; ?> </td>
            <td><?php echo $row['date']; ?> </td>
            <td><?php echo $row['statuse']; ?> </td>
            <td>
           
           <input type="hidden" name="duedelete" value=" <?php echo $row['rq_id'];?>">
 <button type="submit" class="btn btn-success deletebtn" data-id=" <?php echo $row['rq_id'];?>" onclick="confirmaccept(this);">
             ACCEPT
 </button>
                 
           </td>
            
            
           <td>
           
           <input type="hidden" name="duedelete" value=" <?php echo $row['rq_id'];?>">
 <button type="submit" class="btn btn-danger deletebtn" data-id=" <?php echo $row['rq_id'];?>" onclick="confirmdelete(this);">
            REJECT
 </button>
                 
           </td>
        
         <td>
           
            <form action="k.php" method="post">
                  <input type="hidden" name="ef_id" value="<?php   echo $row['rq_id'];   ?>">
                  <button type="submit" name="ef_btn" class="btn btn-success"> NAME</button>
                </form>
        </td>
       
             
       
        
         <td><?php echo $row['name']; ?> </td>
         <td><?php echo $row['tekcbaydate']; ?> </td>
             
          </tr>
          <?php
            }
          } 
          else
          {
             echo "no record  found";
          } 
          ?> 
        
        </tbody>
      </table>
      <script>
function confirmaccept(self){
  var id = self.getAttribute("data-id");
  document.getElementById("form-code").id.value = id;
  $("#acceptmodal").modal("show");

}




</script>
<script>
function confirmdelete(self){
  var id = self.getAttribute("data-id");
  document.getElementById("form-delete").id.value = id;
  $("#deletemodal").modal("show");

}




</script>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->
<?php     
            $date = date ('F d, y, g: i a');
   echo $date;
     ?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>