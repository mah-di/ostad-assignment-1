<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Even Odd Checker</title>
</head>
<body>
    <div class="container-sm bg-light p-5">
        <h2 class="mb-5 text-center">Check Even Or Odd Number</h2>
        <form method="post">
            <div class="mb-3">
                <label for="number" class="form-label">Enter a Number</label>
                <input type="number" class="form-control" id="number" name="number" required>
            </div>
            <button type="submit" class="btn btn-primary">Check</button>
        </form>

        <div class="result mt-3">
            <h4 class="text-center">
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $number = $_POST['number'];

                    $result = match($number % 2) {
                        0 => "Even",
                        1 => "Odd"
                    };

                    printf('The number "%d" is an %s number', $number, $result);
                }
            ?>
            </h4>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>