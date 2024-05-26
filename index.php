<!DOCTYPE html>
<html>
<head>
    <title>Archery Database</title>
</head>
<body>
    <h1>Welcome to the Archery Database</h1>
    <button onclick="showNewArcherForm()">New Archer</button>
    <button onclick="showExistingArcherForm()">Existing Archer</button>

    <div id="newArcherForm" style="display:none;">
        <h2>New Archer Registration</h2>
        <form action="process_new_archer.php" method="post">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required><br>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" required><br>
            <input type="submit" value="Register">
        </form>
    </div>

    <div id="existingArcherForm" style="display:none;">
        <h2>Existing Archer</h2>
        <form action="search_archer.php" method="post">
            <label for="searchName">Enter One Name:</label>
            <input type="text" id="searchName" name="searchName" required>
            <input type="submit" value="Search">
        </form>
    </div>

    <script>
        function showNewArcherForm() {
            document.getElementById('newArcherForm').style.display = 'block';
            document.getElementById('existingArcherForm').style.display = 'none';
        }

        function showExistingArcherForm() {
            document.getElementById('newArcherForm').style.display = 'none';
            document.getElementById('existingArcherForm').style.display = 'block';
        }
    </script>
</body>
</html>
