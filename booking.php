<?php
include("dbconnect.php");

$name = $_POST['name'];
$from = $_POST['from_city'];
$to   = $_POST['to_city'];
$mode = $_POST['mode'];

$sql = "INSERT INTO bookings (name, from_city, to_city, mode) VALUES ('$name', '$from', '$to', '$mode')";
if ($conn->query($sql) === TRUE) {
    echo "✅ Ticket booked successfully!";
} else {
    echo "❌ Error: " . $conn->error;
}
?>
