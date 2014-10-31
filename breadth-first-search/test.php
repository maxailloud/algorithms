<?php
    include 'script.php';

    $array = array(
        'root' => array(
            'letter' => 'g',
            'checked' => false,
            'children' => array(
                array(
                    'letter' => 'c',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'a',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'k',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'h',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'm',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                )
            )
        )
    );

    DisplayBreadthTree($array);

    $array = array(
        'root' => array(
            'letter' => 'g',
            'checked' => false,
            'children' => array(
                array(
                    'letter' => 'c',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'a',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'b',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'k',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'h',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'm',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                )
            )
        )
    );

    DisplayBreadthTree($array);

    $array = array(
        'root' => array(
            'letter' => 'g',
            'checked' => false,
            'children' => array(
                array(
                    'letter' => 'c',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'a',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'b',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'k',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'h',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'm',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                ),
                array(
                    'letter' => 'l',
                    'checked' => false,
                    'children' => array(
                        array(
                            'letter' => 'n',
                            'checked' => false,
                            'children' => array()
                        ),
                        array(
                            'letter' => 'o',
                            'checked' => false,
                            'children' => array()
                        )
                    )
                )
            )
        )
    );

    DisplayBreadthTree($array);