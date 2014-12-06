<?php
//Returns hsl value of the weighted color code for the value.
//$min = minimum possible value for the paramter
//$avg = Midpoint of dataset for the parameter
//$max = Maximum possible value for the paramter
//$val = Value for which color code required
function getColorCode($min, $avg, $max, $val) {
    $colorCode = '';
    $hue = 120;
    if ($val >= $avg) {
        $subColor = calculateColorPart($max - $avg, $val - $avg);
        $hue = 60 + $subColor;
    } else {
        $hue = calculateColorPart($avg, $val - $min);
    }
    $hue = colorCeiling($hue);
    //returns hsl values. You can change saturation and lightness percentage according to the shade you need in your color code.
    return "hsl($hue,80%,50%)";
}

function colorCeiling($colorValue) {
    if ($colorValue > 120)
        $colorValue = 120;
    else if ($colorValue < 0)
        $colorValue = 0;
    return $colorValue;
}
//Calculates color weight compared to maximum value
function calculateColorPart($max, $value) {
    $difference = ($value / $max) * 60;
    return round($difference);
}
?>

