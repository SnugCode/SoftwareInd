<?php
include 'connect.php';

$archerID = $_POST['archerID'];
$equipmentID = $_POST['equipment'];
$roundID = $_POST['round'];
$rangeID = $_POST['range'];

$sql = "INSERT INTO Staging (ArcherID, EquipmentID, RoundID, RangeID, StageDate, StageTime) VALUES ('$archerID', '$equipmentID', '$roundID', '$rangeID', CURDATE(), CURTIME())";

if ($conn->query($sql) === TRUE) {
    $stagingID = $conn->insert_id;
    header("Location: score_form.php?stagingID=" . $stagingID);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
