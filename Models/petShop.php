<?php
class Product
{
  public $productName;
  public $description;
  public $img;
  public $review;
  public $price;
  public $category;
  public $typology;

  public function __construct($productName, $description, $img, $review, $price, Category $category, Typology $typology)
  {
    $this->productName = $productName;
    $this->description = $description;
    $this->img = $img;
    $this->review = $review;
    $this->price = $price;
    $this->category = $category;
    $this->typology = $typology;
  }
}
