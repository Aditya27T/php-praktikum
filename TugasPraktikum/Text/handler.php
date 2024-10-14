<?php

if(isset($_POST['Submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kodepos = $_POST['kodepos'];

    echo "<div class='container'>";
    echo "<h3>Informasi Pengiriman:</h3>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Kota: $kota</p>";
    echo "<p>Kode Pos: $kodepos</p>";
    echo "</div>";
    echo '<a href="index.php" class="btn btn-primary">Back</a>';
}
?>