<?php $this->extend("layouts/dashboard") ?>

<?php $this->section("title") ?>
Inventory | Orders
<?php $this->endSection() ?>

<?php $this->section("body") ?>

<div class="">

    <h3 class="text-center"> Orders</h3>
    <!-- <div>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#addSupplier">
            <i class="fa fa-plus" aria-hidden="true"></i> Add a supplier
            </button>
        </div> -->


    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse" style="width: 100%; color: #fff">
            <tr>
                <th>Name</th>
                <th>Email ID</th>
                <th>Mobile No</th>
                <th>Unit(s)</th>
                <th>Address</th>
                <th>status</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody style="color: #fff">

            <?php if ($orders) : ?>

                <?php foreach ($orders as $order) : ?>

                    <tr>
                        <td scope="row"><?= escapeAndCapitalize($order["customer_name"]) ?>

                        <td><?= esc($order["customer_email"]) ?>

                        <td><?= esc($order["customer_email"]) ?>

                        <td><?= esc($order["customer_phone_number"]) ?>

                        <td><?= esc($order["units"]) ?>

                        <td><?= esc($order["customer_address"]) ?>

                        <td>
                            <?php if ($order["confirmation_status"] === "true") : ?>

                                <i class="fa fa-check" aria-hidden="true"></i> Confirmed

                            <?php else : ?>

                                <a href="<?= base_url('admin/orders') ?>/<?= $order["id"] ?>/confirm">

                                    <button class="btn btn-primary">
                                        Confirm
                                    </button>

                                </a>

                            <?php endif; ?>



                        <td><a href="<?= createDeleteLink("orders", $order["id"]) ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>

                    </tr>

                <?php endforeach; ?>

            <?php endif; ?>

        </tbody>

    </table>

</div>

<?php $this->endSection(); ?>