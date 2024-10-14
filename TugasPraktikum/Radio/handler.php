<?php
if (isset($_POST['Input'])) {
    $selected_option = $_POST['flexRadioDefault'];
    echo "Anda telah memilih: " . $selected_option;
} else {
    echo "Anda belum memilih apapun.";
}

echo '<br> <a href="index.php" class="btn btn-primary">Back</a>';
?>
