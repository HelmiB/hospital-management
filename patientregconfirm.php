<title>
    Patient Registration Completed
</title>
<?php
require_once 'dbcon/connection.php';
require './patient.php';
    $pid=$_POST["txtPid"];
    $sname=$_POST["txtSurname"];
    $oname=$_POST["txtOthername"];
    $gend=$_POST["cbxGender"];
    $raw=$_FILES["pbxPassport"] ["tmp_name"];
    $stream = fopen($raw, "r"); //open steam to read file
    $fcontent = fread($stream, filesize($raw)); // read the content
    $fcontent = addslashes($fcontent); // formates the content
    fclose($stream);//dispose the system resource allocated to the ...
    $pass = $fcontent;
    copy($raw, "pass.jpg");
    if (regPatient($pid, $sname, $oname, $gend, $pass) == 1){
        echo "Registration completed successfully";
    }else {
        echo "An error occured. File Registration Failed";
        die();
         }   
    
?>


<body>
    <h3>Patient Details</h3>
    <p>
        Passport<br/>
        <img src="pass.jpg" width="150px" height="150px"/>
    </p>
    
    Patient ID: <?php echo $pid; ?><br/>
    Surname: <?php echo $sname; ?><br/>
    Other Names: <?php echo $oname; ?><br/>
    Gender: <?php echo $gend; ?><br/><br/>
    <p><a href="index.php" style="text-decoration:none">Home</a>
</body>