<?php

/**
 * Class AddTwoNumbers
 * You are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse
 * order and each of their nodes contain a single digit. Add the two numbers and return it as a linked list.
 * You may assume the two numbers do not contain any leading zero, except the number 0 itself.
 *   Example:
 *   Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)
 *   Output: 7 -> 0 -> 8
 *   Explanation: 342 + 465 = 807.
 */
class AddTwoNumbers
{
    /**
     * Runtime: 32 ms, faster than 23.48% of PHP online submissions for Add Two Numbers.
     * Memory Usage: 14.8 MB, less than 81.11% of PHP online submissions for Add Two Numbers.
     * @param ListNode $l1
     * @param ListNode $l2
     * @return null
     */
    public function solution1(ListNode $l1, ListNode $l2)
    {
        $result = new ListNode(0);
        $curr = $result;
        $carry = 0;
        while ($l1 != null || $l2 != null) {
            $l1Val = ($l1 != null) ? $l1->val : 0;
            $l2Val = ($l2 != null) ? $l2->val : 0;
            // 计算l1+l2的和,加上上次循环的进位
            $sum = $l1Val + $l2Val + $carry;
            // 计算进位，下次循环时加到结果$sum
            $carry = (int)($sum / 10);
            // 对和进行取模，结果放到下一节点
            $curr->next = new ListNode($sum % 10);
            // 当前节点置为下一节点
            $curr = $curr->next;
            $l1 = $l1->next ?? null;
            $l2 = $l2->next ?? null;
        }
        if ($carry > 0) {
            $curr->next = new ListNode($carry);
        }
        return $result->next;
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
$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(9);

// $l2 = [5,6,4];
$l2 = new ListNode(5);
$l2->next = new ListNode(6);
$l2->next->next = new ListNode(4);

$object = new AddTwoNumbers();
$object->solution1($l1, $l2);