<?php
$servername = "localhost";
$db_user = "";
$db_password = "";
$username = "";
$password = "";
$email = "";
$conn = new mysqli($servername, $db_user, $db_password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<title>OFFLINE</title>";
} 
echo "<title>Curio</title>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // this is where we will recieve data from the sign up page
}
?>
