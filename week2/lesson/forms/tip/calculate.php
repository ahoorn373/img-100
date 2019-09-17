<?php

// Write a PHP script that calculates tips based on the values submitted.

$amount = $_GET['amount'];
$percent = $_GET['percent'];
$tip = $amount * ($percent / 100);
$total = $amount + $tip;

echo 'Tip Amount: $' . $tip . '<br>';
echo 'Total Amount: $' . $total;
