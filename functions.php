<?php

//useful for inspecting, save the code

// function dumpanddie($value) {
//     echo "<pre>";
// var_dump($value);
// echo "</pre>";
// die();
// }

// dumpanddie($_SERVER);

// echo $_SERVER['REQUEST_URI'];

// The following is the styling function, wrote two ways. 

// if ($_SERVER['REQUEST_URI'] === '/') {
//     echo 'bg-gray-900 text-white';
// } else {
//     echo 'text-gray-300 hover:bg-gray-700';
// }

// echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700';


function urlIs ($value){
    return $_SERVER['REQUEST_URI'] === $value;
}


