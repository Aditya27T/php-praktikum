<?php
require_once 'Handler.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $program = $_POST['program'];
    $handler = new Handler();
    $output = "";

    if ($program == 'ifelse') {
        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;

        if ($username !== null && $password !== null) {
            $output = $handler->Ifelse($username, $password);
        } else {
            $output = "Please provide both username and password.";
        }
    } elseif ($program == 'switchcase') {
        $month = isset($_POST['month']) ? $_POST['month'] : null;

        if ($month !== null) {
            $output = $handler->Switchcase($month);
        } else {
            $output = "Please select a month.";
        }
    } elseif ($program == 'looping') {
        $number = isset($_POST['number']) ? $_POST['number'] : null;

        if ($number !== null) {
            $output = $handler->Looping($number);
        } else {
            $output = "Please enter a number.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Program Output</h2>
        <div class="alert alert-info">
            <?php echo $output; ?>
        </div>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
