<?php 

namespace App\Contracts;

interface Pointable
{
    public function awards();

    public function countAwards();

    public function addPoints($amount, $message);
}