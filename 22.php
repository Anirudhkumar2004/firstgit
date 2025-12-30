<?php
$servername="localhost";
$username="root";
$password="";
$db="login";
$conn=mysqli_connect($servername,$username,$password,$db);
$a=$_POST['email'];
$b=$_POST['password'];

$sql="select * from login where id='".$a."' and password='".$b."' ";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
header('location:index.php');
/*while($rows=mysqli_fetch_assoc($result))
{
echo var_dump($rows);
}*/
}
else
{
echo "You Need To Sign UP";
}
?>