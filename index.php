<?php
class PetShop
{
  public $productName;
  public $description;
  public $img;
  public $review;
  public $price;

  public function __construct($productName, $description, $img, $review, $price)
  {
    $this->productName = $productName;
    $this->description = $description;
    $this->img = $img;
    $this->review = $review;
    $this->review = $price;
  }
}
$produc = new PetShop(
  "Hill's Science Plan Puppy Medium con Agnello e Riso",
  "Hill's Science Plan Puppy Medium con Agnello e Riso è un alimento secco per cani cuccioli di taglia media",
  "./Hills-puppy-medium-agnello-riso.webp",
  "ottimo",
  "2.50"
)
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prodotti per Animali</title>
</head>

<body>
  <h1>Shop Prodotti per Animali</h1>
  <main>
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
  </main>
</body>

</html>