<?php


class MergeTwoSortedLists
{
    public function solution($l1, $l2)
    {
        if ($l1 == null) {
            return $l2;
        }
        if ($l2 == null) {
            return $l1;
        }
        if ($l1->val < $l2->val) {
            $l1->next = $this->solution($l1->next, $l2);
            return $l1;
        }  else {
            $l2->next = $this->solution($l1, $l2->next);
            return $l2;
        }
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

// $l1 = [2,4,3];
$l1 = new ListNode(1);
$l1->next = new ListNode(2);
$l1->next->next = new ListNode(4);

// $l2 = [5,6,4];
$l2 = new ListNode(1);
$l2->next = new ListNode(3);
$l2->next->next = new ListNode(4);

$object = new MergeTwoSortedLists();
($object->solution($l1, $l2));