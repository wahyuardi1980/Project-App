<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product | CCTV LAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="img/logo-icon/cctv_b2b.png" />
    <link rel="stylesheet" href="css/style.css">
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
                        <a class="btn btn-primary tombol" href="{{ '/login' }}"><i class="fa-solid fa-user"></i>
                            Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="produk" class="produk p-3 mt-5">
        <div class="container">
            {{-- filter search --}}
            <div class="row">
                <div class="col-md-9">
                    <div class="j-produk">
                        <h1 class="text-start">Produk List</h1>
                    </div>
                </div>
                <div class="col-md-3">
                    <form action="{{ route('produk.search') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari..." name="cari">
                            <button class="btn btn-primary" type="submit" >Cari</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row p-3 mt-5">
                @foreach ($datadog as $i)
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img src="{{ asset('storage/uploads_image/' . $i->foto_barang) }}"
                                alt="all foto yang diinput">
                            <div class="card-body">
                                <h5 class="card-text">{{ $i->nama_barang }}</h5>
                                <p class="card-text">{{ $i->description }}</p>
                                <p class="card-text">{{ Str::rupiah($i['harga']) }}</p>
                                <a href="{{ route('produk.show', $i->id) }}" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- footer --}}

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
