<?php

/**
 * Convert a hex color to RGB
 *
 * @var string $input
 * @return string
 **/

$input = str_replace("#", "", $input);
$r = hexdec(substr($input, 0, 2));
$g = hexdec(substr($input, 2, 2));
$b = hexdec(substr($input, 4, 2));

return $r . ', ' . $g . ', ' . $b;