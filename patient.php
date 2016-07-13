<?php
require_once 'dbcon/connection.php';

function genPatientId(){
    $sufix = array ('A','B','C','D','E','F','G','H','I','J','K');
    return "P" . date("Yms"). $sufix[rand(0, 10)] . $sufix[rand(2, 8)];
}

function regPatient($pid, $surname, $oname, $gender, $passport){
        $con = connect();
        $con->query("insert into patient values('$pid', '$surname', '$oname', '$gender', '$passport')");
        $rows = $con->affected_rows;
        $con->close();
        return $rows;
}

function getPatients(){
    $con = connect();
    $table = $con->query("select * from patient");
    $con->close();
    return $table;
}

    function getPatient($pid)
{
    $con = connect();
     $table = $con->query("select * from patient where pid = '$pid'");
     $record = $table->fetch_array();
     $table->close();
    $con->close();
    return $record;
    
}

function updatePatient($pid, $surname, $othername, $gender){
    $con = connect();
    $con->query("update patient set sname='$surname', oname='$othername', gender='$gender' where pid='$pid'");
    $row=$con->affected_rows;
    $con->close;
    return $row;
}

function deletePatient($pid) {
    $con = connect();
    $con->query("delete from patient where pid='$pid'");
    $row=$con->affected_rows;
    $con->close;
    return $row;
}