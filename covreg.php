<!DOCTYPE HTML>
<html>
<head>
        <style>
            body {
                background-image: url("img2.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
  
            }
            </style></head>    
<body>
<br> 
<?php
include("coviddb.php"); 
$id=$_POST["id"];
$name=$_POST["name"];
$age=$_POST["age"];
$address=$_POST["address"];
$doa=$_POST["doa"];
$dname=$_POST["dname"];
$medicine=$_POST["medicine"];
$query = "insert into info(id,name,age,address,doa,dname,medicine) values('$id','$name','$age','$address','$doa','$dname','$medicine')";
$result = mysqli_query($con,$query);
if($result)
{
    echo"<center><b> NEW PATIENT INFORMATION ENTERED SUCCESSFULLY!!</b></center>";
    echo"<br/><center><b> For viewing : </b></center>";
    echo"<br/><center><a href='coviddetail.php'> Click here>> </a></center>";

}
else{
    
    echo"<script> alert('DATABASE INSERTION FAILED')</script>";
}
?></body>
</html>