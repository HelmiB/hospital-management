<?php
require './patient.php';
?>
<title>
    Register Patient
</title>
<form action="patientregconfirm.php" enctype="multipart/form-data" method="POST">
    <fieldset style="width: 50%"><legend>Input Patient Details</legend>
        <table>
            <tr>
                <td>Passport</td>
                <td><input type="file" name="pbxPassport"></td>
            </tr>
            <tr>
                <td>Patient ID</td>
                <td><input type="text" name="txtPid" readonly="true" value="<?php echo genPatientId();?>"></td>
            </tr>
            <tr>
                <td>Surname</td>
                <td><input type="text" name="txtSurname" required="true" maxlength="25"></td>
            </tr>
            <tr>
                <td>Othername</td>
                <td><input type="text" name="txtOthername" required="true" maxlength="25"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="cbxGender">
                        <option >Male</option>
                        <option >Female</option>
                    </select>
                </td>
            </tr>

        </table>
        <input type="reset" style="margin-left: 150px" value="Reset">
        <input type="submit" value="Register">
    </fieldset>
</form>
<a href="index.php" style="text-decoration:none"> Back </a>

