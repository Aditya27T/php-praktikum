<?php

$data  = array("Teknik Inggris (TI)", "Sastra Mesin (SM)", "Pendidikan dasar Informatika (PDI)");


if (isset($_POST['Input'])) {
    $selected_option = $_POST['flexRadioDefault'];
    echo "Anda telah memilih: " . $data[$selected_option];
} else {
    echo "Anda belum memilih apapun.";
}