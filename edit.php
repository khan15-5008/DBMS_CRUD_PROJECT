<?php
include('config.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User updated successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
    <h1>Edit User</h1>


    <form method="POST" action="edit.php?id=<?php echo $id; ?>">
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br><br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>"><br><br>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>


    <a href="index.php" class="btn btn-home">Home</a>
</div>


<script src="script.js"></script>
</body>
</html>


