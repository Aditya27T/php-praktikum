<?php

class FormHandler {
    public function ifElseif() {
        if (isset($_POST['nilai'])) {
            $nilai = $_POST['nilai'];

            if ($nilai >= 85) {
                echo '<p class="alert alert-success">Nilai Anda A</p>';
            } else if ($nilai >= 70) {
                echo '<p class="alert alert-info">Nilai Anda B</p>';
            } else if ($nilai >= 60) {
                echo '<p class="alert alert-warning">Nilai Anda C</p>';
            } else if ($nilai >= 50) {
                echo '<p class="alert alert-danger">Nilai Anda D</p>';
            } else {
                echo '<p class="alert alert-danger">Nilai Anda E</p>';
            }
        } else {
            echo "Nilai tidak ditemukan.";
        }
    }

    public function switchCase() {
        if (isset($_POST['jurusan'])) {
            $jurusan = $_POST['jurusan'];

            switch ($jurusan) {
                case 'TI':
                    echo '<p class="alert alert-primary">Jurusan Anda Teknik Informatika</p>';
                    break;
                case 'SI':
                    echo '<p class="alert alert-primary">Jurusan Anda Sistem Informasi</p>';
                    break;
                case 'TK':
                    echo '<p class="alert alert-primary">Jurusan Anda Teknik Komputer</p>';
                    break;
                default:
                    echo '<p class="alert alert-danger">Jurusan tidak ditemukan.</p>';
                    break;
            }
        } else {
            echo "Jurusan tidak ditemukan.";
        }
    }

    public function forLoop() {
        if (isset($_POST['ulang'])) {
            $ulang = $_POST['ulang'];

            for ($i = 1; $i <= $ulang; $i++) {
                echo "<p>Perulangan ke-$i</p>";
            }
        } else {
            echo "Jumlah pengulangan tidak ditemukan.";
        }
    }
}
