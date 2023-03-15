<?php
use WebTier\Classes\FooBar;
//require_once 'app/Classes/FooBar';
require_once 'vendor/autoload.php';

$foobar = new FooBar();
echo $foobar->foo;