<?php
$host = "127.0.0.1";
$username = "Qaiss";
$password = "Rds157";
$dbname = "hotels";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$guestNo = $_POST['guestNo'];
$guestName = $_POST['guestName'];
$guestAddress = $_POST['guestAddress'];

$sql = "INSERT INTO guest (guestNo, guestName, guestAddress)
VALUES ('$guestNo', '$guestName', '$guestAddress')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
