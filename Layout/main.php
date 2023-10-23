<h2 class=" p-2">Prodotti</h2>
<div class="container">
  <div class="row g-3 ">
    <?php foreach ($arrayProducs as $produc) : ?>
      <div class="col">
        <div class=" h-100  d-flex flex-column align-items-center card" style="width: 18rem;">
          <span class="badge text-bg-success position_icon">
            <?php if ($produc->typology->icon  == "cibo") : ?><i class="fa-solid fa-bowl-food" style="color: #ffffff;"></i>
            <?php elseif ($produc->typology->icon == "gioco") : ?><i class="fa-solid fa-baseball" style="color: #ffffff;"></i>
            <?php elseif ($produc->typology->icon == "cucce") : ?><i class="fa-solid fa-mattress-pillow" style="color: #ffffff;"></i>
            <?php else : ?> <?php echo $produc->typology->icon ?>
            <?php endif; ?>
          </span>
          <img src=" <?php echo $produc->img; ?>" class="card-img-top w-100  pb-2" alt="...">
          <div class="card-body p-2 d-flex flex-column align-items-center  justify-content-between ">
            <h5 class="card-text text-center "><?php echo $produc->getProductName(); ?></h5>
            <span><?php echo $produc->review; ?></span>
            <span><?php echo $produc->typology->type; ?></span>
            <span><?php echo $produc->getPrice(); ?></span>
            <div class="accordion accordion-flush pt-3" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Più informazioni
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" class="d-flex flex-column">
                  <p><?php echo $produc->getDescription() ?></p>
                  <div>
                    <span>
                      <?php if ($produc->category->animal  == "cane") : ?><i class="fa-solid fa-dog" style="color: #fbff29;"></i>
                      <?php elseif ($produc->category->animal == "gatto") : ?><i class="fa-solid fa-cat" style="color: #fbff29;"></i>
                      <?php else : ?> <?php echo $produc->animal ?>
                      <?php endif; ?>
                    </span>
                    <span><?php echo $produc->category->breed ?></span>
                    <span><?php echo $produc->category->size ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>