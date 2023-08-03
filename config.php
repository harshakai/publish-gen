<?php

    $db = mysqli_connect('localhost','root','','gene');

    if($db){
        // echo "Success";
    }
    else{
        echo "Failure";
    }

?>