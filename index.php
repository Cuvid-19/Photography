<!DOCTYPE html>
<html>
<head>
    <title>Phot Gsllery</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>    


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
<!-- Nav Bar Top -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#nature">Natural</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider  "></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
  
    </ul>
  </div>
</nav>


<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/architecture03.jpg" class="d-block w-100" alt="architecture">
      <div class="carousel-caption d-none d-md-block">
        <h5>Architecture</h5>
        <p>Taken by : Efe Ersoy</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/nature02.jpg" class="d-block w-100" alt="nature">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nature</h5>
        <p>Taken by : Elina Volkova</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/travel02.jpg" class="d-block w-100" alt="travel">
      <div class="carousel-caption d-none d-md-block">
        <h5>Travel</h5>
        <p>Taken by : Marcus Lenk</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>



<a id = "nature">
  <!-- Section 01 -->
  <section class="my-4">
    <div class="my-4">
      <h2 class="text-center">Nature</h2>
    </div>

    <div class="container-fuild">
      <div class="row">
        <!-- column for large system,mid, mobile device -->
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/nature01.jpg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/nature03.jpg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/nature04.jpg" class="img-fluid pb-3">
        </div>
      </div>
    </div>
  </section>
</a>


<a id="architecture">
<!-- Section 02 -->
<section class="my-4">
  <div class="my-4">
    <h2 class="text-center">Architecture</h2>
  </div>

  <div class="container-fuild">
    <div class="row">
       <!-- column for large system,mid, mobile device -->
       <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture01.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture02.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture04.jpg" class="img-fluid pb-3">
      </div>
    </div>
  </div>
</section>
</a>


<a id="travel">
<!-- Section 03 -->
<section class="my-4">
  <div class="my-4">
    <h2 class="text-center">Travel</h2>
  </div>

  <div class="container-fuild">
    <div class="row">
       <!-- column for large system,mid, mobile device -->
       <div class="col-lg-4 col-md-4 col-12">
        <img src="images/travel01.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/travel03.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/travel04.jpg" class="img-fluid pb-3">
      </div>
    </div>
  </div>
</section>
</a>


<a id="contact">
<!-- Section 04 -->
<section class="my-4">
  <div class="my-4">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="about.php" method="post">
      <div class="form-group">
        <label> Name :</label>
        <input type = "text" name="name" class="form-control">  
      </div>
      <div class="form-group">
        <label> Email :</label>
        <input type = "text" name="email" class="form-control">  
      </div>
      <div class="form-group">
        <label> Number :</label>
        <input type = "text" name="number" class="form-control">  
      </div>

      <button type="submit" class="btn btn-success">  Submit</button>
    </form>
  </div>
</section>
</a>



<a id="about">
<!-- Section 05 -->
<section class="my-4">
  <div class="my-4">
    <h2 class="text-center">About</h2>
  </div>
  <div class="container-fluid">
    <h3 class="text-center">Jeff</h3>
    <p class="text-center"><b>I am a passionate photographer. Full time freelancer with an experience of 6 years.

    </b></p>

  </div>
</section>
</a>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery/min.js"></script>
    <script src="https://cdnjs.cloudfalre.com/ajax/libs/pooper.js/1.16/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>