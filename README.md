# A resolver for Advent of Code

A very simple php resolver for Advent of Code. Designed for web developers to resolve the challenge every day!
https://adventofcode.com

# How to install

```
composer create-project "zepgram/aoc-php"
```
Then simply move it in your /var/www/html directory

# How it works
- Create a new Result class, with name space "Aoc\Day${day}\";
- Then add input from website (eg: https://adventofcode.com/2020/day/1/input) in directory /input

# How to get result
With simple parameters: http://127.0.0.1/aoc/?day=one&problem=one

- The "day" value is corresponding to directory suffix which is incremental: one/two/three/four etc...
- The "problem" value is corresponding to abstract class method and can only take value "one" or "two"

![image](https://user-images.githubusercontent.com/16258478/101285309-bc878000-37e4-11eb-8234-7796456802ff.png)
