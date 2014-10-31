<?php
    include 'script.php';

    function print_error($needle, $wrongIndex, $goodIndex) {
        printf("\033[0;31m    %s found at the index %s instead of %s\033[0m %s", $needle, $wrongIndex, $goodIndex, PHP_EOL);
    }

    function print_success($needle, $index) {
        printf("\033[0;32m    %s found at the good index %s\033[0m %s", $needle, $index, PHP_EOL);
    }

    function test_search($array, $needle, $expectedIndex) {
        $currentIndex  = search($array, $needle);

        if ($expectedIndex !== $currentIndex) {
            print_error($needle, $currentIndex, $expectedIndex);
        }
        else {
            print_success($needle,$currentIndex);
        }
    }

    echo "Searching 2 in [1, 2] :" . PHP_EOL;
    test_search([1, 2], 2, 1);

    echo "Searching 2 in [1, 2, 3] :" . PHP_EOL;
    test_search([1, 2, 3], 3, 2);

    echo "Searching 3 in [1, 2, 3, 4, 5] :" . PHP_EOL;
    test_search([1, 2, 3, 4, 5], 3, 2);

    echo "Searching 2 in [1, 2, 3, 4, 5] :" . PHP_EOL;
    test_search([1, 2, 3, 4, 5], 2, 1);

    echo "Searching 4 in [1, 2, 3, 4, 5] :" . PHP_EOL;
    test_search([1, 2, 3, 4, 5], 4, 3);

    echo "Searching 4 in [1, 2, 3, 4, 5..., 15, 16, 17, 18, 19, 20] :" . PHP_EOL;
    test_search(range(1, 20), 12, 11);