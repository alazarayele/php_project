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
            <button type="submit" name="de_btn" class="btn btn-primary">Yes for Sure</button>
        </div>
      </form>

    </div>
  </div>
</div> 
  


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">የጋብቻ ትምህርት የጨረሱ </h6>
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

     $query = "SELECT * FROM mer WHERE statuse='finished'ORDER BY id";
     $query_run = mysqli_query($connection, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th> id </th>
            <th>ወንድ የመጠሪያ ስም</th>
            <th>ወንድ የአባት ስም</th>
            <th>ወንድ የአያት ስም</th>
            <th>ሴት የመጠሪያ ስም</th>
            <th>ሴት የአባት ስም</th>
            <th>ሴት የአያት ስም</th>
            <th> ወንድ እድሜ</th>
            <th>ሴት እድሜ</th>
            <th>ወንድ ኬት ቤተክርስቲያን ነው </th>
            <th>ሴት ኬት ቤተክርስቲያን ነው </th>
            <th>ወንድ ስልክ </th>
            <th>ሴት ስልክ</th>
            <th> ቀን </th>
            <th> ሁኔታ </th>
            
            
            
          </tr>
        </thead>

        <tfoot>
        <tr>
          <th> id </th>
            <th>ወንድ የመጠሪያ ስም</th>
            <th>ወንድ የአባት ስም</th>
            <th>ወንድ የአያት ስም</th>
            <th>ሴት የመጠሪያ ስም</th>
            <th>ሴት የአባት ስም</th>
            <th>ሴት የአያት ስም</th>
            <th> ወንድ እድሜ</th>
            <th>ሴት እድሜ</th>
            <th>ወንድ ኬት ቤተክርስቲያን ነው </th>
            <th>ሴት ኬት ቤተክርስቲያን ነው </th>
            <th>ወንድ ስልክ </th>
            <th>ሴት ስልክ</th>
            <th> ቀን </th>
            <th> ሁኔታ </th>
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
          <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['male_fname']; ?> </td>
            <td><?php echo $row['male_mname']; ?> </td>
            <td><?php echo $row['male_lname']; ?> </td>
            <td><?php echo $row['female_fname']; ?> </td>
            <td><?php echo $row['female_mname']; ?> </td>
            <td><?php echo $row['female_lname']; ?> </td>
            <td><?php echo $row['male_age']; ?> </td>
            <td><?php echo $row['female_age']; ?> </td>
            <td><?php echo $row['male_where']; ?> </td>
            <td><?php echo $row['female_where']; ?> </td>
            <td><?php echo $row['male_phone']; ?> </td>
            <td><?php echo $row['female_phone']; ?> </td>
            <td><?php echo $row['date']; ?> </td>
            <td><?php echo $row['statuse']; ?> </td>
            
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
          else
          {
             echo "no record  found";
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