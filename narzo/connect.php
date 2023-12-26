<?php

$name=$_POST["name"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$dept=$_POST["dept"];
$email=$_POST["email"];
$password=$_POST["pass"];

$con=mysql_connect("localhost","root","");
mysql_select_db("nazro");
mysql_query("insert into class(name,age,dob,gender,dept,email,password) values('$name','$age','$dob','$gender','$dept','$email','$pass')");
echo("Registered");
include("registration.php");
mysql_close($con);
?>