<?php

class IfCondiHandler
{
    public function getGrade($nilai)
    {
        if ($nilai >= 90) {
            return 'A';
        } elseif ($nilai >= 80) {
            return 'B';
        } elseif ($nilai >= 70) {
            return 'C';
        } elseif ($nilai >= 60) {
            return 'D';
        } else {
            return 'E';
        }
    }

    public function penilaian($nilai)
    {
        $nilai = $this->getGrade($nilai);
        return $nilai;
    }
}

if (isset($_POST['Submit'])) {
    $nilai = $_POST['nilai'];
    $ifCondiHandler = new IfCondiHandler();
    $grade = $ifCondiHandler->penilaian($nilai);
    echo "Nilai anda adalah $grade";
}