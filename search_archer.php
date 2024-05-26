<?php
include 'connect.php';

$searchName = $_POST['searchName'];

$sql = "SELECT * FROM Archer WHERE FirstName LIKE '%$searchName%' OR LastName LIKE '%$searchName%'";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Archer</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php
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
    echo "<p>No archers found.</p>";
}
$conn->close();
?>
</body>
</html>
