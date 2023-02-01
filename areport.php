<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



    




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
   $connection = mysqli_connect("localhost","root","","snv");

     $query = "SELECT  * FROM wechi  ORDER BY id";
     $query_run = mysqli_query($connection, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th> id </th>
          <th> የተከፋይ ስም </th>
            <th> የአገልግሎት ዘርፍ </th>
            <th>ፕሮግራሙ የተካሄደበት የመጀመሪያ ቀን</th>
            <th>ፕሮግራሙ የተካሄደበት የመጨረሻ ቀን</th>
            <th>የተሳታፊ ብዛት</th>
            <th>የአንዱ ዋጋ </th>
            <th>ጠቅላላ ዋጋ </th>
            <th> አስተያየት </th>
            <th>የተወካይ ስም</th>
            <th>የአባት ስም</th>
            <th>የተወካይ ስም</th>
            <th>የአባት ስም</th>
            <th>የተወካይ ስም</th>
            <th>የአባት ስም</th>
            <th>ድርሻ</th>
            <th>ድርሻ </th>
            <th>ድርሻ </th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th> id </th>
            <th> የተከፋይ ስም </th>
            <th> የአገልግሎት ዘርፍ </th>
            <th>ፕሮግራሙ የተካሄደበት የመጀመሪያ ቀን</th>
            <th>ፕሮግራሙ የተካሄደበት የመጨረሻ ቀን</th>
            <th>የተሳታፊ ብዛት</th>
            <th>የአንዱ ዋጋ </th>
            <th>ጠቅላላ ዋጋ </th>
            <th> አስተያየት </th>
            <th>የተወካይ ስም</th>
            <th>የአባት ስም</th>
            <th>የተወካይ ስም</th>
            <th>የአባት ስም</th>
            <th>የተወካይ ስም</th>
            <th>የአባት ስም</th>
            <th>ድርሻ</th>
            <th>ድርሻ </th>
            <th>ድርሻ </th>

           </tr>
        </tfoot>
        <tbody>
          <?php
          if(mysqli_num_rows($query_run) > 0) 
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
             $kefay_sm = $row['yetekefay_sm'] ;
             $kefay_sem = "SELECT * FROM req WHERE rq_id='$kefay_sm'"; 
             $kefay_sem_run = mysqli_query($connection,$kefay_sem);


              ?>
    
          <tr>
          <td><?php echo $row['id']; ?> </td>
          <td>
          <?php foreach($kefay_sem_run as $kefay_row) {echo $kefay_row['rq_laki_id']; } ?>
              
            </td>
            <td><?php echo $row['yeagelglot_zerf']; ?> </td>
            <td><?php echo $row['fdate']; ?> </td>
            <td><?php echo $row['ldate']; ?> </td>
            <td><?php echo $row['tesatafi_bzat']; ?> </td>
            <td><?php echo $row['andu_waga']; ?> </td>
            <td><?php echo $row['teklala_waga']; ?> </td>
            <td><?php echo $row['asteyayet']; ?> </td>
            <td><?php echo $row['tewekay_one']; ?> </td>
             <td><?php echo $row['tewekay_fone']; ?> </td>
            <td><?php echo $row['tewekay_two']; ?> </td>
             <td><?php echo $row['tewekay_ftwo']; ?> </td>
            <td><?php echo $row['tewekay_three']; ?> </td>
             <td><?php echo $row['tewekay_fthree']; ?> </td>
            <td><?php echo $row['agelglot_drshaone']; ?> </td>
            <td><?php echo $row['agelglot_drshatwo']; ?> </td>
            <td><?php echo $row['agelglot_drshathree']; ?> </td>
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
      
                   $query = "SELECT teklala_waga FROM wechi " ;
                   
                    $query_run = mysqli_query($connection,$query);
                   
                    $rows = $query_run->num_rows;
                   $teklala_waga=0;
                    for ($j = 0; $j < $rows; ++$j) {
                        $query_run->data_seek($j);
                        $row = $query_run->fetch_array(MYSQLI_ASSOC);
                        $teklala_waga += $row['teklala_waga'];
                       
                    }
                   echo "<h2>ጠቅላላ ዋጋ=<h2>";
                    echo  $teklala_waga;
                    echo "ብር";
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