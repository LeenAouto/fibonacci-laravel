<?php

namespace App\Helpers;

class FibonacciHelper
{
    /**
     * Generate a fibonacci sequence of a specified length.
     *
     * @param int $length
     * @return array
     */
    public static function fibonacciSequence(int $length): array
    {
        if ($length <= 0) {
            return [];
        }

        $sequence = [0];
        if ($length > 1) {
            $sequence[] = 1;
        }

        for ($i = 2; $i < $length; $i++) {
            $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
        }

        return $sequence;
    }
}