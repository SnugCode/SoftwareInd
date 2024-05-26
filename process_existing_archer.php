<?php
$archerID = $_POST['archerID'];
$option = $_POST['option'];

if ($option == 'casual') {
    header("Location: equipment_form.php?archerID=" . $archerID);
} else if ($option == 'competitive') {
    header("Location: competition_form.php?archerID=" . $archerID);
}
?>
