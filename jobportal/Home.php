<?php
session_start();
require('db.php');
if(isset($_SESSION['username']))
{
?>

<html>
<body>
<form>
<fieldset>
<legend>Home</legend>
Welcome <?php=$_SESSION['username']?> <br>
<?php
$con= getConnection();
$sql1= "select type from user where username='{$_SESSION['username']}';";
$resu1t1= mysqli_query($con,$sql1);
$data1= mysqli_fetch_assoc($result1);
//if($data1['type']=="admin")
//{

?>



Search <input type="text" name= "search">

<table border="1">
<tr>
<td> Username </td>
<td> Name </td>
<td> Company Name </td>
<td> ContactName </td>
<td> Action</td>
</tr> 
<?php

$sql='select * from user';
$result= mysqli_query($con,$sql);
while($row= mysqli_fetch_assoc($result))
{
?>
<tr>
<td> <?php echo $row['username'];?> </td>
<td> <?php echo $row['name'];?> </td>
<td> <?php echo $row['companyname'];?> </td>
<td> <?php echo $row['contact'];?> </td>
<td> <a href= "update.php"> Update </a>
<a href= "delete.php"> Delete </a> </td>
</tr> 



<?php
}
//}

//else
//{ 


}
?>
</table>

</fieldset>
</form>
</body>
</html>