<?php $this->extend("layouts/index") ?>

<?php $this->section("title") ?>
    Inventory 
<?php $this->endSection() ?>

<?php $this->section("body") ?>

<div class="">

<div class="showcase">

  <div class="contaner">
    <!--Carousal -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="img-fluid" width="700" height="400" src="<?= asset("images/warehouse1.jpg") ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" width="700" height="400" src="<?= asset("images/warehouse2.jpg") ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" width="700" height="400" src="<?= asset("images/warehouse3.jpg") ?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--/. End of carousel -->
  </div>
  <!-- /. container -->
</div>


  <div class="products container mx-auto">

    <div class="my-3">
      <h5>Recommended Products</h5>
      <hr>
    </div>

    <div class="row">       

    <?php if ($products): ?>

      <?php foreach ($products as $product): ?>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="<?= base_url("/product") ?>/<?= $product["id"] ?>" class="text-dark-u">
          <img class="card-img-top" src="<?= assetImage($product["image"]) ?>" alt="Inventory">
            <div class="card-footer">
              <h5><?= escapeAndCapitalize($product["name"]) ?></h5>
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              <h6>NGN <?= esc($product["cost_per_unit"]) ?></h6>
              <div class="text-center">
                <button class="btn mx-auto">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            </a>
          </div>
        </div>

        <?php endforeach; ?>

      <?php endif; ?>

      <!--/.Product Item-->
    </div>
    
</div>

<?php $this->endSection(); ?>
