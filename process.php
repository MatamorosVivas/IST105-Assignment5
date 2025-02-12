<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $number = escapeshellarg($_POST["number"]);
    $text = escapeshellarg($_POST["text"]);

  
    $command = "python3 process.py $number $text";
    $output = shell_exec($command . " 2>&1"); 

    
    echo "<h2>Results:</h2>";
    echo "<pre>$output</pre>";
} else {
    echo "Invalid request.";
}
?>
