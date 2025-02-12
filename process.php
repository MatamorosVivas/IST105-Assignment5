<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = escapeshellarg($_POST["number"]);
    $text = escapeshellarg($_POST["text"]);

    
    $python_path = "C:\\Users\\Carlos\\AppData\\Local\\Programs\\Python\\Python313\\python.exe";

   
    $command = "\"$python_path\" process.py $number $text";

   
    $output = shell_exec($command . " 2>&1");

    
    echo "<h2>Command Executed:</h2>";
    echo "<pre>$command</pre>";

    echo "<h2>Output:</h2>";
    echo "<pre>$output</pre>";
} else {
    echo "Invalid request.";
}
?>
