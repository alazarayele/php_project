<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');

?>



    


  


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">የ ጥምቀት ተማሪዎች መረጃ </h6>
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

     $query = "SELECT * FROM bap ORDER BY id";
     $query_run = mysqli_query($connection, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th> id </th>
            <th> የመጠሪያ ስም </th>
            <th>የአባት ስም</th>
            <th>የአያት ስም</th>
            <th>ጾታ</th>
            <th>የተመዘገበበት ቀን</th>
            <th>የተወለደበት ቀን </th>
            <th>የየመኖሪያ ሰፈር </th>
            <th>ስልክ </th>
            <th> የስራ አይነት </th>
            <th> የ አካባቢው መጠሪያ </th> 
            <th>አስተማሪ </th>
            <th> የ አደጋ ጊዜ ተጠሪ ስም </th>
            <th> የ አደጋ ጊዜ ተጠሪ  ስልክ ቁጥር </th>
             <th> ሁኔታ </th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th> id </th>
            <th> የመጠሪያ ስም </th>
            <th>የአባት ስም</th>
            <th>የአያት ስም</th>
            <th>ጾታ</th>
            <th>የተመዘገበበት ቀን</th>
            <th>የተወለደበት ቀን </th>
            <th>የየመኖሪያ ሰፈር </th>
            <th>ስልክ </th>
            <th> የስራ አይነት </th>
            <th> የ አካባቢው መጠሪያ </th> 
            <th>አስተማሪ </th>
            <th> የ አደጋ ጊዜ ተጠሪ ስም </th>
            <th> የ አደጋ ጊዜ ተጠሪ  ስልክ ቁጥር </th>
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
            <td><?php echo $row['fname']; ?> </td>
            <td><?php echo $row['mname']; ?> </td>
            <td><?php echo $row['lname']; ?> </td>
            <td><?php echo $row['sex']; ?> </td>
            <td><?php echo $row['bap_date']; ?> </td>
            <td><?php echo $row['birth_date']; ?> </td>
            <td><?php echo $row['sefer']; ?> </td>
            <td><?php echo $row['phone']; ?> </td>
            <td><?php echo $row['sira']; ?> </td>
            <td><?php echo $row['meteria']; ?> </td>
            <td><?php echo $row['tech']; ?> </td>
            <td><?php echo $row['adega_teteri']; ?> </td>
            <td><?php echo $row['adegateteri_slk']; ?> </td>
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