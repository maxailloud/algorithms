<?php
    include 'script.php';

    $array = array(
        'root' => array(
            'letter' => 'a',
            'checked' => false,
            'children' => array(
                array(
                    'letter' => 'b',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'c',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'd',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'e',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'f',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                )
            )
        )
    );

    DisplayDepthTree($array);

    $array = array(
        'root' => array(
            'letter' => 'a',
            'checked' => false,
            'children' => array(
                array(
                    'letter' => 'b',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'c',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'd',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'e',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'f',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'g',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'h',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'i',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                )
            )
        )
    );

    echo PHP_EOL;
    DisplayDepthTree($array);