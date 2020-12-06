<?php

namespace Aoc\DayOne;

use Aoc\AocReader;

class Result extends AocReader
{
    public function problemOne(): ?string
    {
        $result = null;
        $goalValue = 2020;
        foreach ($this->input as $currentValue) {
            foreach ($this->input as $exploreValue) {
                if ((int)$currentValue + (int)$exploreValue !== $goalValue) {
                    continue;
                }
                $result = (int)$currentValue * (int)$exploreValue;
            }
        }

        return $result;
    }

    public function problemTwo(): ?string
    {
        $result = null;
        $goalValue = 2020;
        foreach ($this->input as $primaryValue) {
            foreach ($this->input as $secondaryValue) {
                foreach ($this->input as $thirdValue) {
                    if ((int)$primaryValue + (int)$secondaryValue + (int)$thirdValue !== $goalValue) {
                        continue;
                    }
                    $result = (int)$primaryValue * (int)$secondaryValue * (int)$thirdValue;
                }
            }
        }

        return $result;
    }
}