<?php

/**
 * Class ValidParentheses
 * @see https://leetcode.com/problems/valid-parentheses/
 * Given a string containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
 * An input string is valid if:
 *
 * Open brackets must be closed by the same type of brackets.
 * Open brackets must be closed in the correct order.
 * Note that an empty string is also considered valid.
 *
 */
class ValidParentheses
{
    /**
     * @param string $s
     * @return bool
     * Runtime: 4 ms, faster than 90.48% of PHP online submissions for Valid Parentheses.
     * Memory Usage: 14.9 MB, less than 100.00% of PHP online submissions for Valid Parentheses.
     * Next challenges:
     */
    public function solution(string $s)
    {
        $brackets = ['(' => ')', '[' => ']', '{' => '}'];
        $length = strlen($s);
        $stack = [];
        for ($i = 0 ; $i < $length; $i++) {
            $current = $s[$i];
            if (isset($brackets[$current])) {
                array_push($stack, $current);
                continue;
            }

            if (empty($stack)) {
                return false;
            }

            if ($brackets[array_pop($stack)] !== $current) {
                return false;
            }
        }

        if (!empty($stack)) {
            return false;
        }

        return true;
    }
}
