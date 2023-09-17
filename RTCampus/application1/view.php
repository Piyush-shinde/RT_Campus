<!DOCTYPE html>
<html>
<head>
    <title>List Users</title>
</head>
<body>
    <h2>List of Users</h2>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "user_management";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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

    $conn->close();
    ?>
    <a href="adduser.php">Add User</a>
</body>
</html>
