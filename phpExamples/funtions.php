<?php
//my function is a variable 
// functio with a parameteer called name
    $my_function = function($name)
    {
        echo "Hello $name";
    };
    $my_function("joe");

    // create a function to add a sum

    $x = 5;
    $y = 6;
    function add_number($x,$y)
    {
        return $x + $y;
    };

    $sum = add_number($x,$y);
    echo "the sum of $x and $y is $sum";

    function times_number($x,$y)
    {
        return $x * $y;
    };

    $product = times_number();
    echo " the product of $x and $y is $product";
?>