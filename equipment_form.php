<?php
include 'connect.php';

$archerID = isset($_GET['archerID']) ? $_GET['archerID'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Equipment</title>
</head>
<body>
    <h2>Select Equipment</h2>
    <form action="process_equipment.php" method="post">
        <input type="hidden" name="archerID" value="<?php echo $archerID; ?>">
        <label for="equipment">Equipment:</label>
        <select id="equipment" name="equipment" required>
            <?php
            $result = $conn->query("SELECT EquipmentID, Types FROM Equipment");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['EquipmentID'] . "'>" . $row['Types'] . "</option>";
            }
            ?>
        </select><br>
        <label for="round">Round:</label>
        <select id="round" name="round" required>
            <?php
            $result = $conn->query("SELECT RoundID, RoundName FROM Round");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['RoundID'] . "'>" . $row['RoundName'] . "</option>";
            }
            ?>
        </select><br>
        <label for="range">Range:</label>
        <select id="range" name="range" required onchange="updateNumEnds()">
            <?php
            $result = $conn->query("SELECT RangeID, `Range` FROM Ranges");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['RangeID'] . "' data-numends='" . $row['Range'] . "'>" . $row['Range'] . "</option>";
            }
            ?>
        </select><br>
        <input type="hidden" id="numEnds" name="numEnds">
        <input type="submit" value="Next">
    </form>

    <script>
        function updateNumEnds() {
            const rangeSelect = document.getElementById('range');
            const selectedOption = rangeSelect.options[rangeSelect.selectedIndex];
            const numEnds = selectedOption.getAttribute('data-numends');
            document.getElementById('numEnds').value = numEnds;
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>
