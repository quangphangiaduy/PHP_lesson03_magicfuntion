<?php
include 'MyClass.php';
$hello = new MyClass();
$hello :: notExsitStaticMethod(array(
    'name'=>'myname',
    'pass'=>123
));
