<?php $this->extend("layouts/dashboard") ?>

<?php $this->section("title") ?>
    Inventory | Sales
<?php $this->endSection() ?>

<?php $this->section("body") ?>

    <div class="">

        <h3 class="text-center"> Product Sales </h3>
        
        <div>
            <button type="button" class="btn btn-default btn-lg text-light" data-toggle="modal" data-target="#addSale">
                <i class="fa fa-plus" aria-hidden="true"></i> Add a Sale
            </button>
        </div>


            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse" style="width: 100%;">
                    <tr>
                        <th>Customer</th>
                        <th>Product Name</th>
                        <th>Unit(s) Sold</th>
                        <th>Price per unit</th>
                        <th>Total amount Cost</th>
                        <th>Date</th>
                        <!-- <th>Delete</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php if ($data["sales"]): ?>
                        <?php foreach ($data["sales"] as $sale): ?>
                            <tr>
                                <td scope="row"><?= escapeAndCapitalize(getCustomerDetails($sale->customer_id, "name")) ?></td>
                                <td><?= escapeAndCapitalize($sale->name) ?></td>
                                <td><?= esc($sale->units_sold) ?></td>
                                <td><?= esc($sale->price_per_unit) ?></td>
                                <td># <?= esc($sale->amount_spent) ?></td>
                                <td><?= esc($sale->created_at) ?></td>
                               
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="addSale" tabindex="-1" role="dialog" aria-labelledby="addSale" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="addSaleTitle">Add a sale of your product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <?= form_open('/admin/sales', ["method" => "POST"]) ?>

                        <div class="form-group">
                            <label for="name">Select a customer you sold to</label>
                            <select class="form-control" name="customer" id="">
                                <option value="">Choose a customer</option>
                                <?php if ($data["customers"]): ?>
                                    <?php foreach ($data["customers"] as $customer): ?>
                                        <option value="<?= esc($customer["id"]) ?>"><?= escapeAndCapitalize($customer["name"]) ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Select product you sold</label>
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
                            <label for="name">Unit(s) of product(s) sold</label>
                            <input type="number" name="units" id="units" class="form-control" placeholder="Enter unit(s) of product bought...">
                         </div>

                        <div class="form-group">
                            <label for="name">Price per unit sold</label>
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
                <!-- </div> -->
                </div>
            </div>
        </div>

    </div>

<?php $this->endSection(); ?>
