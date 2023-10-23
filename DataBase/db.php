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
  "2,50€",

  $categoryDog,
  $typeDog,
);

$categoryCat = new Category("gatto", "Persiano", "medio");
$typeCat = new Typology("Cibo", "cibo");
$producFoodCat = new Product(
  "Natural Trainer Gatto Sterilised Salmone",
  "Trainer Natural Adult Sterilised con Salmone è un alimento completo per gatti sterilizzati da un anno d’età.",
  "./img/trainer-natural-salmone.webp",
  "Buono",
  "3,49€",
  $categoryCat,
  $typeCat,

);

$categoryToyDog = new Category("cane", "Tutte le razze", "Tutte le taglie");
$typeToyDog = new Typology("Osso da mordere", "gioco");
$producToyDog = new Product(
  "KONG Extreme Goodie Bone",
  "Il gioco per cane KONG Extreme Goodie Bone è la risposta per i cani che prediligono la classica forma ad osso, ma hanno bisogno di un giocattolo in gomma sicuro, robusto e resistente.",
  "./img/kong-cane-goodie-bone-extreme.webp",
  "Ottimo",
  "18,49€",
  $categoryToyDog,
  $typeToyDog,
);

$categoryToyCat = new Category("gatto", "Tutte le razze", "Tutte le taglie");
$typeToyCat = new Typology("Stella con erba", "gioco");
$producToyCat = new Product(
  "Gioco per Gatti Euphoria Stella con Catnip",
  "Euphoria Stick Catnip Stella di Croci è un gioco per gatti arricchito con catnip e silvervine che renderanno il tuo micio felice e rilassato.",
  "./img/croci-euphoria-stick-catnip-stella.webp",
  "Buono",
  "3,65€",
  $categoryToyCat,
  $typeToyCat,
);

$categoryKennelsDog = new Category("cane", "Tutte le razze", "Tutte le taglie");
$typeKennelsDog = new Typology("Cucce", "cucce");
$producKennelsDog = new Product(
  "Cuccia Rettangolare Zig Zag",
  " La cuccetta LunaTeo è prodotta da artigiani italiani utilizzando materiali di ottima qualità.",
  "./img/luna-cuccia.webp",
  "Buono",
  "39,90€",
  $categoryKennelsDog,
  $typeKennelsDog,
);


$arrayProducs = [$producFoodDog, $producFoodCat, $producToyDog, $producToyCat, $producKennelsDog];
