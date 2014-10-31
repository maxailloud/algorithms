<?php

functionDisplayBreadthTree($tree) {
    $root = $tree->getRoot();
    
    echo $root->getLetter() . PHP_EOL;
    
    functionOutputLevel(array($root));
}

functionOutputLevel($children) {
    $outputedChildren = array();
        
    foreach($child in $children) {
        $leftChild = $child->getLeftChild();
        $rightChild = $child->getRightChild();
        if (null !== $leftChild) {
            $outputedChildren[] = $leftChild;
            echo $leftChild->getLetter();
        }
        if (null !== $rightChild) {
            $outputedChildren[] = $rightChild;
            echo $rightChild->getLetter();
        }
    }
    
    echo PHP_EOL;
    
    if (0 < sizeof($outputedChildren)) {
        functionOutputLevel($outputedChildren);
    }
}
