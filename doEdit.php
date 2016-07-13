<?php
require_once './patient.php';

$pid = $_POST["txtPatientId"];
$sname = $_POST["txtSurname"];
$oname = $_POST["txtOthername"];
$gend = $_POST["cbxGender"];
if (updatePatient($pid, $sname, $oname, $gend) == 1){
    header ('location:viewpatient.php'); //redirects to somewhere in the site
}else{
    echo 'An error occured. Patient details not update';
}