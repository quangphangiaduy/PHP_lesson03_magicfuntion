<?php
class MyClass{
    public function __callStatic($name, $arguments)
    {
        echo "$name \n";
        var_dump($arguments);
    }
}