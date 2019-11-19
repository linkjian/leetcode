<?php

require_once '../LinkedList.php';

/**
 * Class ReverseLinkedList
 * Input: 1->2->3->4->5->NULL
 * Output: 5->4->3->2->1->NULL
 */
class ReverseLinkedList
{
    public function solution(ListNode $head)
    {
        // 前节点设为头结点 1
        $prev = $head;
        // 当前节点设为下一节点 2
        $curr = $head->next;
        while ($curr) {
            $temp = $curr->next; // 临时保存下一节点 3
            $curr->next = $prev; // 当前节点指向前一节点 2 -> 1
            $prev = $curr; // 前节点设为当前节点 2
            $curr = $temp; // 当前节点设为下一节点 3
        }

        $head->next = null;
        var_dump($prev);
    }
}

$list = new LinkedList();
$list->append(1);
$list->append(2);
$list->append(3);
$list->append(4);
$list->append(5);

$reverseLinkedList = new ReverseLinkedList();
$reverseLinkedList->solution($list->head());