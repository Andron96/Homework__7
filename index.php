<?php
declare(strict_types=1);

function fibonacciNumbers($length)
{
    $fN = 0;
    $fN1 = 1;
    $fN2 = 1;
    for ($i = 1; $i <= $length; $i++) {
        if ($i <= 2) {
            $fN = 1;
        } else {
            $fN = $fN1 + $fN2;
        }
        $fN2 = $fN1;
        $fN1 = $fN;
        yield $fN;
    }
}

$length = (int) readline("Введіть довжину: ");
foreach (fibonacciNumbers($length) as $value) {
    echo "value: $value\n";
}
