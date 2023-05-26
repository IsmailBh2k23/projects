<!DOCTYPE html>
<html>
<style>
input[type=text], [type=number]  {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Modifier un article</h3>

<div>
  <form action="save.php" method="post">
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

$sql = "SELECT * FROM article where id =".$_REQUEST["id"];
$result = $conn->query($sql);


    // output data of each row
    $row = $result->fetch_assoc() ;
    echo "<label for='id'> ID</label>";
    echo "<input type='text'  name='id' value=". $row["id"]. " >";

    echo "<label for='name'> Name</label>";
    echo "<input type='text'  name='name' value=".$row["name"].">";

    echo "<label for='price'>price</label>";
    echo "<input type='number'  name='price' value=".$row["price"].">";
    
    echo "<label for='quantity'>Quantity</label>";
    echo "<input type='number'  name='quantity' value=".$row["quantity"].">";

    $conn->close();
?>
    <input type="submit" value="Submit">

  </form>
</div>

</body>
</html>


