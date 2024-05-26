<?php
$archer_id = $_POST['archer_id'];
$option = $_POST['option'];

if ($option == 'casual') {
    header("Location: new_archer_details.php?archer_id=" . $archer_id);
} else {
    header("Location: competitive_details.php?archer_id=" . $archer_id);
}
?>
