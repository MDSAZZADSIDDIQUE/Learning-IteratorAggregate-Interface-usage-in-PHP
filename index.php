<?php
class Foods implements IteratorAggregate
{
    private $foods;
    function __construct()
    {
        $this->foods = array();
    }

    function addFood($food)
    {
        array_push($this->foods, $food);
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->foods);
    }
}

$foods = new Foods();

$foods->addFood("Apples");
$foods->addFood("Pears");

foreach ($foods as $food) {
    echo $food . PHP_EOL;
}
