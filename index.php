<?php include("dbconnect.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Ticket Booking</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Welcome to Railway & Bus Ticket Booking</h1>
  <form action="booking.php" method="POST">
    <label>Name:</label><input type="text" name="name"><br>
    <label>From:</label><input type="text" name="from_city"><br>
    <label>To:</label><input type="text" name="to_city"><br>
    <label>Mode:</label>
      <select name="mode">
        <option value="Bus">Bus</option>
        <option value="Train">Train</option>
      </select><br>
    <input type="submit" value="Book Ticket">
  </form>
</body>
</html>
