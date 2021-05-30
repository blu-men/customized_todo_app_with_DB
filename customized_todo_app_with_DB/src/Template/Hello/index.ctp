<?php
class Entree {
  private $name;
  public $ingredients = array();

  public function getName() {
    return $this->name;
  }

  public function __construct($name, $ingredients) 
  {
    if (! is_array($ingredients)) {
      throw new Exception('$ingredients must be an array');
    }
    $this->name = $name;
    $this->ingredients = $ingredients;
  }

  public function hasIngredient($ingredient) {
    return in_array($ingredient, $this->ingredients);
  }
}

$drink = new Entree('Glass of Milk', 'milk');
if ($drink->hasIngredient('milk')) {
  print 'Yummy';
}
?>