<!DOCTYPE html>
<html>
<head>
    <title>Treasure Hunt Results</title>
</head>
<body>
    <h2>Treasure Hunt Results</h2>
    <?php
    $number = $_POST["number"];
    $text = $_POST["text"];

    $command = escapeshellcmd("python3 process.py $number $text");
    $output = shell_exec($command);
    
    echo $output;
    ?>
</body>
</html>
