<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="img/logo-icon/cctv_b2b.png" />
    <link rel="stylesheet" href="css/style.css">
    <title>CCTV LAB</title>
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="img/logo-icon/cctv_b2b.png" alt=""
                    width="45" height="45" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#jumbotron"><i class="fa-solid fa-house"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#list-product-sec"><i class="fa-solid fa-box-open"></i>
                            Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fa-solid fa-address-book"></i> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary tombol" href="{{'/login'}}"><i class="fa-solid fa-user"></i> Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- tombol to top -->
    <div class="to-top" id="tombol-atas" data-aos="fade-left">
        <a><i class="fa-solid fa-arrow-up"></i></a>
    </div>

    {{-- Jumbotron --}}
    {{-- display in mobile only  --}}
    {{-- mobile displau only iamge slide and merk slide image --}}

    {{-- <section id="cari">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </section> --}}

    <section id="hit-box">
        <div class="container text-center mb-3">
            <div class="icons">
                <a href="#"> <span>Jadwal Pemasangan</span><i class="fa-solid fa-calendar-days""></i></a>
            </div>
            <div class="icons">
                <a href="#"> <span>Paket CCTV</span><i class="fa-solid fa-boxes-stacked"></i></a>
            </div>
            <div class="icons">
                <a href="#"> <span>Prosess Pembayaran</span><i class="fa-solid fa-credit-card"></i></a>
            </div>
            {{-- <div class="icons">
                <a href="#"> <span>Jadi Distributor</span><i class="fa-solid fa-person-circle-check"></i></a>
            </div> --}}
        </div>
    </section>

    <section id="slide-interval">

        <div class="bungkus">
            <div id="carouselExampleDark" class="carousel carousel-dark slide img-slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner/Banner-Ecommerce-Platinum-shopee.png" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner/Platinum-Logo-Rebranding.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner/Powered-by-Antzman.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>

            <hr>
            <div class="bungkus-merk">
                <div id="carouselExampleDark" class="carousel carousel-dark slide img-slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="img/merk/logo_platinum.png" class="d-block w-100 gambar" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/merk/logo-high-technology.png" class="d-block w-100 gambar" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/merk/logo-hikvision.png" class="d-block w-100 gambar" alt="...">
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
                    @foreach ($datadog as $item)                   
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="{{ asset('storage/uploads_image/'.$item->foto_barang) }}" alt="all foto yang diinput">
                                <div class="card-body">
                                    <p class="card-text">{{ $item->nama_barang }}</p>
                                    <a href="{{ route('produk.show', $item->id) }}" class="btn btn-primary tombol">Lihat</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a class="btn btn-primary tombol" href="/product"><i class="fa-solid fa-list"></i> All Category</a>
        </div>
    </section>

    {{-- display in dekstop only  --}}
    <section id="jumbotron">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <h4><span>Hello,</span> Selamat Datang...</h4>
                        <h1>Temukan sistem keamanan <br> terbaik menggunakan cctv</h1>
                        <a class="btn btn-primary tombol" href="/product">Lihat Product</a>
                    </div>
                    <div class="col-lg">
                        <img src="img/kamera.png" alt="vector 3d kamera" class="img-fluid img">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="intro">
        {{-- card --}}
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card kartu">
                        <div class="gambar-card"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <div class="card-body d-grid justify-content-center">
                            <h5 class="j-title">Paket CCTV</h5>
                            <p class="l-text">Paket CCTV dari berbagai brand CCTV yang sesuai dengan kebutuhan anda</p>
                            <hr>
                            <a class="btn btn-primary" href="#">Lihat selengkapnya!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card kartu">
                        <div class="gambar-card"><i class="fa-solid fa-calendar-days"></i></div>
                        <div class="card-body d-grid justify-content-center">
                            <h5 class="j-title">Jadwal Pemasagan</h5>
                            <p class="l-text">Tentukan waktu pemasangan CCTV sesuai dengan keinginan anda</p>
                            <hr>
                            <a class="btn btn-primary" href="#">Lihat selengkapnya!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card kartu">
                        <div class="gambar-card"><i class="fa-solid fa-credit-card"></i></div>
                        <div class="card-body d-grid justify-content-center">
                            <h5 class="j-title">Proses Pembayaran</h5>
                            <p class="l-text">Pembayaran dapat diselesaikan setelah proses Instalasi CCTV selesai</p>
                            <hr>
                            <a class="btn btn-primary" href="#">Lihat selengkapnya!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- slide bar  --}}
        <div class="container">
            <div class="intro-display">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/banner/Banner-Ecommerce-Platinum-shopee.png" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner/Platinum-Logo-Rebranding.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner/Powered-by-Antzman.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>



    <section id="list-product-sec">
        <div class="container">
            <div class="list-product">
                <div class="row">
                    <div class="col-lg">
                        <h1>Product <span>Popular</span></h1>
                    </div>
                    <div class="col-lg">
                        {{-- <button class="btn btn-primary tombol"><i class="fa-solid fa-list"></i> All Category</button> --}}
                        <div class="dropdown">
                            <a class="btn btn-primary tombol dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-list"></i> All Category
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row list-product-card">
                @foreach ($datadog as $item)                   
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('storage/uploads_image/'.$item->foto_barang) }}" alt="all foto yang diinput">
                            <div class="card-body">
                                <p class="card-text">{{ $item->nama_barang }}</p>
                                <button class="btn btn-primary tombol">Lihat</button>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/brand-populer/p1.jpg" class="card-img-top" alt="foto 1">
                        <div class="card-body">
                            <p class="card-text">4 Camera 2 Megapixels</p>
                            <button class="btn btn-primary tombol">Lihat</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/brand-populer/p1.jpg" class="card-img-top" alt="foto 1">
                        <div class="card-body">
                            <p class="card-text">4 Camera 2 Megapixels</p>
                            <button class="btn btn-primary tombol">Lihat</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section id="keunggulan-kami">
        <div class="container">
            <hr>
            <h1 class="j-keunggulan">Keunggulan CCTV Lab</h1>
            <p class="p-keunggulan">Alasan mengapa harus membeli produk cctv di tempat kami</p>
            <div class="row">
                <div class="col-6">
                    <div class="card keunggulan-kartu">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="gambar-keunggulan"> <i class="fa-solid fa-rocket"></i></div>
                            </div>
                            <div class="col-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Berpengalaman</h5>
                                    <p class="card-text">Memiliki pengalaman lebih dari 20 tahun di bidang cctv, sejak
                                        tahun 2000.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card keunggulan-kartu">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="gambar-keunggulan"> <i class="fa-solid fa-thumbs-up"></i></div>
                            </div>
                            <div class="col-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Terlengkap</h5>
                                    <p class="card-text">Produk terlengkap yang bisa dipilih sesuai kebutuhan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card keunggulan-kartu">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="gambar-keunggulan"> <i class="fa-solid fa-boxes-stacked"></i></div>
                            </div>
                            <div class="col-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Paket CCTV</h5>
                                    <p class="card-text">Tersedia pilihan paket produk dengan harga terbaik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card keunggulan-kartu">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="gambar-keunggulan"> <i class="fa-solid fa-headset"></i></div>
                            </div>
                            <div class="col-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Konsultasi</h5>
                                    <p class="card-text">Kami memberikan bantuan dan konsultasi agar produk sesuai
                                        kebutuhan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main contact us -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3 class="j-contact">Contact</h3>
                    <h1 class="j-hub">Hubungi Kami</h1>
                    <p class="label-contact">
                        Jika ingin menghubungi langsung silahkan klik link ini <a href="https://api.whatsapp.com/send?phone=6282163784377" target="_blank" class="text-white text-decoration-none">Whattsapp.com</a>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                        <strong>Thank You!</strong> Pesan anda sudah kami terima.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                    <form name="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"
                                name="nama" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email"
                                name="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                        </div>

                        <div class="col-lg">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-success btn-rwt">
                                    Kirim
                                </button>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row bawah">
                <div class="col-lg info">
                    <h3>INFOR<span>MASI</span></h3>
                    <br />
                    <ul>
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#about">Product</a></li>
                        <li><a href="#new-project">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg priv">
                    <h3>PRIVACY <span>POLICY</span></h3>
                    <br />
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Term Of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg alamat">
                    <h3>ALA<span>MAT</span></h3>
                    <br />
                    <p>
                        Jl. Pelita 3 No. 29A <br />Kec. Medan Perjuangan <br /><br /><span>Telp. 0813 6242 1560</span>
                        <br /><br />Email. cctvlabmedan@gmail.com
                    </p>
                </div>
                <div class="col-lg maps">
                    <h3>MA<span>PS</span></h3>
                    <br />
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d351.9549571435304!2d98.68484608276981!3d3.6067485686608323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131931699e5a1%3A0x45fdc5e6f4cbd3b!2sJl.%20Pelita%20III%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1701889016261!5m2!1sid!2sid"
                        width="300" height="300" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <hr class="garis2" />
        <div class="container">
            <p class="footer-bottom">
                &copy; 2024 Website All Created By 💕 Wahyu Ardiansyah
            </p>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
