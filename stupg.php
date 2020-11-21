<!DOCTYPE html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yasin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$user=$_POST["user"];
$pass=$_POST["pass"];

if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}


$sql="select * from student where num='$user' and pwd='$pass'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count= mysqli_num_rows($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $a=$row["name"];$b=$row["dept"];$c=$row["dob"];$d=$row["gen"];$e=$row["ph"];$f=$row["mail"];
    }
} 


if($count === 1 )
{
	
	echo '<html>
<head>
<title>stupg</title><link rel="icon" href="images/ap5.png" />
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
<div style="background-color:green ;text-align:right"><br><br><button class="btn btn-danger pull-right" style="    margin-right: 40px;"type="submit"  id="logout"><a href="index.html">LOG OUT</a></button><br>
<br></div>
<div><br><br>
<marquee>welcome to kamaraj college of engineering and technology</marquee><br><br>
<br><table cellpadding="10" cellspacing="5" border="5" width="60%" align="center">
<tr>
	<th>NAME</th>
	<th>'.$a.'</th></tr>
<tr>	<th>ROLL NUMBER</th>
	<th>'.$user.'</th>
</tr>
<tr>
	<th>DEPARTMENT</th>
	<th>'.$b.'</th></tr><tr>
	<th>DOB</th>
	<th>'.$c.'</th>
</tr>
<tr>
	<th>GENDER</th>
	<th>'.$d.'</th></tr>
<tr>
	<th>CONTACT NUMBER</th>
	<th>'.$e.'</th></tr>
	<tr>
	<th>E-MAIL ID</th>
	<th>'.$f.'</th></tr>
	

</table><br>
<button class="btn btn-danger pull-right" type="submit"  name="edit" id="edit" style="margin-left: 1035px;"  ><a href="update.php?variable1='.$user.'" >EDIT</a></button>	
';

}else{
	echo '<script>alert ("invalid user name or password"); window.location="index.html";</script>';
}

?>
</html>