<?php
$stagingID = isset($_GET['stagingID']) ? $_GET['stagingID'] : null;
$numEnds = isset($_GET['numEnds']) ? $_GET['numEnds'] : null;

if (!$stagingID || !$numEnds) {
    die('Missing parameters.');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enter Scores</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h2>Enter Scores</h2>
    <form action="process_score.php" method="post">
        <input type="hidden" name="stagingID" value="<?php echo $stagingID; ?>">
        <input type="hidden" name="numEnds" value="<?php echo $numEnds; ?>">
        <?php for ($end = 1; $end <= $numEnds; $end++) { ?>
            <h3>End <?php echo $end; ?></h3>
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="container">
                    <label for="arrow<?php echo $end . '_' . $i; ?>" class="label">Arrow <?php echo $i; ?>:</label>
                    <select id="arrow<?php echo $end . '_' . $i; ?>" name="arrow<?php echo $end . '_' . $i; ?>" class="input" required>
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
                        <option value="X">X</option>
                    </select>
                </div>
            <?php } ?>
        <?php } ?>
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span>Submit Scores</span>
        </button>
    </form>
</body>
</html>
