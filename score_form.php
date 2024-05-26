<?php
$stagingID = $_GET['stagingID'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enter Scores</title>
</head>
<body>
    <h2>Enter Scores</h2>
    <form action="process_score.php" method="post">
        <input type="hidden" name="stagingID" value="<?php echo $stagingID; ?>">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
            <label for="arrow<?php echo $i; ?>">Arrow <?php echo $i; ?>:</label>
            <select id="arrow<?php echo $i; ?>" name="arrow<?php echo $i; ?>" required>
                <option value="0">M</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="10">X</option>
            </select><br>
        <?php } ?>
        <input type="submit" value="Submit Scores">
    </form>
</body>
</html>
