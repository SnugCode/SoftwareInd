<?php
include 'connect.php';

$archerID = $_POST['archerID'];
$option = $_POST['option'];

if ($option == 'casual') {
    // Redirect to equipment selection for casual entry
    header("Location: equipment_form.php?archerID=" . $archerID);
} else if ($option == 'competitive') {
    // Redirect to competition form for competitive entry
    header("Location: competition_form.php?archerID=" . $archerID);
}
?>
