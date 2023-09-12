<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Simple Calculator</title>
</head>
<body>
    <div class="container-sm bg-light p-5">
        <h2 class="mb-5 text-center">Simple Calculator</h2>
        <form method="post">
            <div class="mb-3">
                <label for="number1" class="form-label">First Number</label>
                <input type="number" class="form-control" id="number1" name="number1" required>
            </div>
            <div class="mb-3">
                <label for="number2" class="form-label">Second Number</label>
                <input type="number" class="form-control" id="number2" name="number2" required>
            </div>
            <div class="mb-3">
                <label for="operation" class="form-label">Operation</label>
                <select class="form-select" name="operation" id="operation">
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="mul">Multiplication</option>
                    <option value="div">Division</option>
                    <option value="avg">Average</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <div class="result mt-3">
            <h4 class="text-center">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $operation = $_POST['operation'];

                    if ('add' == $operation) {
                        $result = $number1 + $number2;
                    } elseif ('sub' == $operation) {
                        $result = $number1 - $number2;
                    } elseif ('mul' == $operation) {
                        $result = $number1 * $number2;
                    } elseif ('div' == $operation) {
                        $result = $number1 / $number2;
                    } elseif ('avg' == $operation) {
                        $result = ($number1 + $number2) / 2;
                    }

                    print("The result is : {$result}");
                }
            ?>
            </h4>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>