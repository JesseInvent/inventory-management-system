<?php $this->extend("layouts/index") ?>

<?php $this->section("title") ?>
    Inventory | Admin Signup
<?php $this->endSection() ?>

<?php $this->section("body") ?>

    <div class="container my-5 pt-4" style="height: 60vh;">

        <h1 class="text-center"><i class="fa fa-user" aria-hidden="true"></i><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Signup</h1>

        <?= form_open("/signup", ["method" => "POST"]) ?>
        <div class="form-group">
          <label class="text-dark" for="">Email</label>
          <input type="text" name="username" id="" class="form-control" placeholder="Enter Username..." aria-describedby="helpId" required>
        </div>
        <div class="form-group">
          <label class="text-dark" for="">Password</label>
          <input type="password" name="password" id="" class="form-control" placeholder="Type in password..." required aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign up</button>

        <?= form_close() ?>

    </div>

<?php $this->endSection(); ?>
