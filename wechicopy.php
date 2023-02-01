<?php  
//export.php  
$connection = mysqli_connect("localhost","root","","snv");
$output = '';
if(isset($_POST["wexport"]))
{	
 $query = "SELECT * FROM wechi";
 $query_run = mysqli_query($connection, $query);
 if(mysqli_num_rows($query_run) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
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
  ';
  while($row = mysqli_fetch_array($query_run))
  {
    $output .= '
     <tr>  
                          
                          <td>'.$row["yeagelglot_zerf"].'</td> 
                          <td>'.$row["fdate"].'</td>  
                          <td>'.$row["ldate"].'</td>  
                          <td>'.$row["tesatafi_bzat"].'</td>  
                          <td>'.$row["andu_waga"].'</td> 
                          <td>'.$row["teklala_waga"].'</td>  
                          <td>'.$row["asteyayet"].'</td>  
                          <td>'.$row["tewekay_one"].'</td> 
                          <td>'.$row["tewekay_fone"].'</td>  
                          <td>'.$row["tewekay_two"].'</td>  
                          <td>'.$row["tewekay_ftwo"].'</td>  
                          <td>'.$row["tewekay_three"].'</td> 
                          <td>'.$row["tewekay_fthree"].'</td>  
                          <td>'.$row["agelglot_drshaone"].'</td> 
                          <td>'.$row["agelglot_drshatwo"].'</td>  
                          <td>'.$row["agelglot_drshathree"].'</td>  
        
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
