<?php

    function insertionSort($elements) {
        for ($i = 1; $i < count($elements); $i++) {
            $value = $elements[$i];
            $j = $i;
            while ($j > 0 && $elements[$j - 1] > $value) {
                $temp = $elements[$j];
                $elements[$j] = $elements[$j - 1];
                $elements[$j - 1] = $temp;
                $j--;
            }
        }
        return $elements;
    }