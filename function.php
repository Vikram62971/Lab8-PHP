<?php
function sayHello() {
    echo "Hello class..<br/>";
}

sayHello();

/* function with parameters - by value */
function add_by_value($a, $b) {
    $sum = $a + $b;
    echo "The sum of $a and $b = $sum <br/>";
    $b = 30; // changes local copy only
}

add_by_value(10, 20);

/* function with parameters - by reference */
function add_by_reference($a, &$b) {
    $sum = $a + $b;
    echo "The sum of $a and $b = $sum <br/>";
    $b = 100;  // changes original variable passed in
}

$b = 50;
add_by_reference(10, $b);
echo "The value of b is $b <br/>";

/* function with a return value */
function add_return_value($a, $b) {
    return $a + $b;
}

echo "The sum of 20 and 30 is " . add_return_value(20, 30);
?>
