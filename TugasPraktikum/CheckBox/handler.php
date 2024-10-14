<?php

function getMenu(){
    return [
        'Soto Ayam',
        'Soto Daging',
        'Soto Kambing',
        'Bakso',
        'Mie Ayam'
    ];
}


function getSelectedMenu($menu){
    $data = getMenu();
    $selected = [];
    foreach ($data as $key => $value) {
        if(in_array($value, $menu)){
            $selected[] = $value;
        }
    }
    return $selected;
}

if(isset($_POST['submit'])){
    $menu = $_POST['menu'];
    $selectedMenu = getSelectedMenu($menu);
    echo "Menu yang dipilih: <br>";
    foreach ($selectedMenu as $key => $value) {
        echo $value . "<br>";
    }
    echo "<br>";
    echo "<a href='./index.php'>Kembali</a>";
}