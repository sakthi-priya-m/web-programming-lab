<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-image: url("img1.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
  
            }
 
            td
            {
            font-family: 'Times New Roman', Times, serif;
            font-size: 25;
            font-weight: bolder;
            }
            </style>
    </head>
<body>
   <center> <h2><b>COVID REGISTRATION FORM</b></h2></center>
<form name="coform" onsubmit="validate()" method="POST" action="covreg.php">
<center><table cellpadding=20px>
    <tr>
        <td>Patient id: </td>
        <td><input type="number" name="id" id="pid" /></td>
    </tr>
 <tr>
     <td>Patient Name: </td>
     <td><input type="text" name="name" id="pname"/></td>
 </tr>
 <tr>
     <td> Age:</td>
     <td><input type="number" name="age" id="page"/></td>
 </tr>
 <tr>
     <td>  Address: </td>
     <td><textarea rows=2 cols=20 name="address" id="padd"></textarea></td>
 </tr>
 <tr>
     <td>Date of admission: </td>
     <td> <input type="date" name="doa" id="pda"></td>
 </tr>
 <tr>
     <td>  Doctor's Name:</td>
     <td><input type="text" name="dname" id="dname"></td>
 </tr>
 <tr>
     <td> Prescribed medicines: </td>
     <td><textarea rows=2 cols=20 name="medicine" id="med"></textarea></td>
 </tr> 
<tr>
   <td><input type="submit" value="Register" /></td>
</tr>
</table></center>
</form>
</body>
</html>