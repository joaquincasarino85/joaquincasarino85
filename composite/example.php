<?php

include('box.php');
include('product.php');

$p1 = new Product(10);
$p2 = new Product(20);
$box1 = new Box();
$box1->add($p1);
$box1->add($p2);

//print box 1 weight --> 30
var_dump($box1->weight());

$box2 = new Box();
$p3 = new Product(50);
$box2->add($p3);
//add box 1 to box 2
$box2->add($box1);

//print box 2 weight --> 80
var_dump($box2->weight());


