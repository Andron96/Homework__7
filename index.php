<?php
declare(strict_types=1);

function fibonacciNumbers(int $maxVal): iterator
{
    $fN = 0;
    $fN1 = 1;
    $fN2 = 1;
    if ($maxVal >= 0) {
        yield $fN;
        if ($maxVal >= 1) {
            yield $fN1;
            yield $fN2;
            if ($maxVal >= 2) {
                while (true) {
                    $fN = $fN1 + $fN2;
                    $fN2 = $fN1;
                    $fN1 = $fN;
                    if ($fN <= $maxVal) {
                        yield $fN;
                    } else {
                        break;
                    }
                }
            }
        }
    }
}

$maxVal = (int) readline("Введіть максимальне значення послідовності Фібоначчі (від \"0\" і вище): ");
echo "Згенерована послідовність Фібоначчі: ";
foreach (fibonacciNumbers($maxVal) as $key => $value) {
    if ($key === array_key_last(iterator_to_array(fibonacciNumbers($maxVal)))) {
        echo "$value.";
    } else {
        echo "$value; ";
    }
}
if ($maxVal < 0) {
    echo "Ви ввели неправильне максимальне значення.";
}