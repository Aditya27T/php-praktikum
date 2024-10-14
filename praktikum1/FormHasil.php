<?php
    include 'FormHandler.php';
    $formHandler = new FormHandler();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Hasil Program PHP Menggunakan OOP</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Hasil IF-ELSEIF</h3>
                <?php $formHandler->ifElseif(); ?>
            </div>
            <div class="col-md-4">
                <h3>Hasil SWITCH-CASE</h3>
                <?php $formHandler->switchCase(); ?>
            </div>
            <div class="col-md-4">
                <h3>Hasil FOR Loop</h3>
                <?php $formHandler->forLoop(); ?>
            </div>
    </div>
</body>
</html>