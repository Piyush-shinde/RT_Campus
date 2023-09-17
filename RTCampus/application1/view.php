<!-- list_users.php -->
<!DOCTYPE html>
<html>
<head>
    <title>List Users</title>
</head>
<body>
    <h2>List of Users</h2>
    <?php
    // Database configuration (same as save_user.php)
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "user_management";

    // Connect to MySQL
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve users from the database
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>Name: " . $row['name'] . ", Age: " . $row['age'] . ", Mobile: " . $row['mobile'] . ", Email: " . $row['email'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No users found.";
    }

    // Close the database connection
    $conn->close();
    ?>
    <a href="adduser.php">Add User</a>
</body>
</html>
