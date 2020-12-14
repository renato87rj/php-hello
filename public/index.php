<?php

require __DIR__.'/../vendor/autoload.php';

use App\HelloWorld;

$helloWorld = HelloWorld::sayHello();

include __DIR__.'/view.html';
