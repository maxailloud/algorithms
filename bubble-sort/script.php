<?php

    function bubbleSort($elements) {
        do {
            $switch = false;
            for ($i = 0; $i < count($elements) - 1; $i++) {
                if ($elements[$i] > $elements[$i + 1]) {
                    $temp = $elements[$i];
                    $elements[$i] = $elements[($i+ 1)];
                    $elements[($i+ 1)] = $temp;
                    $switch = true;
                }
            }
        } while($switch);

        return $elements;
    }