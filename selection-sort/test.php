<?php
    include 'script.php';

    function print_error($expectedArray, $array) {
        printf("\033[0;31m    array %s not equals %s\033[0m %s", '[' . join(', ', $expectedArray) . ']', '[' . join(', ', $array) . ']', PHP_EOL);
    }

    function print_success($expectedArray, $array) {
        printf("\033[0;32m    array %s equals %s\033[0m %s", '[' . join(', ', $expectedArray) . ']', '[' . join(', ', $array) . ']', PHP_EOL);
    }

    function test_sorted($array, $expectedArray) {
        $sortedArray = selectionSort($array);
        if ($sortedArray === $expectedArray) {
            print_success($expectedArray, $sortedArray);
        }
        else {
            print_error($expectedArray, $sortedArray);
        }
    }

    $array = [5, 4, 1, 12, 0, 8, 10, 9];
    $expectedArray = [0, 1, 4, 5, 8, 9, 10, 12];

    test_sorted($array, $expectedArray);