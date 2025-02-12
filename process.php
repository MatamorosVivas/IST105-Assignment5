<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $number = escapeshellarg($_POST["number"]);
    $text = escapeshellarg($_POST["text"]);

   
    echo "<h2>Debug Info:</h2>";
    echo "<p>Number: $number</p>";
    echo "<p>Text: $text</p>";

   
    $command = "python3 process.py $number $text";
    $output = shell_exec($command . " 2>&1"); 

   
    echo "<h2>Command Executed:</h2>";
    echo "<p>$command</p>";

    
    echo "<h2>Results:</h2>";
    echo "<pre>$output</pre>";
} else {
    echo "Invalid request.";
}
?>
