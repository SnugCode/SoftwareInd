<?php
include 'connect.php';

$archerID = $_GET['archerID'];
?>

<!DOCTYPE html>
<html>
head>
    <title>Select Competition</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h2>Select Competition</h2>
    <form action="process_competition.php" method="post">
        <input type="hidden" name="archerID" value="<?php echo $archerID; ?>">
        <div class="container">
            <label for="competition" class="label">Competition:</label>
            <select id="competition" name="competition" class="input" required>
                <?php
                $result = $conn->query("SELECT CompetitionID, CompetitionName FROM Competition");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['CompetitionID'] . "'>" . $row['CompetitionName'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="container">
            <label for="division" class="label">Division:</label>
            <select id="division" name="division" class="input" required>
                <?php
                $result = $conn->query("SELECT DivisionID, DivisionName FROM Division");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['DivisionID'] . "'>" . $row['DivisionName'] . "</option>";
                }
                ?>
            </select>
        </div>
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
            <select id="range" name="range" class="input" required>
                <?php
                $result = $conn->query("SELECT RangeID, `Range` FROM Ranges");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['RangeID'] . "'>" . $row['Range'] . "</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span>Next</span>
        </button>
    </form>
</body>
</html>

<?php
$conn->close();
?>
