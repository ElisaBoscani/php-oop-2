<?php
class product
{
  public $productName;
  public $description;
  public $img;
  public $review;
  public $price;
  public $categories;

  public function __construct($productName, $description, $img, $review, $price, categories $categories)
  {
    $this->productName = $productName;
    $this->description = $description;
    $this->img = $img;
    $this->review = $review;
    $this->price = $price;
    $this->categories = $categories;
  }
}
