<?php
declare(strict_types=1);

function fibonacciNumbers(int $maxVal): iterator
{
    $fN = 0;
    $fN1 = 1;
    $fN2 = 1;
    for ($i = 1; ($fN <= $maxVal) && ($maxVal != 0); $i++) {
        if (($i > 1) && ($i <= 3)) {
            $fN = 1;
        } elseif ($i > 3) {
            $fN = $fN1 + $fN2;
        }
        $fN2 = $fN1;
        $fN1 = $fN;
        if ($fN <= $maxVal) {
            yield $fN;
        } else {
            break;
        }
    }
}

$maxVal = (int) readline("Введіть максимальне значення послідовності Фібоначчі (від \"1\" і вище): ");
echo "Згенерована послідовність Фібоначчі: ";
foreach (fibonacciNumbers($maxVal) as $key => $value) {
    if ($key === array_key_last(iterator_to_array(fibonacciNumbers($maxVal)))) {
        echo "$value.";
    } else {
        echo "$value; ";
    }
}
if ($maxVal <= 0) {
    echo "Ви ввели неправильне максимальне значення.";
}