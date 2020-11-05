<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nattakan Jai-On">
    <link rel="stylesheet" href="style_patient.css">
    <title>Assignment 2</title>
</head>
<body>
<div class="wrapper">

<?php
//Connect to the database
$connection=mysqli_connect("localhost", "root", "root", "pd_assign2");

//Get emailinfo from the User table in database 
$dbuserinfo="SELECT * FROM User WHERE email='dummy2.assign2@gmail.com'";
$emailrows = mysqli_query($connection,$dbuserinfo);
$result = $connection->query($dbuserinfo);

if ($result->num_rows > 0) {
  echo "<h1>Patient info:</hr><br>";
  while($row = $result->fetch_assoc()) {
    echo "<h3>userID: ".$row["userID"] ."</h3>";
    echo "<h3>Organization: ".$row["Organization"]. "</h3>";
    echo "<h3>Username: ".$row["username"]."</h3>"; 
    echo "<h3>Email: ".$row["email"]. "</h3>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

echo "<h1>Patient activity info:</hr><br>";
echo "<h3>Data: <a href='http://localhost:8888/data4.php'>4 </a></h3>";
echo "<h3>Data: <a href='http://localhost:8888/data5.php'>5 </a></h3>";
echo "<h3>Data: <a href='http://localhost:8888/data6.php'>6 </a></h3>";

$conn->close();

?>
</div>
</body>
</html>