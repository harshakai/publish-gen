<?php
define('DB_SERVER','15.206.157.202:3306');
define('DB_USER','gene_genesisit');
define('DB_PASS' ,'dl%E9F2*AuNI#FCu');
define('DB_NAME', 'gene_loginsystem');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>