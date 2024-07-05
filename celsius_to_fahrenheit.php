<?php
$celcius = 27;
$fahrenheit = ($celcius * 9 / 5) + 32;
$result = sprintf("Celsius: %d, Fahrenheit: %.2f", $celcius, $fahrenheit);
echo $result;