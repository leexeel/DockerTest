<?php
echo "buna dimineata";
echo "<br>";
echo "versiune noua 3";

$servername = "192.168.10.66";
$username = "iot_user";
$password = "init1234";
$dbname = "iot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM devices";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["iddevices"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
