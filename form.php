<!DOCTYPE html>
<html>
<head>
    <title>Interactive Treasure Hunt</title>
</head>
<body>
    <h2>Welcome to the Interactive Treasure Hunt!</h2>
    <form action="process.php" method="post">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required><br><br>
        
        <label for="text">Enter a Text Message:</label>
        <input type="text" name="text" required><br><br>
        
        <input type="submit" value="Solve the Puzzle">
    </form>
</body>
</html>
