<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add User</h2>
    <form action="saveuser.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="mobile">Mobile:</label>
        <input type="text" name="mobile" required><br>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>
