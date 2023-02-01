<?php
 $connect=mysqli_connect('localhost','root','','snv');
 if (isset($_GET['export'])){
 	if ($_GET['export']=='true') {
 		$query='SELECT * FROM `gift` ORDER by id asc';
   $result=mysqli_query($connect,$query);
 		
 		$delimiter=",";
 		$filename="significant_".date('ymd').".csv";
 		$f=fopen('php://memory', 'w');

         $fields=array('id','mid','septmber','october','november','december',
         'january','feburary','march','april','may','june',
         'july','augest');
 		fputcsv($f, $fields,$delimiter);

 		while ($row=$result->fetch_assoc()) {
             $lineData=array($row['id'],$row['mid'],$row['s'],$row['oc'],
             $row['no'],$row['de'],$row['ja'],$row['fe'],
             $row['ma'],$row['ap'],$row['may'],$row['jun'],
             $row['jul'],$row['aug']);
 			fputcsv($f, $lineData,$delimiter);
 		}

 		fseek($f, 0);

 		header('Content-Type:text/csv');
 		header('Content-Disposition:attachment;filename="'.$filename.'";');

 		fpassthru($f);
 	}
 }

?>