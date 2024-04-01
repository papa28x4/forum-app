<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait StringHelpers {

    public function registrationCode()
    {
        return Str::upper(date('Y').'-'.Str::random(4).'-'.Str::random(4).'-'.Str::random(4));
    }

    public function purifyName($name)
    {
        $pattern1 = '/^(\w{2,})\. /';
        $pattern2 = '/Miss /';
        $pattern3 = '/ (\w{2})\.$/';
        $pattern4 = '/ ([A-Z]{1,})$/';
        
        if(Str::wordCount($name) > 2){
            if(preg_match($pattern1, $name)){
                $a = preg_split($pattern1, $name);
                $name = $a[1];
            }
            if(preg_match($pattern2, $name)){
                $a = preg_split($pattern2, $name);
                $name = $a[1];
            }
            if(preg_match($pattern3, $name)){
                $a = preg_split($pattern3, $name);
                $name = $a[0];
            }
            if(preg_match($pattern4, $name)){
                $a = preg_split($pattern4, $name);
                $name = $a[0];
            }
        }
        return $name;
    }

    public function createEmail($name)
    {
        $name = preg_replace("/[^A-Za-z0-9 ]/", '', $name);
        $prefix = strtolower(str_replace(' ','.', $name));
        return $prefix.'@example.com';
    }

}