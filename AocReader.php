<?php

namespace Aoc;

abstract class AocReader
{
    /** @var string */
    public $inputPath;

    /** @var string */
    public $input;

    public function __construct(string $inputPath)
    {
        $this->inputPath = strtolower($inputPath);
        $this->input = $this->getPuzzleInput();
    }

    public function getPuzzleInput(): array
    {
        $this->input = [];
        $handle = fopen("input/" . $this->inputPath, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $this->input[] = $line;
            }
            fclose($handle);
        }

        return $this->input;
    }

    abstract public function problemOne(): ?string;

    abstract public function problemTwo(): ?string;
}
