<?php
trait ProductsNames
{
  function getProductName(): string
  {
    return $this->productName;
  }

  function getDescription(): string
  {
    return $this->description;
  }

  function getPrice(): int
  {
    return  $this->price;
  }
}
