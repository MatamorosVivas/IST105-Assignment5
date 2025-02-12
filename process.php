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

    // Execute Python script
    $command = escapeshellcmd("python3 process.py $number $text");
    $output = shell_exec($command);

    // Display results
    echo $output;
    ?>
</body>
</html>
