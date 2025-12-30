<?php
$servername="localhost";
$username="root";
$password="";
$db="login";
$conn=mysqli_connect($servername,$username,$password,$db);
$z=$_POST['email'];
$sql="select * from login where id='".$z."' ";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
die("User Already Exist");
}
else
{
$sql=$conn->prepare("insert into login (name,id,password) values (?,?,?)");
$sql->bind_param("sss",$a,$b,$c);
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$sql->execute();
header('location:index.php');
}
?>