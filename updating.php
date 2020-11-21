<?php
// $conn= new mysqli('localhost','root','','dbmspro');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yasin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$name=$_POST["name"];
$num=$_POST["num"];
$dept=$_POST["dept"];
$dob=$_POST["dob"];
$gen=$_POST["gen"];
$ph=$_POST["ph"];
$mail=$_POST["mail"];
$pwd=$_POST["pwd"];
$pwd1=$_POST["pwd1"];


if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}

if($pwd===$pwd1)
{	
	$sql="insert into student values ('".$name."','".$num."','".$dept."','".$dob."','".$gen."','".$ph."','".$mail."','".$pwd."')";
	if ($conn->query($sql) === TRUE) {
    header ("location:index.html");
}else{echo "<script>alert ('invalid user name');window.location='reg.html';</script>";}
	


	
}else
{
	echo "<script>alert('pwd mismatch')</script>";
}	

$conn->close();


?>



