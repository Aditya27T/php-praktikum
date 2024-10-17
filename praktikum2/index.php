<?php
$numbers = array(10, 20, 30, 40, 50);
// 
function displayArray($numbers) {
    echo "Array: ";
    foreach ($numbers as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

// displayArray($numbers);


// pass by reference
function addValue(&$numbers, $value) {
    $numbers[] = $value;
    echo "Memory usage: " . memory_get_usage() . "<br>";
}

addValue($numbers, 60);

displayArray($numbers);

// pass by value
function addValue2($numbers, $value) {
    $numbers[] = $value;
    echo "Memory usage: " . memory_get_usage() . "<br>";
}

addValue2($numbers, 70);
displayArray($numbers);
?>
