<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "souk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE article SET name = '".$_POST["name"]."', price = ".
$_POST["price"].", quantity = ".$_POST["quantity"]." WHERE article.id = ".$_POST["id"];


if ($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
  header( 'Location: ./index.php' ) ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>