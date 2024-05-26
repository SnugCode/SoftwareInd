<?php
include 'connect.php';

$archerID = isset($_GET['archerID']) ? $_GET['archerID'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Equipment</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h2>Select Equipment</h2>
    <form action="process_equipment.php" method="post">
        <input type="hidden" name="archerID" value="<?php echo $archerID; ?>">
        <div class="container">
            <label for="equipment" class="label">Equipment:</label>
            <select id="equipment" name="equipment" class="input" required>
                <?php
                $result = $conn->query("SELECT EquipmentID, Types FROM Equipment");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['EquipmentID'] . "'>" . $row['Types'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="container">
            <label for="round" class="label">Round:</label>
            <select id="round" name="round" class="input" required>
                <?php
                $result = $conn->query("SELECT RoundID, RoundName FROM Round");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['RoundID'] . "'>" . $row['RoundName'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="container">
            <label for="range" class="label">Range:</label>
            <select id="range" name="range" class="input" required onchange="updateNumEnds()">
                <?php
                $result = $conn->query("SELECT RangeID, `Range` FROM Ranges");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['RangeID'] . "' data-numends='" . $row['Range'] . "'>" . $row['Range'] . "</option>";
                }
                ?>
            </select>
        </div>
        <input type="hidden" id="numEnds" name="numEnds">
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span>Next</span>
        </button>
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
