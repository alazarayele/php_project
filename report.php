<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



    


  


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">የየልዩ ልዩ ወጪ የጸደቁ ረፖርት </h6>
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

     $query = "SELECT rq_laki_id,   rq_des, birr,date,name,tekcbaydate FROM req WHERE statuse='ACCEPT'";
     $query_run = mysqli_query($connection, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> የተከፋይ ስም </th>
            <th>ምክንያት</th>
            <th>ብር</th>
            <th>ቀን</th>
            <th>የአጽዳቂ ስም</th>
            <th>የጸደቀበት ቀን </th>
          </tr>
        </thead>
        <tfoot>
        <tr>
           <th> የተከፋይ ስም </th>
            <th>ምክንያት</th>
            <th>ብር</th>
            <th>ቀን</th>
            <th>የአጽዳቂ ስም</th>
            <th>የጸደቀበት ቀን </th>
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
            <td><?php echo $row['rq_laki_id']; ?> </td>
            <td><?php echo $row['rq_des']; ?> </td>
            <td><?php echo $row['birr']; ?> </td>
            <td><?php echo $row['date']; ?> </td>
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
      <?php
      
                   $query = "SELECT birr FROM req where statuse='ACCEPT'" ;
                   
                    $query_run = mysqli_query($connection,$query);
                   
                    $rows = $query_run->num_rows;
                   $birr=0;
                    for ($j = 0; $j < $rows; ++$j) {
                        $query_run->data_seek($j);
                        $row = $query_run->fetch_array(MYSQLI_ASSOC);
                        $birr += $row['birr'];
                       
                    }
                    echo "total birr:";
                    echo  $birr;
                    ?>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>