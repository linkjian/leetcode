<?php


class LengthOfLongestSubstring
{
    public function solution1($s)
    {
        $s = array_unique(str_split($s));
        var_dump($s);
    }
}

$object = new LengthOfLongestSubstring();
$object->solution1("pwwkew");