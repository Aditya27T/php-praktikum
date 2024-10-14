<?php

function getJurusan()
{
    return [
        'Teknik Informatika',
        'Sistem Informasi',
        'Teknik Komputer',
        'Manajemen Informatika',
    ];
}

if (isset($_POST['jurusan'])) {
    echo "Jurusan yang dipilih adalah " . $_POST['jurusan'];
    echo "<br>";
    echo "<a href='./index.php'>Kembali</a>";
}

?>