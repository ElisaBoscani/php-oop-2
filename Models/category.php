<?php
class Category
{
  public $animal;
  public $breed;
  public $size;
  public function __construct($animal, $breed, $size)
  {
    $this->animal = $animal;
    $this->breed = $breed;
    $this->size = $size;
  }
  public function getAnimalInfo()
  {
    return $this->animal . ': ' . $this->breed . " Taglia: " . $this->size;
  }
}
