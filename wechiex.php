<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');

?>



    


  


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> </h6>
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




<?php
 $connection = mysqli_connect("localhost","root","","snv");
  $query = "SELECT * FROM wechi";  
$query_run = mysqli_query($connection, $query);
?>
<html>  
 <head>  
  <title>የተመዘገቡ ወጪዎች ወደ EXCEL መለወጯ</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">የተመዘገቡ ወጪዎች ወደ EXCEL መለወጯ</h2><br /> 
    <table class="table table-bordered">
     <tr>  
     
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
     

                    <?php
          if(mysqli_num_rows($query_run) > 0) 
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
              ?>
      
       <tr>  
       
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
     
     
    </table>
     
    <br />
    <form method="post" action="wechicopy.php">
     <input type="submit" name="wexport" class="btn btn-success" value="Export" />
    </form>
    <form method="post" action="code.php">
     <input type="submit" name="wnew" class="btn btn-success" value="new year" />
    </form>
   </div>  
  </div>  
 </body>  
</html>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>