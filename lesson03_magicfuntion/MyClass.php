<?php
class MyClass{
    public function __construct(...$args){
        var_dump($args);
    }
    public function __set($key, $value)
    {
        echo "key: $key - value: $value";
    }
    public function __isset($name)
    {
        echo "thuoc tinh kiem tra khong ton tai $name";
    }
   
}