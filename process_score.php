<?php
include 'connect.php';

$stagingID = $_POST['stagingID'];
$numEnds = $_POST['numEnds'];

for ($end = 1; $end <= $numEnds; $end++) {
    $arrows = [];
    for ($i = 1; $i <= 6; $i++) {
        $score = $_POST["arrow{$end}_$i"];
        $score = ($score == 'X') ? 10 : (($score == 'M') ? 0 : $score);
        $arrows[] = $score;
    }

    // Insert into End table
    $sql = "INSERT INTO `End` (Arrow1, Arrow2, Arrow3, Arrow4, Arrow5, Arrow6) VALUES ('$arrows[0]', '$arrows[1]', '$arrows[2]', '$arrows[3]', '$arrows[4]', '$arrows[5]')";

    if ($conn->query($sql) === TRUE) {
        $endID = $conn->insert_id;

        // Insert into Score table
        $sql = "INSERT INTO `Score` (EndID) VALUES ('$endID')";
        if ($conn->query($sql) === TRUE) {
            $scoreID = $conn->insert_id;

            // Update Staging table with the first scoreID
            if ($end == 1) {
                $sql = "UPDATE `Staging` SET ScoreID = '$scoreID' WHERE StagingID = '$stagingID'";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error updating staging table: " . $conn->error;
                }
            }
        } else {
            echo "Error inserting score: " . $conn->error;
        }
    } else {
        echo "Error inserting end: " . $conn->error;
    }
}

echo "Scores submitted successfully!";
$conn->close();
?>
