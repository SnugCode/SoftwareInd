<!DOCTYPE html>
<html>
<head>
    <title>Archery Database</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h1>Welcome to the Archery Database</h1>
    <button onclick="showNewArcherForm()">New Archer</button>
    <button onclick="showExistingArcherForm()">Existing Archer</button>

    <div id="newArcherForm" style="display:none;">
        <h2>New Archer Registration</h2>
        <form action="process_new_archer.php" method="post">
            <div class="container">
                <input type="text" id="firstName" name="firstName" class="input" required>
                <label for="firstName" class="label">First Name:</label>
            </div>
            <div class="container">
                <input type="text" id="lastName" name="lastName" class="input" required>
                <label for="lastName" class="label">Last Name:</label>
            </div>
            <div class="container">
                <input type="date" id="dob" name="dob" class="input" required>
                <label for="dob" class="label">Date of Birth:</label>
            </div>
            <div class="container">
                <input type="text" id="gender" name="gender" class="input" required>
                <label for="gender" class="label">Gender:</label>
            </div>
            <input type="submit" value="Register">
        </form>
    </div>

    <div id="existingArcherForm" style="display:none;">
        <h2>Existing Archer</h2>
        <form action="search_archer.php" method="post">
            <div class="container">
                <input type="text" id="searchName" name="searchName" class="input" required>
                <label for="searchName" class="label">Search Name:</label>
            </div>
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
