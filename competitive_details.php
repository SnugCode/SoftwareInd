<?php
include 'connect.php';

$archer_id = $_GET['archer_id'];

$sql_competition = "SELECT * FROM Competition";
$result_competition = $conn->query($sql_competition);

$sql_equipment = "SELECT * FROM Equipment";
$result_equipment = $conn->query($sql_equipment);

$sql_division = "SELECT * FROM Division";
$result_division = $conn->query($sql_division);

$sql_round = "SELECT * FROM Round";
$result_round = $conn->query($sql_round);

$sql_range = "SELECT * FROM Ranges";
$result_range = $conn->query($sql_range);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competitive Details</title>
</head>
<body>
    <h1>Enter Competitive Details</h1>
    <form action="process_competitive_details.php" method="POST">
        <input type="hidden" name="archer_id" value="<?php echo $archer_id; ?>">
        <label for="competition">Competition:</label>
        <select id="competition" name="competition" required>
            <?php while($row = $result_competition->fetch_assoc()): ?>
                <option value="<?php echo $row['CompetitionID']; ?>"><?php echo $row['CompetitionName']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <label for="equipment">Equipment:</label>
        <select id="equipment" name="equipment" required>
            <?php while($row = $result_equipment->fetch_assoc()): ?>
                <option value="<?php echo $row['EquipmentID']; ?>"><?php echo $row['Types']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <label for="division">Division:</label>
        <select id="division" name="division" required>
            <?php while($row = $result_division->fetch_assoc()): ?>
                <option value="<?php echo $row['DivisionID']; ?>"><?php echo $row['DivisionName']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <label for="round">Round:</label>
        <select id="round" name="round" required>
            <?php while($row = $result_round->fetch_assoc()): ?>
                <option value="<?php echo $row['RoundID']; ?>"><?php echo $row['RoundName']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <label for="range">Range:</label>
        <select id="range" name="range" required>
            <?php while($row = $result_range->fetch_assoc()): ?>
                <option value="<?php echo $row['RangeID']; ?>"><?php echo $row['Range']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <label for="arrow1">Arrow 1:</label>
        <input type="number" id="arrow1" name="arrow1" required><br>
        <label for="arrow2">Arrow 2:</label>
        <input type="number" id="arrow2" name="arrow2" required><br>
        <label for="arrow3">Arrow 3:</label>
        <input type="number" id="arrow3" name="arrow3" required><br>
        <label for="arrow4">Arrow 4:</label>
        <input type="number" id="arrow4" name="arrow4" required><br>
        <label for="arrow5">Arrow 5:</label>
        <input type="number" id="arrow5" name="arrow5" required><br>
        <label for="arrow6">Arrow 6:</label>
        <input type="number" id="arrow6" name="arrow6" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
