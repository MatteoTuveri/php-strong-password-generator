<?php
function passGen($number)
{
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $caps = strtoupper($letters);
    $symbols = "~! @#$%^&*()_-+={[}]|\:;<,>.?/";
    $numbers = '0123456789';
    $password = '';
    while (strlen($password) <= $number) {
        $item = str_split($letters . $caps . $symbols . $numbers)[rand(0, strlen($letters . $caps . $symbols . $numbers) - 1)];
        if (!str_contains($password, $item)) {
            $password .= $item;
        } 
    }
    return $password;
}
;
?>