<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Program PHP Menggunakan OOP</h2>

    <form method="post" action="FormHasil.php" class="container">
        <h3>Program IF-ELSEIF</h3>
        <label for="nilai">Masukkan nilai (0-100):</label>
        <input type="number" name="nilai" id="nilai" min="0" max="100" required><br><br>

        <h3>Program SWITCH-CASE</h3>
        <label for="jurusan">Pilih Jurusan:</label>
        <select name="jurusan" id="jurusan" required>
            <option value="TI">Teknik Informatika</option>
            <option value="SI">Sistem Informasi</option>
            <option value="TK">Teknik Komputer</option>
        </select><br><br>

        <h3>Program FOR Loop</h3>
        <label for="ulang">Masukkan jumlah pengulangan (1-10):</label>
        <input type="number" name="ulang" id="ulang" min="1" max="10" required><br><br>

        <input type="submit" value="Submit" name="Submit" class="btn btn-primary">
    </form>
</body>
</html>
