<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->renderSection('title'); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="<?= asset("styles/dashboard.css") ?>" rel="stylesheet">
    <style>

      table, thead, tbody, button{
        color: white;
      }

      .card, label {
        color: #000;
      }
      
    </style>
  </head>

  <body class="bg-dark text-light">
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Inventory</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a href="/admin/logout">
                <button class="btn btn-default btn-lg text-light"> <i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</button>
            </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row mt-5">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column mt-4">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  <i class="fa fa-user"></i>
                  Admin <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= createLink('admin/orders') ?>">
                   <i class="fa fa-shopping-cart"></i>
                   Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= createLink('admin/products') ?>">
                  <i class="fas fa-warehouse"></i>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= createLink('admin/suppliers') ?>">
                  <i class="fa fa-users"></i>
                  Suppliers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= createLink('admin/customers') ?>">
                  <i class="fa fa-users"></i>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= createLink('admin/purchases') ?>">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  <i class="fa fa-credit-card"></i>
                  Purchases
                </a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="<?= createLink('admin/sales') ?>">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> <i class="fa fa-credit-card"></i> Sales
                </a>
              </li>

            </ul>

          </div>

        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <h1 class="h2"> <i class="fa fa-inventory"></i> Automated Inventory Control System</h1>

          </div>

        
            <!--/ Body -->

            <div class="">
              <?= $this->renderSection('body') ?>
            </div>
            <!-- Body /-->

        </main>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Graphs -->
   
  </body>
</html>
