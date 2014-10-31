<?php

    function search($array, $needle) {
        return recursive_search($array, 0, sizeof($array) - 1, $needle);
    }

    function recursive_search($array, $startIndex, $endIndex, $needle) {
        $middleIndex = intval($startIndex + ceil(($endIndex - $startIndex) / 2));
        $index = false;

        if ($needle === $array[$middleIndex]) {
            $index = $middleIndex;
        }
        elseif ($needle < $array[$middleIndex]) {
            $index = recursive_search($array, $startIndex, $middleIndex, $needle);
        }
        else {
            $index = recursive_search($array, $middleIndex, $endIndex, $needle);
        }

        return $index;
    }