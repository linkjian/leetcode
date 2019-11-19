<?php

class LinkedList
{
    protected $head;

    protected $length;

    protected $current;

    public function __construct()
    {
        $this->head = $this->current = null;
        $this->length = 0;
    }

    public function isEmpty()
    {
        return $this->length == 0;
    }

    public function length()
    {
        return $this->length;
    }

    public function append($value)
    {
        $node = new ListNode($value);
        if ($this->isEmpty()) {
            $this->head = $node;
        }else {
            $current = $this->head;
            while (!is_null($current->next)) {
                $current = $current->next;
            }
            $current->next = $node;
        }
        $this->length++;
    }

    public function each()
    {
        $current = $this->head;
        while (!is_null($current)) {
            echo $current->val . PHP_EOL;
            $current = $current->next;
        }
    }

    public function head()
    {
        return $this->head;
    }

}

class ListNode
{
    public $val;
    public $next = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}