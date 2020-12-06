<?php

namespace Aoc;

class AocResolver
{
    /** @var string */
    private $day;

    /** @var string */
    private $problem;

    public function __construct(string $day, string $problem)
    {
        $this->day = ucfirst($day);
        $this->problem = ucfirst($problem);
    }

    public function resolve(): ?string
    {
        $command = 'Aoc\\Day' . $this->day . '\\Result';
        if (class_exists($command)) {
            $command = new $command($this->day);
        } else {
            throw new \Exception("Result for this day has not been created yet.");
        }
        if (method_exists($command, 'problem' . $this->problem)) {
            return $command->{'problem' . $this->problem}();
        } else {
            throw new \Exception("Result for this problem has not been created yet.");
        }
    }
}
