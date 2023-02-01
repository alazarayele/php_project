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
  $query = "SELECT * FROM req";  
$query_run = mysqli_query($connection, $query);
?>
<html>  
 <head>  
  <title>የልዩ ልዩ ወጪ የጸደቁ ረፖርት ወደ EXCEL መለወጯ</title>  
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
    <h2 align="center">የየልዩ ልዩ ወጪ የጸደቁ ረፖርት ወደ EXCEL መለወጯ</h2><br /> 
    <table class="table table-bordered">
     <tr>  
     
            <th> የተከፋይ ስም </th>
            <th>ምክንያት</th>
            <th>ብር</th>
            <th>ቀን</th>
            <th>ሁኔታ</th>
            <th> የአጽዳቂ ስም </th>
            <th> የጸደቀበት ቀን</th>
                    </tr>
     

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
       <td><?php echo $row['statuse']; ?> </td>
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
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
    <form method="post" action="code.php">
     <input type="submit" name="new" class="btn btn-success" value="new year" />
    </form>
   </div>  
  </div>  
 </body>  
</html>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>