<?php
declare(strict_types=1);

function fibonacciNumbers(int $length): iterator
{
    $fN1 = 1;
    $fN2 = 1;
    for ($i = 1; $i <= $length; $i++) {
        if ($i <= 1) {
            $fN = 0;
        } elseif ($i <= 3) {
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
echo "Згенерована послідовність Фібоначчі: ";
foreach (fibonacciNumbers($length) as $key => $value) {
    if ($key === array_key_last(iterator_to_array(fibonacciNumbers($length)))) {
        echo "$value.";
    } else {
        echo "$value; ";
    }
}