<?php
require __DIR__ . '/DataBase/db.php';



include __DIR__ . '/Layout/head.php';

?>





<header class="bg-warning">
  <?php include __DIR__ . '/Layout/Partials/navbar.php'; ?>
  <div class="p-5 bg_animal">
    <h1 class="text-center">Shop Prodotti per Animali</h1>
  </div>
</header>

<main>
  <?php include __DIR__ . '/Layout/main.php'; ?>
</main>
<?php include __DIR__ . '/Layout/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>