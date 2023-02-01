<?php  
//export.php  
$connection = mysqli_connect("localhost","root","","snv");
$output = '';
if(isset($_POST["export"]))
{	
 $query = "SELECT * FROM req";
 $query_run = mysqli_query($connection, $query);
 if(mysqli_num_rows($query_run) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr> 
                     
                      <th> የተከፋይ ስም </th>
                      <th>ምክንያት</th>
                      <th>ብር</th>
                      <th>ቀን</th>
                      <th>ሁኔታ</th>
                      <th> የአጽዳቂ ስም </th>
                      <th> የጸደቀበት ቀን</th>
              
                    </tr>
  ';
  while($row = mysqli_fetch_array($query_run))
  {
    $output .= '
     <tr>  
                          
                          <td>'.$row["rq_laki_id"].'</td> 
                          <td>'.$row["rq_des"].'</td>  
                          <td>'.$row["birr"].'</td>  
                          <td>'.$row["date"].'</td>  
                          <td>'.$row["statuse"].'</td> 
                          <td>'.$row["name"].'</td>  
                          <td>'.$row["tekcbaydate"].'</td>  
        
                     </tr>
    ';
   }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
