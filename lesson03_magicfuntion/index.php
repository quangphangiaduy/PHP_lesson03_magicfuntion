<?php
include 'MyClass.php';
$hello = new MyClass(array(
    'name'=>'myname',
    'pass'=>123
));
$hello = new MyClass();
$hello ->name ='me';
