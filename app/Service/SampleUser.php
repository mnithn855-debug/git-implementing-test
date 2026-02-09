<?php

namespace App\Service;

class SampleUser
{
    public function subract(int $number1, int $number2)
    {
        return $number2 - $number1;
    }

    public function difference(int $number1, int $number2)
    {
        return abs($number1 - $number2);
    }
    public function nameTrimming(string $name): string
    {
        return trim($name, " ");
    }

    public function specialCharacterRemoving(string $word): string
    {

        return preg_replace('/[^a-zA-Z0-9 ]/', '', $word);
    }

    public function isEven($num)
    {
        return $num % 2 == 0;
    }

    public function getUserArray()
    {
        return ["Nithin", "John", "Sam"];
    }

    public function getNullValue()
    {
        return null;
    }

    public function getGreeting()
    {
        return "Hello Nithin";
    }
}