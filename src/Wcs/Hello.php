<?php

namespace App\Wcs;

class Hello 
{
    private string $hello = 'Hello';

    public function getHello(){
        return $this->hello;
    }
}