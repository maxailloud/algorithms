<?php

function DisplayBreadthTree($nodes) {
    $children = [];

    foreach($nodes as $node) {
        $node['checked'] = true;
        echo $node['letter'];
        foreach ($node['children'] as $child) {
            if (!$child['checked']) {
                $children[] = $child;
                $child['checked'] = true;
            }
        }
    }
    echo PHP_EOL;
    if (0 < sizeof($children)) {
        DisplayBreadthTree($children);
    }
}
