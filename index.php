<?php
declare(strict_types = 1);
/* function myFoo1 () {
    // echo 'myFoo1';
    foreach (func_get_args() as $arg){
        echo $arg . "\n";
    }
}
myFoo1();
myFoo1(10, 'Hello PHP Functions!', true); */

/*function myFoo1 () {
    echo "myFoo1\n";
    function myFoo2 () {
        echo "myFoo2\n";
    }
    // myFoo2();
}*/

/* myFoo1();
myFoo2(); */

// myFoo2();

// myFoo1();

//myFoo1();
//myFoo1();

// $x = 10;

/* function myFoo1 () {
    $x = 20;
    echo "Local x = $x\n";
    $x++;
    echo "Local x = $x\n";
} */

/* function myFoo1 () {
    $x++;
    echo "Local x = $x\n";
} */

/*
myFoo1 ();
echo "Global x = $x\n";
 * */

/* function myFoo1 (&$x) {
    // $x = func_get_arg(0);
    $x = 20;
    echo "Local x = $x\n";
    $x++;
    echo "Local x = $x\n";
}

// myFoo1 ($x);
myFoo1 ($x);
echo "Global x = $x\n"; */

/* function myFoo1 () {
    global $x;
    $y = $x * 2;
    echo "Local y = $y";
    $x = 20;
    echo "Local x = $x\n";
    $x++;
    echo "Local x = $x\n";
} */
/* function myFoo1 () {
    $x = &$GLOBALS['x'];
    $x = 20;
    echo "Local x = $x\n";
    $x++;
    echo "Local x = $x\n";
} */

// myFoo1 ($x);
/* myFoo1 ($x);
echo "Global x = $x\n"; */

//var_dump($GLOBALS);

/* function multiply (int $x, int $y) : int {
    return $x * $y;
}

echo multiply(3, 4); */

// incorrect
/* function parent (int $x) {
    $y = $x;
    $y++;
    return function () {
        global $y;
        echo $y;
    };
} */
function parent (int $x) {
    $y = $x;
    $y++;
    return function () use ($y) {
        $y++;
        echo $y;
    };
}

// correct

$child = parent(10);
$child();