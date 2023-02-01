<?php

$dbhost   = "localhost";
$dbuser   = "root";
$dbpwd    = "";
$dbname   = "snv";
$dumpfile = $dbname . "_" . date("Y-m-d_H-i-s") . ".sql";

passthru("c:/wamp64/bin/mysql/mysql5.7.26/bin/mysqldump --opt --host=$dbhost --user=$dbuser --password=$dbpwd $dbname > $dumpfile");

// report - disable with // if not needed
// must look like "-- Dump completed on ..." 

echo "$dumpfile "; passthru("tail -1 $dumpfile");

?>