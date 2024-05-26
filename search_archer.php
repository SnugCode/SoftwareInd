<?php
include 'connect.php';

$searchName = $_POST['searchName'];

$sql = "SELECT * FROM Archer WHERE FirstName LIKE '%$searchName%' OR LastName LIKE '%$searchName%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Select Archer</h2>";
    echo "<form action='select_archer.php' method='post'>";
    echo "<select name='archerID' required>";
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['ArcherID'] . "'>" . $row['FirstName'] . " " . $row['LastName'] . "</option>";
    }
    echo "</select><br>";
    echo "<input type='submit' value='Next'>";
    echo "</form>";
} else {
    echo "No archers found.";
}

$conn->close();
?>
