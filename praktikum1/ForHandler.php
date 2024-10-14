<?php

class ForHandler
{
    public function getGrade($nilai)
    {
        $grades = [];
        $getNilai = new IfCondiHandler();
        for ($i = 0; $i < count($nilai); $i++) {
            $grades[] = $getNilai->getGrade($nilai[$i]);
        }

        return $grades;
    }

    public function penilaian($nilai)
    {
        $nilai = $this->getGrade($nilai);
        return $nilai;
    }
}

if (isset($_POST['Submit'])) {
    $nilai = $_POST['nilai'];
    $forHandler = new ForHandler();
    $grade = $forHandler->penilaian($nilai);
    echo "Nilai anda adalah ";
    foreach ($grade as $key => $value) {
        echo $value . " ";
    }
}