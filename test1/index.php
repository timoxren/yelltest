<?php

function autoload($class)
{
    $f = __DIR__."/$class.php";
    if (!file_exists($f)) $f = __DIR__."/figs/$class.php";
    if (!file_exists($f)) $f = __DIR__."/drawers/$class.php";
    if (file_exists($f))
        include_once($f);
}

spl_autoload_register("autoload");

$shapes = [ 
    ['type' => 'circle', 'params' => ['1', '2']],
    ['type' => 'square', 'params' => ['3', '4']]
];

//bla bla ..
//run controller

$c = new Controller();
// availiable drawers - drawer1 and drawer2
$c->drawAction('drawer2', $shapes);