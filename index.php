<?php
include('config.php');


// Fetch records from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$row_number = 1;  // Initialize the row number
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
    <h1>User Management</h1>


    <a href="add.php" class="btn btn-primary">Add New User</a>


    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row_number++; ?></td>  <!-- Row counter starts at 1 and increments -->
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<!-- Footer aligned to the content area -->
<!-- Footer Section -->
<div class="container">
    <footer>
        <div class="footer-content">
            <p><strong>User Management Application</strong></p>
            <p class="footer-text">
                This Application is a simple user management system that allows you to perform essential operations such as Create, Read, Update, and Delete user data. Built using PHP and MySQL, this project serves as a demonstration of the core functionality of database-driven applications.
            </p>
            <p class="footer-text">
                Designed and developed by: <strong>A Team of 61_N</strong>
            </p>
        </div>
    </footer>
</div>




<script src="script.js"></script>
</body>
</html>
