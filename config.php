<?php

    $db = mysqli_connect('localhost:3306','gene_db','gene_db','alpha&trion');

    if($db){
        // echo "Success"."<br>";
    }
    else{
        echo "Failure";
    }

?>