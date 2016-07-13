<!DOCTYPE html>
<?php
require './patient.php';
?>
<head>
<title>
    View Patients
</title>
   <script language="javascript" type="text/javascript">
        function checkDelete(){
            return confirm('Are you sure?');

        }
    </script>
</head>
<body>
<table>
    <th
    <th> Patient ID </th>
    <th> Surname </th>
    <th> Othername </th>
    <th> Gender </th>
    <th> Passport </th>
 <?php
 $patients = getPatients();
 while ($rec = $patients -> fetch_array()){
     echo "<tr>
            <td><input type='text' value='$rec[0]'></td>
            <td><input type='text' value='$rec[1]'></td>
            <td><input type='text' value='$rec[2]'></td>
            <td><input type='text' value='$rec[3]'></td>
            <td><img width='40px' heigth='50px' src='data:image/jpeg;base64,".base64_encode($rec[4])."'></td>
                <td><a href='editpatient.php?id=$rec[0]' style = 'text-decoration:none'><input type='button' value='Edit'></td>
                <td><a href='deletepatient.php?id=$rec[0]' style = 'text-decoration:none' onclick='return checkDelete()';><input type='button' value='Delete'></td>
          </tr>";
 }
 ?>
</table>

<a href='index.php' style='text-decoration:none'> Home</a>
</body>
</html>