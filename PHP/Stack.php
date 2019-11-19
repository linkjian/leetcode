<?php


class Stack
{
    protected $size;

    protected $array;

    public function __construct(int $size)
    {
        $this->size = $size;
        $this->array = [];
    }

    public function push($element) : void
    {
        if ($this->getCapacity() == $this->size) {
            throw new \InvalidArgumentException("Stack full");
        }
        array_push($this->array, $element);
    }

    public function pop()
    {
        return array_pop($this->array);
    }

    public function getCapacity() : int
    {
        return count($this->array);
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function isEmpty() : bool
    {
        return count($this->array) === 0;
    }
}

$stack = new Stack(10);
$stack->push(1);
$stack->push(2);
$stack->push(3);

echo $stack->getSize();
echo $stack->pop();
echo $stack->getCapacity();

echo $stack->pop();
