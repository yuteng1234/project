<?php
$servername = "localhost";
$username = "Yuteng"; 
$password = "565656qW"; 
$dbname = "TUD";
// Create connection
$conn = mysqli_connect($servername, $username,
$password, $dbname);
// Check connection
if (!$conn)
{
die("Connection failed: " .
mysqli_connect_error());
}
echo "Connected successfully . . .";

$x = $_POST["name"];
$y = $_POST["surname"];
$z = $_post["address"];
if($x != '' || $y != ''|| $z != "")
{
$sql = "INSERT INTO students (name,
surname,address) VALUES ('$x', '$y','$z')";
if(mysqli_query($conn, $sql))
{
echo "New record created
successfully";
}
else
{
echo "Error: " . $sql . "<br>" .
mysqli_error($conn);
}
}

?>

