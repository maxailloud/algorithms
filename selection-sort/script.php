<?php

    function selectionSort($elements) {
        if (0 < sizeof($elements)) {
            $min = $elements[0];
            $indexMin = 0;
            $countElements = sizeof($elements);
            for ($i = 0; $i < $countElements - 1; $i++) {
                $indexMin = $i;
                for ($j = $indexMin + 1; $j < $countElements; $j++) {
                    if ($elements[$j] < $elements[$indexMin]) {
                        $indexMin = $j;
                    }
                }
                $temp = $elements[$i];
                $elements[$i] = $elements[$indexMin];
                $elements[$indexMin] = $temp;
            }

            return $elements;
        }

        return false;
    }