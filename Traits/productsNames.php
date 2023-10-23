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
  function getPrice(): string

  {
    return $this->price;
  }
}
