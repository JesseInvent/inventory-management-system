<?php $this->extend("layouts/index") ?>

<?php $this->section("title") ?>
    Product Details
<?php $this->endSection() ?>

<?php $this->section("body") ?>

<div class="container">

  <div class="row p-2">

    <!-- <div class="col-lg-3 col-md-6 text-center row">
      
      <div class="p-1">
        <img class="image-fluid" src="http://placehold.it/100x100" alt="">
      </div> 
      <div class="p-1">
        <img class="image-fluid" src="http://placehold.it/100x100" alt="">
      </div>
      <div class="p-1">
        <img class="image-fluid" src="http://placehold.it/100x100" alt="">
      </div>

    </div> -->
<?php if ($product): ?>

    <div class="col-12 text-center">
      <img src="<?= assetImage($product["image"]) ?>" class="main-pic" src="" alt="">
    </div>

  </div>
  <!--./row-->

  <div>
    <div>
      <h3 class="text-center"><?= escapeAndCapitalize($product["name"]) ?></h3>
      <h6 class="text-center">NGN <?= esc($product["cost_per_unit"]) ?></h6>  
      <p class="text-center"><small class="text-muted text-center">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>  
    </div>

    <div>
      <nav class="my-2 font-bold">
        <div class="container">
          <span class="p-3 text-grey details">Description</span>
          <!-- <span class="p-3 text-grey details">How to use</span> -->
          <hr>
        </div>
      </nav>
      <div>
        <?= esc($product["description"]) ?>
      </div>
    </div>
    <!--./Description-->
  </div>

  <div class="text-center py-4">
    <a href="<?= base_url("/product") ?>/<?= $product["id"] ?>/checkout">
    <button class="checkout btn btn-lg"> <i class="fa fa-check" aria-hidden="true"></i> Checkout </button>
    </a>
  </div>

  <hr>
<?php endif; ?>

  <div>

    <p> Drop a review on this product </p>

    <form action="">
      <div class="form-group">
        <label for="">Enter your email</label>
        <input type="text" class="form-control" placeholder="Enter email...">
      </div>
      <div class="form-group">
        <label for="">Enter your review</label>
        <textarea type="text" class="form-control"></textarea>
      </div>
      <button class="comment btn btn-lg"> Comment <i class="fa fa-comment" aria-hidden="true"></i></button>
    </form>

  </div>

  <div class="p-3 pt-4">
    
    <h4>Reviews <i class="fa fa-comments" aria-hidden="true"></i> </h4>

    <div class="py-3">

      <div class="px-4">
        <hr>
        <h5><i class="fa fa-user-circle-o" aria-hidden="true"></i> John Doe <i class="text-gray" style="color: #ddd;"> &lt;johnDoe@gmail.com&gt; </i> </h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur delectus rerum libero iste accusamus quae ipsam ad harum fugit veritatis est, esse itaque odio reprehenderit! Deleniti voluptate numquam porro rerum!</p>
      </div>

      <div class="px-4">
        <hr>
        <h5><i class="fa fa-user-circle-o" aria-hidden="true"></i> Jane Doe <i class="text-grey" style="color: #ddd;"> &lt;janeDeo@gmail.com&gt; </i> </h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur delectus rerum libero iste accusamus quae ipsam ad harum fugit veritatis est, esse itaque odio reprehenderit! Deleniti voluptate numquam porro rerum!</p>
      </div>


    </div>

  </div>
  <!--./reviews-->

</div>
<!--./Container-->


<?php $this->endSection(); ?>
