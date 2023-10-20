<?php
require __DIR__ . '/Models/petShop.php';
/* classe cani */
class categories
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
}
/* classe gatti */
/* class Cat extends product
{
  public $breed;
  public $size;

  public function setBreedSize($breed, $size)
  {
    $this->breed = $breed;
    $this->size = $size;
  }
} */

/* istanze */

$produc = new product(
  "Hill's Science Plan Puppy Medium con Agnello e Riso",
  "Hill's Science Plan Puppy Medium con Agnello e Riso è un alimento secco per cani cuccioli di taglia media",
  "./img/Hills-puppy-medium-agnello-riso.webp",
  "ottimo",
  "2.50",
  new categories("cane", "labrador", "medio")
);
/* $producDog = new Dog(
  "Hill's Science Plan Puppy Medium con Agnello e Riso",
  "Hill's Science Plan Puppy Medium con Agnello e Riso è un alimento secco per cani cuccioli di taglia media",
  "./img/Hills-puppy-medium-agnello-riso.webp",
  "ottimo",
  "2.50",
); */
/* $producDog->setBreedSize("Cane", "medio"); */
/* $producCat = new Cat(
  "Hill's Science Plan Puppy Medium con Agnello e Riso",
  "Hill's Science Plan Puppy Medium con Agnello e Riso è un alimento secco per cani cuccioli di taglia media",
  "./img/Hills-puppy-medium-agnello-riso.webp",
  "ottimo",
  "2.50",

); */
/* $producCat->setBreedSize("Gatto", "medio"); */
var_dump($produc)
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prodotti per Animali</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <h1>Shop Prodotti per Animali</h1>
  <main>
    <h2>Prodotti</h2>
    <div class="container">
      <div class="row g-3 ">
        <div class="col">
          <div class=" bg_header h-100 d-flex flex-column align-items-center card" style="width: 18rem;">
            <img src=" <?php echo $produc->img; ?>" class="card-img-top w-100 h-100 pb-2" alt="...">
            <div class="card-body p-2 d-flex flex-column align-items-center ">
              <h5 class="card-text text-center "><?php echo $produc->productName; ?></h5>
              <span><?php echo $produc->review; ?></span>
              <span><?php echo $produc->price; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <h2>Prodotti per Cani</h2>
    <div class="container">
      <div class="row g-3 ">
        <div class="col">
          <div class=" bg_header h-100 d-flex flex-column align-items-center card" style="width: 18rem;">
            <img src=" <?php echo $producDog->img; ?>" class="card-img-top w-100 h-100 pb-2" alt="...">
            <div class="card-body p-2 d-flex flex-column align-items-center ">
              <h5 class="card-text text-center "><?php echo $producDog->productName; ?></h5>
              <span><?php echo $producDog->review; ?></span>
              <span><?php echo $producDog->price; ?></span>
              <span><?php echo $producDog->breed; ?></span>
              <span><?php echo $producDog->size; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <h2>Prodotti per Gatti</h2>
    <div class="container">
      <div class="row g-3 ">
        <div class="col">
          <div class=" bg_header h-100 d-flex flex-column align-items-center card" style="width: 18rem;">
            <img src=" <?php echo $producCat->img; ?>" class="card-img-top w-100 h-100 pb-2" alt="...">
            <div class="card-body p-2 d-flex flex-column align-items-center ">
              <h5 class="card-text text-center "><?php echo $producCat->productName; ?></h5>
              <span><?php echo $producCat->review; ?></span>
              <span><?php echo $producCat->price; ?></span>
              <span><?php echo $producCat->breed; ?></span>
              <span><?php echo $producCat->size; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>