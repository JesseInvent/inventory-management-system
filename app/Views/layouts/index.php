<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
    <?php $this->renderSection("title") ?>
  </title>

  <!-- Bootstrap core CSS -->
  <link href="<?= asset("vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= asset("styles/utilities.css") ?>" rel="stylesheet">
  <link href="<?= asset("styles/styles.css") ?>" rel="stylesheet">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
    .img-fluid {
        height: 500px;
        width: 100%;
    }
</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand " href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span> <i class="fa fa-ellipsis-v text-light"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link " href="/"><i class="fa fa-home" aria-hidden="true"></i>
                        <span class="sr-only">(current)</span>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link "></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url("/admin") ?>"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link " href="./pages/blogs.html"><i class="fa fa-edit"></i> Blogs</a>
                    </li>       
                    <li class="nav-item">
                        <a class="nav-link " href="#"><i class="fa fa-question-circle-o" aria-hidden="true"></i> About</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url("/login") ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login </a>
                    </li>

                    <?php if(!checkIfAdminAnExist()): ?>
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url("/signup") ?>"> <i class="fa fa-registered" aria-hidden="true"></i> Signup </a>
                    </li>
                    <?php endif; ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link " href="#"><i class="fa fa-phone"></i> Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!--./ Navigation-->

  <!-- Page Content -->

    <?php $this->renderSection('body') ?>
    <!-- /.row -->

    <!-- <div class="text-center">
      <a href="">View More</a>
    </div> -->

  <!-- Footer -->
  <footer class="footer py-5">
    <div class="container">
      <div class="text-center">  
        <div class="social py-3">
          <a href="" class="px-2"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
          <a href="" class="px-2"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
          <a href="" class="px-2"><i class="fa fa-twitter fa-2x"  aria-hidden="true"></i></a>
        </div>
        <div>
          <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
          <p class="m-0 text-center text-white">Powered by <a href="mailto:jcinvent05@gmail.com">INVENT</a></p>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= asset("vendor/jquery/jquery.min.js") ?>"></script>
  <script src="<?= asset("vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

</body>

</html>
