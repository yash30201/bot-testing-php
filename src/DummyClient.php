<?php

require_once __DIR__ . '/../vendor/autoload.php';

class DummyClient
{
    public function __construct()
    {
        echo "Constructed\n";
    }

    public function printHello()
    {
        echo "Hello World" . PHP_EOL;
    }
}
