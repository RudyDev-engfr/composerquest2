<?php

namespace App\Wcs;
class Hello
{

    private string $helloWorld = "Hello World";

    public function talk():string
    {
        return $this->helloWorld;
    }
}