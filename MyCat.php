<?php
include "Cat.php";

class MyCat extends Cat
{
    public function sleep()
    {
        echo "\nZzzzz...\n";
    }
}

$my_cat = new MyCat(5);

echo $my_cat->getAge();
$my_cat->sleep();

$my_cat->foo ( new MyCat (8) );