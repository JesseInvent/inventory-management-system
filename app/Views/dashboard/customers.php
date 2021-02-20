<?php $this->extend("layouts/dashboard") ?>

<?php $this->section("title") ?>
    Inventory | Customers
<?php $this->endSection() ?>

<?php $this->section("body") ?>

    <div class="">

        <h3 class="text-center"> Customers </h3>
        <div>
            <button type="button" class="btn btn-default btn-lg text-light" data-toggle="modal" data-target="#addCustomer">
                <i class="fa fa-plus" aria-hidden="true"></i> Add a Customer
            </button>
        </div>


        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse" style="width: 100%;">
                <tr>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Mobile No</th>
                    <th>Contact No</th>
                    <!-- <th>Edit</th> -->
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                <?php if ($customers): ?>

                    <?php foreach ($customers as $customer): ?>

                        <tr>
                            <td scope="row"><?= escapeAndCapitalize($customer["name"]) ?></td>
                            <td><?= esc($customer["name"]) ?></td>
                            <td><?= esc($customer["mobile_number"]) ?></td>
                            <td><?= esc($customer["contact_number"]) ?></td>
                            <!-- <td><a href=""><i class="fas fa-edit"></i></a></td> -->
                            <td><a href="<?= createDeleteLink("customers", $customer["id"]) ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    
                    <?php endforeach; ?>

                <?php endif; ?>

                </tbody>
        </table>
    

            <!-- Modal -->
            <div class="modal fade" id="addCustomer" tabindex="-1" role="dialog" aria-labelledby="addCustomer" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="addCustomerTitle">Add a customer of your product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                <?= form_open('/admin/customers', ["method" => "POST"]) ?>

                        <div class="form-group">
                            <label for="name">Customer's Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Customers  name...">
                        </div>


                        <div class="form-group">
                            <label for="name">Email Address </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter email address of Customer...">
                        </div>

                        <div class="form-group">
                            <label for="name">Mobile Number</label>
                            <input type="number" name="mobile_number" id="productName" class="form-control" placeholder="Enter mobile number of Customer...">
                        </div>

                        <div class="form-group">
                            <label for="name">Contact Number</label>
                            <input type="number" name="contact_number" id="contact_number" class="form-control" placeholder="Enter mobile number of Customer...">
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
                    </form>

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