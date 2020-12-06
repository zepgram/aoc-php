# A resolver for Advent of Code

A very simple php resolver for Advent of Code. Designed for web developers to resolve the challenge every day!
https://adventofcode.com

# How to install

```
composer create-project "zepgram/aoc-php"
```
Then simply move it in your /var/www/html directory

# How it works
- Create a new Result class, with name space `Aoc\Day${day}\`
- Then add input from website (eg: https://adventofcode.com/2020/day/1/input) in the directory `/input`

# How to get result
With simple parameters: http://127.0.0.1/aoc-php/?day=1&problem=1

- The "day" value is corresponding to directory suffix which is incremental: 1/2/3/4 etc...
- The "problem" value is corresponding to abstract class method and can only take value "1" or "2"

![image](https://user-images.githubusercontent.com/16258478/101295560-ac8c9200-381e-11eb-9412-a39c0118af7c.png)
