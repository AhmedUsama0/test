<?php
/**
 * Symbol       Value
            I             1
            V             5
            X             10
            L             50
            C             100
            D             500
            M             1000
 */

// class Solution
// {
//     const mapValueToSymbol = [
//         1 => "I",
//         4 => "IV",
//         5 => "V",
//         9 => "IX",
//         10 => "X",
//         40 => "XL",
//         50 => "L",
//         90 => "XC",
//         100 => "C",
//         400 => "CD",
//         500 => "D",
//         900 => "CM",
//         1000 => "M",
//     ];

//     public static function process(int $number) : string
//     {
//         $reversedArray = array_reverse(self::mapValueToSymbol, true);
//         $result = "";

//         foreach ($reversedArray as $value => $symbol) {
//             $match = (int) ($number / $value);

//             $result .= str_repeat($symbol, $match);

//             $number %= $value;

//         }

//         return $result;
//     }
// }

// echo Solution::process(1994);


// echo decimalToRoman(1994);

// echo (50 % 1000);



// $reversePrefix = function (string $word, string $ch): string {
//     $chPosition = strpos($word, $ch);
//     if ($chPosition !== false) {
//         $startToCHPart = substr($word, 0, $chPosition + 1);
//         $reversedStartToCHPart = strrev($startToCHPart);
//         return $reversedStartToCHPart . substr($word, $chPosition + 1);
//     }
//     return $word;
// };

// echo $reversePrefix('ahmed', 'd');

// $strpos = function (string $haystack, string $needle): int  {
//     for ($i = 0; $i <= strlen($haystack) - 1; $i++) {
//         if($haystack[$i] === $needle) {
//             return $i;
//         }
//     }
//     return -1;
// };

// echo $strpos('ahmedm','med');