<!DOCTYPE html>
<head>
<title>editing profile</title><link rel="icon" href="images/ap5.png" />
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
<?php
$x=$_GET['variable1'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yasin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="select * from student where num='$x'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count= mysqli_num_rows($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $a=$row["name"];$h=$row["num"];$b=$row["dept"];$c=$row["dob"];$d=$row["gen"];$e=$row["ph"];$f=$row["mail"]; 
		
    }
	
} $sqll="delete from student where num='$x'";
if ($conn->query($sqll) === TRUE) {
    
}else{echo "<script>alert ('blahhhhh');window.location='reg.html';</script>";}
	
echo ' 
<br><br><center><b><i>EDIT YOUR PROFILE</i></b></center><br>
<form  action="updating.php" method="post" role="form" class="form-horizontal">
<table cellpadding="10" cellspacing="5" border="5" width="60%" align="center">
<tr>
	<th>NAME</th>
	<th><input type="text" class="form-control" name="name"  placeholder="Enter full name"  required value="'.$a.'"/></th></tr>
<tr>	<th>ROLL NUMBER</th>
	<th><input type="text" class="form-control" name="num"  placeholder="Enter roll num"  required value="'.$h.'"/>*NOTE:your roll number will be your user name for this website</th>
</tr>
<tr>
	<th>DEPARTMENT</th>
	<th><input type="text" class="form-control" name="dept" placeholder=" Enter dept" required value="'.$b.'" /></th></tr><tr>
	<th>DOB</th>
	<th><input type="date" class="form-control" name="dob" placeholder=" Enter date of birth" required value="'.$c.'"/></th>
</tr>
<tr>
	<th>GENDER</th>
	<th><input type="text" class="form-control" name="gen" placeholder="Enter gender" required value="'.$d.'"/></th></tr>
<tr>
	<th>CONTACT NUMBER</th>
	<th><input type="text" class="form-control" name="ph" placeholder="Enter ph no" required value="'.$e.'" /></th></tr>
	<tr>
	<th>E-MAIL ID</th>
	<th><input type="text" class="form-control" name="mail" placeholder="Enter email id" required value="'.$f.'"/></th></tr>
	<tr>
	<th>PASSWORD</th>
	<th><input type="password" class="form-control" name="pwd" placeholder="Set a password...." required  /></th></tr>
	<tr>
	<th>CONFRIM PASSWORD</th>
	<th><input type="password" class="form-control" name="pwd1" placeholder="Re enter your password..." required /></th></tr>
	
</table><br><center><button class="btn btn-danger pull-right" type="submit"  id="submit1" href="updating.php">SUBMIT</button>
</center></form><br><br><br>
';


?>
</body>
</html>