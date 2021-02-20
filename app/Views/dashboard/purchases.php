<?php $this->extend("layouts/dashboard") ?>

<?php $this->section("title") ?>
    Inventory | Purchases
<?php $this->endSection() ?>

<?php $this->section("body") ?>

<div class="">

    <h3 class="text-center"> Products Purchased </h3>
    <div>
        <button type="button" class="btn btn-default btn-lg text-light" data-toggle="modal" data-target="#addPurchase">
        <i class="fa fa-plus" aria-hidden="true"></i> Add a Purchase
        </button>
    </div>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse" style="width: 100%;">
            <tr>
                <th>Supplier</th>
                <th>Product Name</th>
                <th>Unit(s) Bought</th>
                <th>Price per unit</th>
                <th>Total amount Cost</th>
                <td>Date</td>
                <!-- <th>Delete</th> -->
            </tr>
        </thead>
        <tbody>
        <?php if ($data["purchases"]): ?>
            <?php foreach ($data["purchases"] as $purchase): ?>
            <tr>
                <td scope="row"><?= escapeAndCapitalize(getSupplierDetails($purchase->supplier_id, "name")) ?></td>
                <td><?= escapeAndCapitalize($purchase->name) ?></td>
                <td><?= esc($purchase->units_bought) ?></td>
                <td><?= esc($purchase->price_per_unit) ?></td>
                <td># <?= esc($purchase->amount_spent) ?></td>
                <td><?= esc($purchase->created_at) ?></td>
                
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="addPurchase" tabindex="-1" role="dialog" aria-labelledby="addPurchase" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-dark" id="addPurchaseTitle">Add purchases made</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            
                <?= form_open('/admin/purchases', ["method" => "POST"]) ?>
                
                    <div class="form-group">
                        <label for="">Select supplier you purchased from</label>
                        <select class="form-control" name="supplier" id="">
                            <option value="">Choose a supplier</option>
                            <?php if ($data["suppliers"]): ?>
                                <?php foreach ($data["suppliers"] as $supplier): ?>
                                    <option value="<?= esc($supplier["id"]) ?>"><?= escapeAndCapitalize($supplier["name"]) ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                

                    <div class="form-group">
                        <label for="name">Select a product you purchased</label>
                        <select class="form-control" name="product" id="">
                            <option value="">Choose a product</option>
                            <?php if ($data["products"]): ?>
                                <?php foreach ($data["products"] as $product): ?>
                                    <option value="<?= esc($product["id"]) ?>"><?= escapeAndCapitalize($product["name"]) ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Unit(s) of product(s) bought</label>
                        <input type="number" name="units" id="units" class="form-control" placeholder="Enter unit(s) of product bought...">
                    </div>

                    <div class="form-group">
                        <label for="name">Price per unit</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Enter product price per unit...">
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
