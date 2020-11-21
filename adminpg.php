<!DOCTYPE html>
<head>
<title>admin pg</title><link rel="icon" href="images/ap5.png" />
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body><div style="background-color:black;"><br><br><button class="btn btn-danger pull-right" style="margin-right: 40px;     margin-left: 1250px;" type="submit"  id="logout">LOG OUT</button><br><br></div>
<br><br>


<?php
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

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo '<table cellpadding="10" cellspacing="5" border="5" width="80%" align="center">
<tr>
	<th width="15%">NAME</th>
	
	<th width="10%">ROLL NUMBER</th>
	
	<th width="10%">DEPARTMENT</th>
	
	<th width="15%">DOB</th>
	<th width="10%">GENDER</th>
	
<th width="15%">CONTACT NUMBER</th>
	<th>E-MAIL ID</th>
</table><br>';
    while($row = $result->fetch_assoc()) {
        echo '<table cellpadding="10" cellspacing="5" border="2" width="80%" align="center">
<th width="15%">
	'.$row['name'].'</th>
<th width="10%">	'.$row['num'].'
</th>
<th width="12%">'.$row['dept'].'
	</th><th width="15%">
	'.$row['dob'].'
</th>
<th width="10%">'.$row['gen'].'
	</th>
<th width="15%">'.$row['ph'].'
	</th>
	<th>'.$row['mail'].'
	</th>
	

</table>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<br><br><br>

</body>
</html>
