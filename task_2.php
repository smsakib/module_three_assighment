<?php
function removeEvenNumbers($numbers) {
    $filteredNumbers = array_filter($numbers, function($number) {
        return $number % 2 !== 0;
    });
    print_r($filteredNumbers);
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);
?>
