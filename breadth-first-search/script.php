<?php

function DisplayBreadthTree($nodes) {
    $children = [];

    foreach($nodes as $node) {
        echo $node['letter'];
        foreach ($node['children'] as $child) {
            $children[] = $child;
        }
    }
    echo PHP_EOL;
    if (0 < sizeof($children)) {
        DisplayBreadthTree($children);
    }
}
