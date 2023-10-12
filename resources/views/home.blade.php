<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>CCTV LAB</title>
  </head>
  <body>

{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/logo-icon/cctv_b2b.png" alt="" width="45" height="45" class="d-inline-block align-text-top"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-house"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-box-open"></i> Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-address-book"></i> Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary tombol" href="#"><i class="fa-solid fa-user"></i> Sign In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

{{-- Jumbotron --}}

<section id="cari">
    <form class="d-flex cari">
          <input  class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
</section>

<section id="hit-box">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 panel">
        <div class="row">
          <div class="col">
            <button class="btn btn-primary" href="#"><i class="fa-solid fa-calendar-days"></i>
            <p>Paket CCTV</p>
            </button>
          </div>
          <div class="col">
              <button class="btn btn-primary" href="#"><i class="fa-solid fa-box-open"></i>
                <p>Product Lain</p>
                </button>
          </div>
            <div class="col">
              <button class="btn btn-primary" href="#"><i class="fa-solid fa-message"></i>
                <p>Chat Penjual</p>
                </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="jumbotron">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-lg">
          <h4>Halo, Selamat Datang...</h4>
          <h1>Temukan sistem keamanan <br> terbaik menggunakan cctv</h1>
          <p>Silahkan lihat product <br> yang kami tawarkan dibawah ini</p>
        </div>
        <div class="col-lg">
          <img src="img/kamera.png" alt="vector 3d kamera" class="img-fluid img">
        </div>
    </div>
  </div>
</div>
</section>

<section id="slide-interval">
  <div class="bungkus">
    <div id="carouselExampleDark" class="carousel carousel-dark slide img-slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img/jumbotron/dahua1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/jumbotron/hikvision1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/jumbotron/hikvision2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
    </div>


  <hr>

    <div class="bungkus-merk">
      <div id="carouselExampleDark" class="carousel carousel-dark slide img-slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/merk/logo_platinum.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/merk/logo-high-technology.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/merk/logo-hikvision.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="bungkus-product">
  <h1>Product</h1>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="img/brand-populer/p1.jpg" class="card-img-top" alt="foto 1">
            <div class="card-body">
              <p class="card-text">4 Camera 2 Megapixels</p>
              <button class="btn btn-primary tombol">Lihat</button>
            </div>
          </div>
        </div>
          <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="img/brand-populer/p1.jpg" class="card-img-top" alt="foto 1">
            <div class="card-body">
              <p class="card-text">4 Camera 2 Megapixels</p>
              <button class="btn btn-primary tombol">Lihat</button>
            </div>
          </div>
        </div>
      </div>
</div>


</section>

{{-- <section id="merk">

</section> --}}

<section>
  <div class="product">
    <div class="container">
      <button class="btn btn-primary tombol">Lihat Product</button>
    </div>
  </div>
</section>


{{-- jumbotron --}}
{{-- <div class="container">
  <div class="jumbotron">
    <h1>Logo</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <h1>Logo</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quae qui mollitia ducimus, explicabo aspernatur magnam deserunt dolores odio commodi eveniet necessitatibus numquam molestias doloribus distinctio! Quam quaerat odit distinctio.</p>
  </div>
</div> --}}


{{-- about server --}}
{{-- <section id="about">
  <div class="container">
    
  </div>
</section> --}}
 <script>
    var nav = document.querySelector("nav")
    window.addEventListener("scroll", ()=>{
      if (document.documentElement.scrollTop > 100){
          nav.classList.add("bg-dark", "shadow");
        }else{
          nav.classList.remove("bg-dark", "shadow");
        }
    });
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>