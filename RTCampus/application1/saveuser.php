
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "user_management";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, age, mobile, email) VALUES ('$name', $age, '$mobile', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "User added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
