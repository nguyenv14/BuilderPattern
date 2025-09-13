<?php
 
 
require_once 'pizza.php';
// Vấn đề
$pizza = new Pizza('Large', true, true, false, true, false);
$pizza->display();
 
 
$pizzaBulder = new PizzaBuilder('Medium');
$pizzaBulder->addCheese()->addPepperoni()->addNote("No onions, please");
$pizza1 = $pizzaBulder->build();
$pizza1->display();
 

$director = new PizzaDirector($pizzaBulder);
$pizza2 = $director->makeMargherita();