<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body>

<h2>Gestion des articles</h2>
<button class="button" onclick="document.location='insert.html'">Create</button>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Actions</th>
  </tr>
  
<!DOCTYPE html>
<html>
<body>

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

$sql = "SELECT * FROM article";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["id"]. "  </td><td> "
        . $row["name"]. "</td><td> ". $row["price"]
        . "</td><td> ". $row["quantity"]. "</td><td>"
        ."<a href='edit.php?id=". $row["id"]. "'><img src='edit.png' style='width:42px;height:42px;'></a>
        <a href='delete.php?id=". $row["id"]. "'><img src='delete.png' style='width:42px;height:42px;'></a>"."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</table>

</body>
</html>
