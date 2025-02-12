# Import necessary libraries
import cgi
import random
import math

# Get user input from the PHP form
form = cgi.FieldStorage()
number = int(form.getvalue("number"))
text = form.getvalue("text")

# Number Puzzle
if number % 2 == 0:
    number_result = f"The number {number} is even. Its square root is {math.sqrt(number):.2f}."
else:
    number_result = f"The number {number} is odd. Its cube is {number ** 3}."

# Text Puzzle
binary_text = ' '.join(format(ord(char), '08b') for char in text)
vowel_count = sum(1 for char in text.lower() if char in "aeiou")

# Treasure Hunt Game Simulation
secret_number = random.randint(1, 100)
attempts = 0
guessed = False
guess_log = []

while attempts < 5:
    guess = random.randint(1, 100)
    guess_log.append(f"Attempt {attempts + 1}: {guess}")
    if guess == secret_number:
        guessed = True
        guess_log.append("Correct! You found the treasure.")
        break
    attempts += 1

if not guessed:
    guess_log.append("You didn't find the treasure.")

# Display the results in an HTML format
print("Content-type: text/html\n")
print("<html><body>")
print("<h2>Results:</h2>")
print(f"<p>{number_result}</p>")
print(f"<p>Binary Text: {binary_text}</p>")
print(f"<p>Vowel Count: {vowel_count}</p>")
print("<h3>Treasure Hunt:</h3>")
for log in guess_log:
    print(f"<p>{log}</p>")
print("</body></html>")
