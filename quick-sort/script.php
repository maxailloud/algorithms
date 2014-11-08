<?php

    function quickSort($array)
    {
        if (count($array) < 2) {
            return $array;
        }
        $left  = $right = [];
        $pivot = array_shift($array);
        foreach ($array as $k => $v) {
            if ($v < $pivot) {
                $left[$k] = $v;
            } else {
                $right[$k] = $v;
            }
        }

        return array_merge(quicksort($left), array($pivot), quicksort($right));
    }

    function quickSort2($array, $first, $last) {
        if ($first < $last) {
            $pivot = choosePivot($array, $first, $last);
            $pivot = partitionArray($array, $first, $last, $pivot);
            $array = quickSort2($array, $first, $pivot - 1);
            $array = quickSort2($array, $pivot + 1, $last);
        }

        return $array;
    }

    function choosePivot($array, $first, $last) {
        return $first;
    }

    function partitionArray(&$array, $first, $last, $pivot) {
        $array = swapValue($array, $pivot, $last);
        $j = $first;
        for ($i = $first; $i < $last - 1; $i++) {
            if ($array[$i] < $array[$last]) {
                $array = swapValue($array, $i, $j);
                $j++;
            }
        }

        if ($array[$last] < $array[$j]) {
            $array = swapValue($array, $last, $j);
        }

        return $j;
    }

    function swapValue($array, $left, $right) {
        $temp          = $array[$left];
        $array[$left]  = $array[$right];
        $array[$right] = $temp;

        return $array;
    }