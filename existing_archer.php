<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Existing Archer</title>
</head>
<body>
    <h1>Search Existing Archer</h1>
    <form action="search_archer.php" method="GET">
        <label for="search">Enter Archer Name:</label>
        <input type="text" id="search" name="search" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>
