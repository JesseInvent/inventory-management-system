<?php $this->extend("layouts/dashboard") ?>

<?php $this->section("title") ?>
    Inventory | Suppliers
<?php $this->endSection() ?>

<?php $this->section("body") ?>

<div class="">

    <h3 class="text-center"> Suppliers</h3>
    <div>
        <button type="button" class="btn btn-default btn-lg text-light" data-toggle="modal" data-target="#addSupplier">
        <i class="fa fa-plus" aria-hidden="true"></i> Add a Supplier
        </button>
    </div>

<?php $suppliers = getSuppliers(); ?>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse" style="width: 100%;">
            <tr>
                <th>Name</th>
                <th>Email ID</th>
                <th>Mobile No</th>
                <th>Contact No</th>
                <th>Address</th>
                <!-- <th>Edit</th> -->
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($suppliers): ?>

                <?php foreach ($suppliers as $supplier ): ?>
                    <tr>
                        <td scope="row"><?= escapeAndCapitalize($supplier["name"]) ?></td>
                        <td><?= esc($supplier["email"]) ?></td>
                        <td><?= esc($supplier["mobile_number"]) ?></td> 
                        <td><?= esc($supplier["contact_number"]) ?></td> 
                        <td><?= esc($supplier["address"]) ?></td>
                        <!-- <td><a href=""><i class="fas fa-edit"></i></a></td> -->
                        <td><a href="<?= createDeleteLink("suppliers", $supplier["id"]) ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                <?php endforeach; ?>

            <?php endif; ?>

            </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="addSupplier" tabindex="-1" role="dialog" aria-labelledby="addSupplier" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-dark" id="addSupplierTitle">Add a supplier of your product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            
            <?= form_open('/admin/suppliers', ["method" => "POST"]) ?>

                    <div class="form-group">
                        <label for="name">Supplier's Name</label>
                        <input type="text" name="productName" id="productName" class="form-control" placeholder="Enter suppliers name...">
                    </div>


                    <div class="form-group">
                        <label for="name">Email Address </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter email address of supplier...">
                    </div>

                    <div class="form-group">
                        <label for="name">Mobile Number</label>
                        <input type="number" name="mobile_number" id="mobile_number" class="form-control" placeholder="Enter mobile number of supplier...">
                    </div>

                    <div class="form-group">
                        <label for="name">Contact Number</label>
                        <input type="number" name="contact_number" id="contact_number" class="form-control" placeholder="Enter mobile number of supplier...">
                    </div>

                    <div class="form-group">
                    <div class="form-group">
                        <label for="description">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                    </div>
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
