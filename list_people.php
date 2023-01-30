<?php
$servername = "localhost";
$username = "jaturaphum";
$password = "anSt-5kle45";
$db_name = "jaturaphum";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, age, sex, marry_status FROM guests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if($row["sex"] == "man")
        if($row["man"]>= 15)
      echo "นาย" . $row["fistname"]. "". $row["lastname"]."<br>";
      else {
        echo "ด.ช".$row["fistname"]."".$row["lastname"]."<br>";
      } else {
        if($row["sex"] == "man")
        if($row["man"]>= 15)
      echo "นาย" . $row["fistname"]. "". $row["lastname"]."<br>";
      else {
        echo "ด.ช".$row["fistname"]."".$row["lastname"]."<br>";
      }
    }
  }

} else {
  echo "0 results";
}
$conn->close();
?>