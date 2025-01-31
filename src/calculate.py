import sys
import math


def to_numeric(value, name):
    try:
        return float(value)
    except ValueError:
        print(f"{name} is not numeric value.")
        exit(1)


a = to_numeric(sys.argv[1], "A")
b = to_numeric(sys.argv[2], "B")
c = to_numeric(sys.argv[3], "C")

result = 0

if a < 1:
    print("A is too small. Please input value more than or equal to 1")
    exit(1)

if b == 0:
    print("B will not affect the result because it is 0.")

if c < 0:
    print("C is negative value. Please input positive value.")
    exit(1)

if c >= 0:
    if c**3 > 1000:
        result = math.sqrt(c**3) * 10
    else:
        result = math.sqrt(c**3) / a

result += b

print(f"Result: {result}")
