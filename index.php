<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Uji Coba</title>

  <!-- Bootstrap core CSS --> 
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/auto.css">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Latihan Web</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#validasi">Validasi Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#modkomen">Moderator Komentar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#autocomplete">Autocomplete Search</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Latihan Pemograman Web Lanjutan</h1>
      <p class="lead">web dengan Template Bootstrap 4</p>
    </div>
  </header>

  <section id="modkomen" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <?php $this->load->view('main/page/komen') ?>
        </div>
      </div>
    </div>
  </section>

  <section id="validasi">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <?php $this->load->view('main/page/validasi') ?>
        </div>
      </div>
    </div>
  </section>

  <section id="autocomplete">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <?php $this->load->view('main/page/autokom') ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Latihan Pemograman Web Lanjutan</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/auto.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

