<?php
include 'MyClass.php';
$hello = new MyClass();
$hello -> notExsitMethod(array(
    'name'=>'myname',
    'pass'=>123
));
