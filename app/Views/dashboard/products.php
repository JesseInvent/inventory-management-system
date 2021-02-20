<?php $this->extend("layouts/dashboard") ?>

<?php $this->section("title") ?>
    Inventory | Products
<?php $this->endSection() ?>

<?php $this->section("body") ?>

    <div class="">
        <h3 class="text-center"> Products</h3>
        <div>
            <button type="button" class="btn btn-default btn-lg text-light" data-toggle="modal" data-target="#addProduct">
                <i class="fa fa-plus" aria-hidden="true"></i> Add a product
                </button>
        </div>

        <!-- products -->
        <hr>

<?php if ($products): ?>

    <section class="d-flex justify-content-start flex-wrap">

        <?php foreach ($products as $product): ?>

            <div class="card shadow m-2 p-2" style="width: 18rem;">
                <img class="card-img-top" src="<?= assetImage($product["image"]) ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= escapeAndCapitalize($product["name"]) ?></h5>
                    <p class="card-text"> <?= esc($product["description"]) ?> </p>
                    <p class="card-text"> <?= esc($product["units_available"]) ?> Units available</p>
                    <p class="card-text"> <?= esc($product["cost_per_unit"]) ?> per unit</p>
                    <a href="<?= createDeleteLink("products", $product["id"]) ?>" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>

        <?php endforeach; ?>

    </section>

<?php endif; ?>
        
        <!-- Modal -->
        <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProduct" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="addProductTitle">Add a product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <?= form_open('/admin/products', ["method" => "POST", "enctype" => "multipart/form-data"]) ?>

                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="productName" id="productName" class="form-control" placeholder="Enter product name...">
                        </div>


                        <div class="form-group">
                            <label for="name">Units available </label>
                            <input type="number" name="units" id="units" class="form-control" placeholder="Enter units in stock...">
                        </div>

                        <div class="form-group">
                            <label for="name">Cost per unit</label>
                            <input type="number" name="cost" id="cost" class="form-control" placeholder="Enter cost per unit of product...">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="description">Product Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="description">Product Image</label>
                                <input type="file" name="image" class="form-control" id="" required>
                        </div>    
                        <div>
                            <button class="btn btn-primary">Submit</button>
                        </div> 

                    <?= form_close() ?>

                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"> Add </button> -->
                </div>
                </div>
            </div>
        </div>

    </div>


<?php $this->endSection(); ?>
