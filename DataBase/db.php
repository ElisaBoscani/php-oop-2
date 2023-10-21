<?php
require __DIR__ . '/../Models/petShop.php';
require __DIR__ . '/../Models/category.php';
require __DIR__ . '/../Models/typology.php';

/* istanze */
$typeDog = new Typology("cibo", "cibo");
$categoryDog = new Category("cane", "labrador", "medio");

$producFoodDog = new Product(
  "Hill's Science Plan Puppy Medium con Agnello e Riso",
  "Hill's Science Plan Puppy Medium con Agnello e Riso è un alimento secco per cani cuccioli di taglia media",
  "./img/Hills-puppy-medium-agnello-riso.webp",
  "ottimo",
  "2.50€",

  $categoryDog,
  $typeDog,
);

$categoryCat = new Category("Gatto", "Persiano", "medio");
$typeCat = new Typology("gioco", "gioco");
$producFoodCat = new Product(
  "Natural Trainer Gatto Sterilised Salmone",
  "Trainer Natural Adult Sterilised con Salmone è un alimento completo per gatti sterilizzati da un anno d’età.",
  "./img/trainer-natural-salmone.webp",
  "Buono",
  "3,49€",
  $categoryCat,
  $typeCat,

);

$arrayProducs = [$producFoodDog, $producFoodCat];
