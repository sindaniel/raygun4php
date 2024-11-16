<?php

namespace Raygun4php;

class RaygunClientMessage
{
    public $Name;
    public $Version;
    public $ClientUrl;

    public function __construct()
    {
        $this->Name = "Daniel";
        $this->Version = "1.0.1";
        $this->ClientUrl = "https://x.com/sindaniel";
    }
}
