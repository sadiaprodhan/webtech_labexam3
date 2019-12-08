<?php
 function getConnection()
 
 {
	 $con= mysqli_connect('localhost','root','','job');
	 return $con;
	 
 }

?>