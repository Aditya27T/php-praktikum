<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h2>Select Program</h2>
        <form action="controller.php" method="post" id="mainForm" class="container">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Choose Program</label>
                <select class="form-select" id="program" name="program">
                    <option value="">Select Program</option>
                    <option value="ifelse">Login (If Else)</option>
                    <option value="switchcase">Month Selection (Switch Case)</option>
                    <option value="looping">Multiplication Table (Looping)</option>
                </select>
            </div>
            <div id="inputFields"></div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    $(document).ready(function() {
        $('#program').change(function() {
            var program = $(this).val();
            var inputFields = '';

            if (program == 'ifelse') {
                inputFields = `
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                `;
            } else if (program == 'switchcase') {
                inputFields = `
                    <div class="mb-3">
                        <label for="month" class="form-label">Select Month</label>
                        <select class="form-select" id="month" name="month">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                `;
            } else if (program == 'looping') {
                inputFields = `
                    <div class="mb-3">
                        <label for="number" class="form-label">Enter a number for the multiplication table</label>
                        <input type="number" class="form-control" id="number" name="number" required>
                    </div>
                `;
            }

            $('#inputFields').html(inputFields);
        });
    });
</script>
</html>
