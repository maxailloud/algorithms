<?php

function DisplayDepthTree($nodes) {
    foreach($nodes as $node) {
        $children = [];
        echo $node['letter'] . PHP_EOL;
        foreach ($node['children'] as $child) {
            $children[] = $child;
        }
        DisplayDepthTree($children);
    }
}
