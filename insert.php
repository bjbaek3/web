<!DOCTYPE html>
<html>

<body>
<h1>Insert To MySQL</h1>
<?php

$servername = "oldmansea.synology.me";
$username = "root";
$password = "Fyeo2014!@#";
$dbname = "oldman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
printf("connection complete ! <br>");


mysqli_query($conn, "INSERT INTO helloworld ( yyyymmdd, msg) VALUES ( Now(), 'hello messege' )");
mysqli_close($conn);

printf(" query complete !");

?>

</body>
</html>
