<!-- save_user.php -->
<?php
// Database configuration
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

// Get user details from the form
$name = $_POST['name'];
$age = $_POST['age'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

// Insert user details into the database
$sql = "INSERT INTO users (name, age, mobile, email) VALUES ('$name', $age, '$mobile', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "User added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
