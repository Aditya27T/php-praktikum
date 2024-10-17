<?php require_once 'AuthController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Login</h2>
        
        <?php if (!$isLoggedIn): ?>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <form method="POST" class="mt-3">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        <?php else: ?>
            <h2 class="mt-3">Selamat Datang, <?php echo $sessionData['user']; ?></h2>
            <h3>Data Session:</h3>
            <pre><?php print_r($sessionData); ?></pre>
            <a href="?action=logout" class="btn btn-danger mt-2">Logout</a>
        <?php endif; ?>

        <?php if (isset($destroyedSessionData)): ?>
            <h3 class="mt-3">Sesi Dihancurkan:</h3>
            <pre><?php print_r($destroyedSessionData); ?></pre>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
