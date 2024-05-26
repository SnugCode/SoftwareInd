<?php
$archerID = $_POST['archerID'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Archer Options</title>
</head>
<body>
    <h2>Choose Option</h2>
    <form action="process_existing_archer.php" method="post">
        <input type="hidden" name="archerID" value="<?php echo $archerID; ?>">
        <button type="submit" name="option" value="casual">Casual</button>
        <button type="submit" name="option" value="competitive">Competitive</button>
    </form>
</body>
</html>
