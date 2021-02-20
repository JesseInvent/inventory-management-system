<?php $this->extend("layouts/index") ?>

<?php $this->section("title") ?>
    Inventory | Checkout
<?php $this->endSection() ?>

<?php $this->section("body") ?>

    <div class="container checkout-page py-4">

        <h1> Complete your order <i class="fa fa-shopping-cart" aria-hidden="true"></i> </h1>

        <p>Please fill the following details</p>

            <?php if (session()->has("successMessage")):  ?>
            
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Success!</strong> <?= session("successMessage") ?>
                </div>

            <?php elseif (session()->has("errorMessage")): ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Error!</strong>  <?= session("errorMessage") ?>
                </div>
            <?php endif; ?>

            <!-- <form action="" method="post" class="pt-4"> -->
            <?= form_open("product/order", ["method" => "POST"]) ?>

                <input type="hidden" name="product_id" value="<?= esc($product["id"]) ?>">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?= old("name") ?>" placeholder="Enter your full name...">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="number" name ="phone" id="phone" class="form-control" value="<?= old("phone") ?>" placeholder="Enter your phone number">              
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" name="email" class="form-control" value="<?= old("email") ?>" placeholder="Enter your email address">
                </div>
                <div class="form-group">
                    <label for="">Current Location</label>
                    <input type="email" name="location" class="form-control" value="<?= old("location") ?>" placeholder="Please enter your full address..">
                </div>
                <div class="form-group">
                    <label for="">Unit(s) of product</label>
                    <input type="number" name="units" class="form-control" value="<?= old("units") ?>" placeholder="Units/quantity of product needed">
                </div>
                <div class="form-group">
                    <div for="">Preferred payment method</div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="" id="" value="checkedValue"> Pay Online
                            <input class="form-check-input" type="radio" name="" id="" value="checkedValue"> Pay on delivery
                        </label>
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="text-center py-4">
                    <button type="submit" class="checkout btn btn-lg"> <i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                </div>
            
            <?= form_close() ?>

    </div>

<?php $this->endSection(); ?>
<