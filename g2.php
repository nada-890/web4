<?php
// Get the text from the POST request
$text = $_POST['name'];

// Save the text to the database
// Replace the database connection details with your own
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'get';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO gett (name) VALUES ('$text')";

if ($conn->query($sql) === TRUE) {
    echo 'Text saved successfully';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>