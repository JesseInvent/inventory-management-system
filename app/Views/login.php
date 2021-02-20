<?php $this->extend("layouts/index") ?>

<?php $this->section("title") ?>
    Inventory | Login
<?php $this->endSection() ?>

<?php $this->section("body") ?>

    <div class="container my-5 pt-4" style="height: 60vh;">

        <h1 class="text-center"><i class="fa fa-user" aria-hidden="true"></i><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Login</h1>

        <?= form_open("/login", ["method" => "POST"]) ?>

          <div class="form-group">
            <label class="text-light" for="">Email</label>
            <input type="text" name="username" id="" class="form-control" placeholder="Enter Username..." aria-describedby="helpId">
          </div>

          <div class="form-group">
            <label class="text-light" for="">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="Type in password..." aria-describedby="helpId">
          </div>

          <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>

          <?= form_close() ?>
    </div>

<?php $this->endSection(); ?>
