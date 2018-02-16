<?php

namespace App;

class Service
{
    public $param;

    public function __construct(string $param)
    {
        $this->param = $param;
    }
}
