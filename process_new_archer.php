<?php
include 'connect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$sql = "INSERT INTO Archer (FirstName, LastName, DOB, Gender) VALUES ('$firstName', '$lastName', '$dob', '$gender')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header("Location: equipment_form.php?archerID=" . $last_id);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
