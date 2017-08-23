<?php

namespace Labbett\IOTA\Wallet;

class Seed
{
    public static function generate()
    {
        $seed = '';

        $allowed_characters = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
            'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '9',
        ];

        for ($i = 0; $i < 81; $i++) {
            // Cryptographically secure. (7.1 + built in)
            // http://php.net/manual/en/function.random-int.php
            $seed .= $allowed_characters[random_int(0, count($allowed_characters) - 1)];
        }

        return $seed;
    }
}
