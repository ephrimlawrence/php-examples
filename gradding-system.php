<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <style>
        html {
            min-height: 100%;
        }

        body {
            /*padding-top: 50px;*/
        }

        .grade-form {
            display: block;
            text-align: center;
            padding-top: 50px;
        }
    </style>
    <title>Gradding System</title>
</head>
<body>
    <?php
    if (isset($_GET['submit'])) {
        $score = $_GET['score'];

        switch ($score) {
            case $score >= 80:
                echo "<h3 align='center'>A</h3>";
                echo "<h3 align='center'>Eii you are sharp oo!!</h3>";
                break;
            case $score >= 75:
                echo "<h3 align='center'>You got grade <b>B+</b></h3>";
                break;
            case $score >= 70:
                echo "<h3 align='center'>You got grade <b>B</b></h3>";
                break;
            case $score >= 65:
                echo "<h3 align='center'>You got grade <b>C+</b></h3>";
                break;
            case $score >= 60:
                echo "<h3 align='center'>You got grade <b>C</b></h3>";
                break;
            case $score >= 55:
                echo "<h3 align='center'>You got grade <b>D+</b></h3>";
                break;
            case $score >= 50:
                echo "<h3 align='center'>You got grade <b>D</b></h3>";
                break;
            case $score < 50:
                echo "<h3 align='center'>You got grade <b>E</b></h3>";
                break;
            default:
                echo "<h4 align='center'>Invalid exam score</h4>";
                break;
        }
        exit;
    }
    ?>
    <div class="container">
        <div class="grade-form">
            <form action="<?php $_PHP_SELF ?>" method="GET">
                <div class="form-group" align="center">
                    <input type="input" class="form-control col-3 text-center" id="exam-score" aria-describedby="exam-score" placeholder="Enter exam score" name="score">
                    <small id="score-help" class="form-text text-muted">We'll never share your score with anyone else.</small>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<!--
b = 70-74
c+ = 65-69
c = 60-64
d+ = 55-59
d = 50-54
e < e -->