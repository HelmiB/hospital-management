<title> Edit Patient </title>
<?php
require_once './patient.php';
$patient = getPatient($_GET["id"]);
?>
<form action="doEdit.php" method="POST">
    <table>
        <tr>
            <td> Patient ID </td>
            <td><input type="text" readonly="true" value="<?php echo $patient[0]; ?>" name="txtPatientId"/></td>
        </tr>
         <tr>
            <td> Surname</td>
            <td><input type="text" value="<?php echo $patient[1]; ?>" name="txtSurname" required="true"/></td>
        </tr>
         <tr>
            <td> Othername </td>
            <td><input type="text" value="<?php echo $patient[2]; ?>" name="txtOthername" required="true"/></td>
        </tr>
        <tr>
            <td> Gender </td>
            <td>
                
    
        <select name="cbxGender">
            <?php
            $arr = array("Male", "Female");
            foreach($arr as $e)
            {
                if ($e == $patient[3])
                    {
                        echo "<option selected='true'>$e</option>";
                    }else {
                     echo "<option>$e</option>";   
                    }
            }
            ?>
        </select>
            </td>
            </tr>
    </table>
    <a href="viewpatient.php" style="text-decoration: none; margin-left: 70px"><input type="button" value="Back"/></a>
    <input type="submit" value="Update"/>
</form>