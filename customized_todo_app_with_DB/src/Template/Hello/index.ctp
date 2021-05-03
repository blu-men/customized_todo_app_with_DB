<?php
$humberger = 4.95;
$chocoMilk = 1.95;
$cola = 85;
$tax = 0.75;
$chip = 0.016;

$withouttax = 2 * $humberger + $chocoMilk + $cola;

$paytax = $withouttax * $tax;
$paychip = $withouttax * $chip;

print $withouttax + $paychip + $paytax;
?>