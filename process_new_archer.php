<?php
include 'connect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$sql = "INSERT INTO Archer (FirstName, LastName, DOB, Gender) VALUES ('$first_name', '$last_name', '$dob', '$gender')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header("Location: new_archer_details.php?archer_id=" . $last_id);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
