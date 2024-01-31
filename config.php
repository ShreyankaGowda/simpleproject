<?php 
 
 $con = mysqli_connect("localhost","root","","project") or die("Couldn't connect");

?>

<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "project";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}?>
<?php
$conn = mysqli_connect("localhost", "root", "", "project");
?>