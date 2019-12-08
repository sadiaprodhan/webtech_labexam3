<?php
session_start();
require('db.php');
if(isset($_POST['uname']))
{$uname= $_POST['uname'];
$pass= $_POST['pass'];
$name= $_POST['name'];
$compname= $_POST['compname'];
$contno= $_POST['contno'];
$con= getConnection();
$sql= "insert into user values ('{$uname}','{$pass}', '{$name}','{$compname}','{$contno}','employee')";

 if($result= mysqli_query($con,$sql))

 {

	$_SESSION['username']=$uname;
	$_SESSION['pass']=$pass;
	
	echo "true";

}
else
{echo "Registration not done ";} 


}
?>