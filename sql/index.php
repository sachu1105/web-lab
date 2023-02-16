<?php
$server_name="localhost";
$user_name="root";
$password="";
$database="stud";
$connection=mysqli_connect($server_name,$user_name,$password,$database);
if($connection)
{
echo "Connection established";
}
else
{
    die ('connection failed');
}
$name=$_POST['name'];
$phone=$_POST['phno'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql="INSERT INTO student_details(name,phno,email,address) VALUES('$name','$phone','$email','$address')";
mysqli_query($connection,$sql);
mysqli_close($connection);