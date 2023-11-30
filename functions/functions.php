<?php
function passGen($number)
{
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $caps = strtoupper($letters);
    $symbols = "~! @#$%^&*()_-+={[}]|\:;<,>.?/";
    $password = '';
    while (strlen($password) <= $number) {
        $password .= str_split($letters . $caps . $symbols)[rand(0, 81)];
    }
    return $password;
}
;
?>