<?php

    $name = 'Henry';
    $string_one = "Learning to display \"Hello $name!\" to the screen.\n";
    $string_one = 'Learning to display "Hello ' . $name . '!" to the screen.' . "\n";

    $string_one = "Learning to display \"Hello $name!\" to the screen.\n";
    $string_one = 'Learning to display ';
    $string_one .= '"Hello ';
    $string_one .= $name;
    $string_one .= '!" to the screen.';

    // echo $string_one;

    $isReady = true;
    // var_dump($isReady);
    $isReady = false;
    // var_dump($isReady);

    $a = 10;
    $b = '10';

    var_dump($a == $b);
    var_dump($a === $b);

    var_dump($string_one == 'Learning to display "Hello Henry!" to the screen.');

    $string_one = "";

    if ($string_one == 'Learning to display "Hello Henry!" to the screen') {
        echo 'the values match';
    }
    elseif ($string_one == "") {
        echo '$string_one is empty';
    }
    else {
        echo "the values do not match";
    }



?>