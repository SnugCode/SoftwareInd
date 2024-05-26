<?php
include 'connect.php';

$archerID = $_POST['archerID'];
$competitionID = $_POST['competition'];
$divisionID = $_POST['division'];
$equipmentID = $_POST['equipment'];
$roundID = $_POST['round'];
$rangeID = $_POST['range'];

$sql = "INSERT INTO Staging (ArcherID, EquipmentID, RoundID, RangeID, StageDate, StageTime) VALUES ('$archerID', '$equipmentID', '$roundID', '$rangeID', CURDATE(), CURTIME())";

if ($conn->query($sql) === TRUE) {
    $stagingID = $conn->insert_id;
    $sql = "INSERT INTO Competitive (StagingID, CompetitionID, DivisionID) VALUES ('$stagingID', '$competitionID', '$divisionID')";
    if ($conn->query($sql) === TRUE) {
        header("Location: score_form.php?stagingID=" . $stagingID);
    } else {
        echo "Error inserting into Competitive: " . $conn->error;
    }
} else {
    echo "Error inserting into Staging: " . $conn->error;
}

$conn->close();
?>
