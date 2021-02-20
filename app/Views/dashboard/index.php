<?php $this->extend("layouts/dashboard") ?>

<?php $this->section("title") ?>
Dashboard
<?php $this->endSection() ?>

<?php $this->section("body") ?>

<div class="">

    <div class="d-flex justify-content-start">

        <div class="card m-2 shadow p-2" style="width: 18rem;">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title"> <i class="fas fa-warehouse"></i> Products in stock</h4>
                <p class="card-text text-center mt-4" style="font-size: large;"><?= count(getProducts()) ?></p>
            </div>
        </div>

        <div class="card m-2 shadow p-2" style="width: 18rem;">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders</h4>
                <p class="card-text text-center mt-4" style="font-size: large;">3</p>
            </div>
        </div>

        <div class="card m-2 shadow p-2" style="width: 18rem;">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title"><i class="fa fa-arrow-right" aria-hidden="true"></i> Suppliers </h4>
                <p class="card-text text-center mt-4" style="font-size: large;"><?= count(getSuppliers()) ?></p>
            </div>
        </div>

        <div class="card m-2 shadow p-2" style="width: 18rem;">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title"><i class="fa fa-users" aria-hidden="true"></i> Customers </h4>
                <p class="card-text text-center mt-4" style="font-size: large;"><?= count(getCustomers()) ?></p>
            </div>
        </div>

    </div>

</div>

<?php $this->endSection(); ?>
