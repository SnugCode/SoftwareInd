<?php
include 'connect.php';

$stagingID = $_POST['stagingID'];
$arrows = [];
for ($i = 1; $i <= 6; $i++) {
    $arrows[] = $_POST["arrow$i"];
}

$sql = "INSERT INTO End (Arrow1, Arrow2, Arrow3, Arrow4, Arrow5, Arrow6) VALUES ('$arrows[0]', '$arrows[1]', '$arrows[2]', '$arrows[3]', '$arrows[4]', '$arrows[5]')";

if ($conn->query($sql) === TRUE) {
    $endID = $conn->insert_id;
    $sql = "CALL insert_into_score('$endID')";
    if ($conn->query($sql) === TRUE) {
        $scoreID = $conn->insert_id;
        $sql = "UPDATE Staging SET ScoreID = '$scoreID' WHERE StagingID = '$stagingID'";
        if ($conn->query($sql) === TRUE) {
            echo "Scores submitted successfully!";
        } else {
            echo "Error updating staging table: " . $conn->error;
        }
    } else {
        echo "Error inserting score: " . $conn->error;
    }
} else {
    echo "Error inserting end: " . $conn->error;
}

$conn->close();
?>
