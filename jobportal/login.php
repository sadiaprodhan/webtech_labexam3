<?php
session_start();
require('db.php');
if(isset($_POST['uname']))
{$uname= $_POST['uname'];
$pass= $_POST['pass'];
$con= getConnection();
$sql= "select * from user where username= '{$uname}' and password='{$pass}'";
$result= mysqli_query($con,$sql);
$data= mysqli_fetch_assoc($result);
if(count($data)>0)
{
	$_SESSION['username']=$uname;
	$_SESSION['pass']=$pass;
	echo "true";

}
else
{echo "wrong username or password";}


}
?>