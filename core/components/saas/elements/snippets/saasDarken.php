<?php

/**
 * Convert a hex color to darker hex color
 *
 * @var string $input
 * @var string $options
 * @return string
 **/

if (!function_exists('dec2hex')) {
    function dec2hex($int) {
        $hex = dechex($int);
        if (strlen($hex)%2 != 0) {
            $hex = str_pad($hex, strlen($hex) + 1, '0', STR_PAD_LEFT);
        }
        return $hex;
    }
}

$input = str_replace("#", "", $input);
$r = hexdec(substr($input, 0, 2));
$g = hexdec(substr($input, 2, 2));
$b = hexdec(substr($input, 4, 2));

$darken = $options ? (float) $options : 0.5;

if ($darken < 0) {
    $darken = 0;
} elseif ($darken > 1) {
    // convert to percentage
    $darken = $darken / 100;
}

$r = round($r * $darken);
$g = round($g * $darken);
$b = round($b * $darken);

$r = ($r < 0) ? 0 : (($r > 255) ? 255 : $r);
$g = ($g < 0) ? 0 : (($g > 255) ? 255 : $g);
$b = ($b < 0) ? 0 : (($b > 255) ? 255 : $b);

$r = dec2hex($r);
$g = dec2hex($g);
$b = dec2hex($b);

return "#" . $r . $g . $b;