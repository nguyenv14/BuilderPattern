<?php

class Pizza
{
  public $category;
  public $size;
  public $cheese;
  public $pepperoni;
  public $beef;
  public $mushroom;
  public $seafood;
  public $note;

  public function __construct($size, $cheese, $pepperoni, $beef, $mushroom, $seafood, $note = "")
  {
    $this->size = $size;
    $this->cheese = $cheese;
    $this->pepperoni = $pepperoni;
    $this->beef = $beef;
    $this->mushroom = $mushroom;
    $this->seafood = $seafood;
    $this->note = $note;
  }

  public function display()
  {
    echo "\n" . "Pizza Size: " . $this->size . "\n";
    echo "Toppings:\n";
    if ($this->cheese) echo "- Cheese\n";
    if ($this->pepperoni) echo "- Pepperoni\n";
    if ($this->beef) echo "- Beef\n";
    if ($this->mushroom) echo "- Mushroom\n";
    if ($this->seafood) echo "- Seafood\n";
  }
}


class PizzaBuilder
{
  private $size;
  private $cheese = false;
  private $pepperoni = false;
  private $beef = false;
  private $mushroom = false;
  private $seafood = false;
  private $note = "";

  public function __construct($size)
  {
    $this->size = $size;
  }

  public function addCheese()
  {
    $this->cheese = true;
    return $this;
  }

  public function addPepperoni()
  {
    $this->pepperoni = true;
    return $this;
  }

  public function addBeef()
  {
    $this->beef = true;
    return $this;
  }

  public function addMushroom()
  {
    $this->mushroom = true;
    return $this;
  }

  public function addSeafood()
  {
    $this->seafood = true;
    return $this;
  }
  public function addNote($note)
  {
    $this->note = $note;
    return $this;
  }

  public function build()
  {
    return new Pizza($this->size, $this->cheese, $this->pepperoni, $this->beef, $this->mushroom, $this->seafood, $this->note);
  }
}
