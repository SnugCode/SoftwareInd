<?php
include 'connect.php';

$archer_id = $_POST['archer_id'];
$equipment_id = $_POST['equipment'];
$round_id = $_POST['round'];
$range_id = $_POST['range'];
$arrow1 = $_POST['arrow1'];
$arrow2 = $_POST['arrow2'];
$arrow3 = $_POST['arrow3'];
$arrow4 = $_POST['arrow4'];
$arrow5 = $_POST['arrow5'];
$arrow6 = $_POST['arrow6'];

$sql_end = "INSERT INTO End (Arrow1, Arrow2, Arrow3, Arrow4, Arrow5, Arrow6) VALUES ('$arrow1', '$arrow2', '$arrow3', '$arrow4', '$arrow5', '$arrow6')";

if ($conn->query($sql_end) === TRUE) {
    $end_id = $conn->insert_id;
    $sql_score = "CALL insert_into_score('$end_id')";
    if ($conn->query($sql_score) === TRUE) {
        $sql_staging = "INSERT INTO Staging (ArcherID, EquipmentID, ScoreID, RoundID, RangeID, StageDate, StageTime) VALUES ('$archer_id', '$equipment_id', '$end_id', '$round_id', '$range_id', CURDATE(), CURTIME())";
        if ($conn->query($sql_staging) === TRUE) {
            echo "Data successfully inserted!";
        } else {
            echo "Error: " . $sql_staging . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql_score . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql_end . "<br>" . $conn->error;
}

$conn->close();
?>
