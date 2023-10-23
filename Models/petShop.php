<?php
require_once __DIR__ . '/../Traits/productsNames.php';
class Product
{
  use ProductsNames;
  protected $productName;
  protected $description;
  public $img;
  public $review;
  protected $price;
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



  /*   function setProductName($new_productName)
  {
    return $this->productName = $new_productName;
  } */
}
