<?php
class MyClass{

    public function __call($name, $arguments)
    {
       echo "$name \n";
       var_dump($arguments);
    }
   
}