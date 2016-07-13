<?php
require_once './patient.php';
$pid = $_GET["id"];
if(deletePatient($pid) == 1){
    header ("location: viewpatient.php");
}else{
    echo "An error occured. Deletion not Processed";
}
