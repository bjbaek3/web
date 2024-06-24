<!DOCTYPE html>
<html>
<body>
<h1>Select From MySQL</h1>
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


$sql = "SELECT sn,yyyymmdd, msg FROM helloworld";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "sn: " . $row["sn"]. " - date: " . $row["yyyymmdd"]. " " . $row["msg"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>
