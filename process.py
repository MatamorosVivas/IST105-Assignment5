import cgi
import sys
import random
import math


if len(sys.argv) < 3:
    print("Error: Missing input values.")
    sys.exit(1)


number = int(sys.argv[1])
text = sys.argv[2]


if number % 2 == 0:
    number_result = f"The number {number} is even. Its square root is {math.sqrt(number):.2f}."
else:
    number_result = f"The number {number} is odd. Its cube is {number ** 3}."


binary_text = ' '.join(format(ord(char), '08b') for char in text)
vowel_count = sum(1 for char in text.lower() if char in "aeiou")

secret_number = 42  
attempts = 0
guessed = False
guess_log = []

while attempts < 5:
    guess = random.randint(1, 100)
    if guess > secret_number:
        guess_log.append(f"Attempt {attempts + 1}: {guess} (Too high!)")
    elif guess < secret_number:
        guess_log.append(f"Attempt {attempts + 1}: {guess} (Too low!)")
    else:
        guessed = True
        guess_log.append(f"Attempt {attempts + 1}: {guess} (Correct!)")
        break
    attempts += 1

if guessed:
    guess_log.append(f"You found the treasure in {attempts + 1} attempts!")
else:
    guess_log.append("You didn't find the treasure.")


print("Content-type: text/html\n")
print("<html><body>")
print("<h2>Puzzle Results:</h2>")
print(f"<p>{number_result}</p>")
print(f"<p>Binary Text: {binary_text}</p>")
print(f"<p>Vowel Count: {vowel_count}</p>")
print("<h3>Treasure Hunt:</h3>")
for log in guess_log:
    print(f"<p>{log}</p>")
print("</body></html>")
