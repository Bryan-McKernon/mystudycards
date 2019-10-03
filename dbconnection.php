<?php
//NEED TO ADD ERROR HANDLING FOR TIMEOUT
$servername = "mystudycards-rds.csu9rajxglae.us-west-1.rds.amazonaws.com";
$username = "mystudycards";
$password = "Corvette2ab!";
$dbname = "mystudycards_schema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
