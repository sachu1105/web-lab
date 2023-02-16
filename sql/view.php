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
$sql="SELECT * FROM student_details";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0)
{
echo "<table><tr><th>slno</th>";
echo "<th>name</th>";
echo "<th>phno</th>";
echo "<th>email</th>";
echo "<th>address</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr><td>$row[slno]</td>";
echo "<td>$row[name]</td>";
echo "<td>$row[phno]</td>";
echo "<td>$row[email]</td>";
echo "<tr><td>$row[address]</td></tr>";
}
}
