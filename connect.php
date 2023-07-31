<?php
$servername = "15.206.157.202:3306";
$username = "gene_genesisit";
$password = "";
$dbname = "sign-up";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "connection ok";
}
else{
    echo "connection failed";
}
?>