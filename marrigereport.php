<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');
?>



    


  


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">የጋብቻ ትምህርት መረጃ </h6>
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

     $query = "SELECT * FROM mer ORDER BY id";
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