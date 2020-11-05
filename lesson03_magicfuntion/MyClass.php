<?php
class MyClass{
    public function __construct(...$args){
        var_dump($args);
    }
    public function __set($key, $value)
    {
        echo "key: $key - value: $value";
    }
}