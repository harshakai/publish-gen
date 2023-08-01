<?php
// $servername = "15.206.157.202:3306";
// $username = "gene_genesisit";
// $password = "dl%E9F2*AuNI#FCu";
// $dbname = "gene_loginsystem";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "connection ok";
}
else{
    echo "connection failed";
}
?>