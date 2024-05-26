<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Archer</title>
</head>
<body>
    <h1>Enter New Archer Details</h1>
    <form action="process_new_archer.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
