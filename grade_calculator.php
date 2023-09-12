<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Grade Calculator</title>
</head>
<body>
    <div class="container-sm bg-light p-5">
        <h2 class="mb-5 text-center">Calculate Grade</h2>
        <form method="post">
            <div class="mb-3">
                <label for="test_score1" class="form-label">Test Score 1</label>
                <input type="number" class="form-control" id="test_score1" name="test_score1" required>
            </div>
            <div class="mb-3">
                <label for="test_score2" class="form-label">Test Score 2</label>
                <input type="number" class="form-control" id="test_score2" name="test_score2" required>
            </div>
            <div class="mb-3">
                <label for="test_score3" class="form-label">Test Score 3</label>
                <input type="number" class="form-control" id="test_score3" name="test_score3" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <div class="result mt-3">
            <h4 class="text-center">
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $score1 = $_POST['test_score1'];
                    $score2 = $_POST['test_score2'];
                    $score3 = $_POST['test_score3'];

                    $average = ($score1 + $score2 + $score3) / 3;

                    if ($average >= 80) {
                        $grade = 'A+';
                    } elseif ($average >= 70) {
                        $grade = 'A';
                    } elseif ($average >= 60) {
                        $grade = 'A-';
                    } elseif ($average >= 50) {
                        $grade = 'B';
                    } elseif ($average >= 40) {
                        $grade = 'C';
                    } elseif ($average >= 33) {
                        $grade = 'D';
                    } else {
                        $grade = 'F';
                    }

                    printf('Your Average Score Is %.2f<br>You Got - "%s"', $average, $grade);
                }
            ?>
            </h4>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>