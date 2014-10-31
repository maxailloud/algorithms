<?php
    include 'script.php';

    $array = array(
        'root' => array(
            'letter' => 'g',
            'children' => array(
                array(
                    'letter' => 'c',
                    'children' => array(
                        array(
                            'letter' => 'a',
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'k',
                    'children' => array(
                        array(
                            'letter' => 'h',
                            'children' => array()
                        ),
                        array(
                            'letter' => 'm',
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
            'letter' => 'g',
            'children' => array(
                array(
                    'letter' => 'c',
                    'children' => array(
                        array(
                            'letter' => 'a',
                            'children' => array()
                        ),
                        array(
                            'letter' => 'b',
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'k',
                    'children' => array(
                        array(
                            'letter' => 'h',
                            'children' => array()
                        ),
                        array(
                            'letter' => 'm',
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
            'letter' => 'g',
            'children' => array(
                array(
                    'letter' => 'c',
                    'children' => array(
                        array(
                            'letter' => 'a',
                            'children' => array()
                        ),
                        array(
                            'letter' => 'b',
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'k',
                    'children' => array(
                        array(
                            'letter' => 'h',
                            'children' => array()
                        ),
                        array(
                            'letter' => 'm',
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'l',
                    'children' => array(
                        array(
                            'letter' => 'n',
                            'children' => array()
                        ),
                        array(
                            'letter' => 'o',
                            'children' => array()
                        )
                    )
                )
            )
        )
    );

    DisplayDepthTree($array);