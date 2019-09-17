<?php

// Look at how PHP can be used to do arithmetic

$a = 2;
$b = 4;

// Addition
$c = $a + $b;
// Subtraction
$c = $b - $a;
// Multiplication
$c = $b * $a;
// Division
$c = $b / $a;
// Tip calculator example

$amount = 55;
$percent = 33;
$tip = $amount * ($percent / 100);
$total = $amount + $tip;

// Overwriting example

$x = 44;
// these are all the same
$x = $x + 1;
$x += 1;
$x++;

echo $x;
