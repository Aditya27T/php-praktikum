<?php

class SwitchCaseHandler
{
    public function getNilai($nilai)
    {
        switch ($nilai) {
            case 'A':
                return 'Sangat Baik';
                break;
            case 'B':
                return 'Baik';
                break;
            case 'C':
                return 'Cukup';
                break;
            case 'D':
                return 'Kurang';
                break;
            case 'E':
                return 'Sangat Kurang';
                break;
            default:
                return 'Nilai tidak valid';
                break;
        }
    }
    
    public function penilaian($nilai)
    {
        $nilai = $this->getNilai($nilai);
        return $nilai;
    }
}

if (isset($_POST['Submit'])) {
    require_once 'IfCondiHandler.php';
    $value = $_POST['nilai'];
    $getNilai = IfCondiHandler::getGrade($value);
    $switchCaseHandler = new SwitchCaseHandler();
    $grade = $switchCaseHandler->penilaian($getNilai);
    echo "Nilai anda adalah $grade";
}