<?php
include('config.php');


// Add user logic
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New user added successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
    <h1>Add New User</h1>


    <form method="POST" action="add.php">
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="phone" placeholder="Phone"><br><br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>


    <a href="index.php" class="btn btn-home">Home</a>
</div>


<script src="script.js"></script>
</body>
</html>
