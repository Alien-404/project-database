<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title><?= $data['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= Config::BASEURL ?>css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="icon" href="<?= Config::BASEURL; ?>favicon.png" type="image" sizes="16x16">
    <link rel="stylesheet" href="<?= Config::BASEURL ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= Config::BASEURL ?>assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="<?= Config::BASEURL ?>assets/css/owl.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?= Config::BASEURL; ?>"><h2>JatimLelungon<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= Config::BASEURL; ?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?= Config::BASEURL; ?>home/about_us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= Config::BASEURL; ?>home/contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= Config::BASEURL; ?>home/blogs">Blogs</a>
              </li>
              <?php Session::setAdmin(); ?>
              <?php Session::bntLogin(); ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>