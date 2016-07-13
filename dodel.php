<?php

	require_once './patient.php';
	    //die();
	$pid = $_GET["id"];
	if (deletePatient($pid) == 1) {
		header("location: viewpatient.php");
	} else {
		echo "An error occured. Deletion not Processed";
}

		