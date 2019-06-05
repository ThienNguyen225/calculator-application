<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập calculator application</title>
</head>
<style>
    form{
        margin-left: 38%;
    }
    .display {
        height: 180px;
        width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }
    input[type=number]{
        width: 80%;
        padding: 5px;
        margin: 5px;
    }
    select[name=calculation]{
        width: 50%;
        padding: 5px;
        margin-left: 20%;
    }
    h2{
        color: blue;
    }
    input[value=result]{
        color: red;
        width: 50%;
        padding: 5px;
        margin-left: 20%;
    }
</style>
<body>
<form method="post">
    <div class="display">
        <h2>Calculator application</h2>
        <input type="number" name="theFirstValue" size="30">
        <select name="calculation">
            <option value="+">plus</option>
            <option value="-">minus</option>
            <option value="*">multiply</option>
            <option value="/">share</option>
        </select>
        <input type="number" name="secondValue" size="30">
        <input type="submit" value="result">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstValue = $_POST["theFirstValue"];
    $secondValue = $_POST["secondValue"];
    $calculation = $_POST["calculation"];
    if ($calculation === "+") {
        $result = $firstValue + $secondValue;
    } elseif ($calculation === "-") {
        $result = $firstValue - $secondValue;
    } elseif ($calculation === "*") {
        $result = $firstValue * $secondValue;
    } else {
        $result = $firstValue / $secondValue;
    }

    echo $result;
}
?>
</body>
</html>