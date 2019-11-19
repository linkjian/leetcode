<?php

/**
 * https://leetcode.com/problems/two-sum/
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * Example:
 * Given nums = [2, 7, 11, 15], target = 9,
 * Because nums[0] + nums[1] = 2 + 7 = 9,
 * return [0, 1].
 */
class TwoSum
{
    /**
     * 29 / 29 test cases passed.
     * Runtime: 2024 ms
     * Memory Usage: 15.7 MB
     * 时间复杂度：
     * 思路：
     * 1. 循环数组$nums，每次循环使用目标值$target减去当前值$value，得到期望值 $expected
     * 2. 使用函数array_search搜索数组$nums，检查期望值是否存在于数组中
     * 3. 不存在或者搜索到当前索引则进入下次循环
     * 4. 直到搜索到期望值后，返回期望值的索引和当前索引
     */
    public function solution1($nums, $target) {
        foreach($nums as $key => $value) {
            $expected = $target - $value;
            $index = array_search($expected, $nums);
            if ($index === false) {
                continue;
            }
            if ($index === $key) {
                continue;
            }
            return [$key,$index];
        }
        return [];
    }

    /**
     */
    public function solution2($nums, $target)
    {
        $length = count($nums);
        for($i=0; $i < $length; $i++) {
            for($j = $i + 1; $j < $length; $j++) {
                if ( ( $nums[$i] + $nums[$j] )  == $target ) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }
}
