<!-- Associative arrays -->
<!-- Associates a key with each item in an array -->

<?php

function countdown() {
    for ($i = 10; $i >= 0; $i--) {
        echo $i;
        echo "<br>";
        sleep(1);
    }
}

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Phillip K. Dick'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir'
    ],
    [
        'name' => 'House of Leaves',
        'author' => 'Mark Danielewski'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir'
    ]
];

function filter($array, $key, $value)
{
    $filteredArray = [];

    foreach ($array as $element) {
        if ($element[$key] === $value) {
            $filteredArray[] = $element;
        };
    };
    return $filteredArray;
}


require "index.view.php";