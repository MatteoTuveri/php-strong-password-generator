<?php
function passGen($number, $repeat, $capsCheck, $symbolsCheck, $numbersCheck, $lettersCheck)
{
    $letters = ($lettersCheck) ? 'abcdefghijklmnopqrstuvwxyz' : '';
    $caps = ($capsCheck) ? strtoupper('abcdefghijklmnopqrstuvwxyz') : '';
    $symbols = ($symbolsCheck) ? "~! @#$%^&*()_-+={[}]|\:;<,>.?/" : '';
    $numbers = ($numbersCheck) ? '0123456789' : '';
    $string = $letters . $symbols . $numbers . $caps;
    $password = '';

    while (strlen($password) <= $number) {
        $item = str_split($string)[rand(0, strlen($string) - 1)];
        if ($repeat) {
            if (!str_contains($password, $item)) {
                $password .= $item;
            }
        } else {
            $password .= $item;
        }
    }
    return $password;
}
;