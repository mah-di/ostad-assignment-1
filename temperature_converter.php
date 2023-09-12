<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Temp Converter</title>
</head>
<body>
    <div class="container-sm bg-light p-5">
        <h2 class="mb-5 text-center">Temperature Converter</h2>
        <form method="post">
            <div class="mb-3">Given Temperature: %d Celcius\n
                <label for="temp_input" class="form-label">Input Temperature</label>
                <input type="number" class="form-control" id="temp_input" name="temp_input" required>
            </div>
            <div class="mb-3">
                <label for="operation" class="form-label">Convert to</label>
                <select class="form-select" name="operation" id="operation">
                    <option value="C-F">Celcius to Fahrenheit</option>
                    <option value="F-C">Fahrenheit to Celcius</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Convert</button>
        </form>

        <div class="result mt-3">
            <h4 class="text-center">
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $inputTemp = $_POST['temp_input'];

                    if($_POST['operation'] == 'C-F') {
                        $result = ($inputTemp * 1.8) + 32;
                        printf("Given Temperature: %d° Celcius<br>Converted Temperature: %.2f° Fahrenheit", $inputTemp, $result);
                    } elseif ($_POST['operation'] == 'F-C') {
                        $result = ($inputTemp - 32) / 1.8;
                        printf("Given Temperature: %d° Fahrenheit<br>Converted Temperature: %.2f° Celcius", $inputTemp, $result);
                    }
                }
            ?>
            </h4>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>