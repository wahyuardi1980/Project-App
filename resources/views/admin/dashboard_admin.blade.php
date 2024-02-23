<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../img/logo-icon/cctv_b2b.png" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark fixed">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="../img/logo-icon/cctv_b2b.png" alt=""
                    width="45" height="45" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/create">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- halaman dashboard admin --}}
    <section id="table-data">
        <div class="container">
            <div class="logo_big">
                <img src="../img/logo-icon/cctv_b2b.png"alt="big-logo">
            </div>

                @if (Session::has('success'))
                    <div class="alert alert-success role="alert">
                        {{ Session::get('success')}}
                    </div>
                @endif

            <div class="table-responsive">
                <table class="table table-dark table-bordered table-striped mt-5">
                    <thead>
                        <tr>
                            <td>NO</td>
                            <td>Nama Barang</td>
                            <td>Kategori</td>
                            <td>Harga</td>
                            <td>Deskripsi Barang</td>
                            <td>Gambar Barang</td>
                            <td colspan="2" class="text-center">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Camera 12 Megapixels</td>
                            <td>CCTV</td>
                            <td>Rp. 2.500.000</td>
                            <td>Dapat Berputar 360 derajat</td>
                            <td>img/src/fth.png</td>
                            <td class="text-center"><a class="btn btn-warning" href="#">Edit</a></td>
                            <td class="text-center"><a class="btn btn-danger" href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Camera 12 Megapixels</td>
                            <td>CCTV</td>
                            <td>Rp. 2.500.000</td>
                            <td>Dapat Berputar 360 derajat</td>
                            <td>img/src/fth.png</td>
                            <td class="text-center"><a class="btn btn-warning" href="#">Edit</a></td>
                            <td class="text-center"><a class="btn btn-danger" href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Camera 12 Megapixels</td>
                            <td>CCTV</td>
                            <td>Rp. 2.500.000</td>
                            <td>Dapat Berputar 360 derajat</td>
                            <td>img/src/fth.png</td>
                            <td class="text-center"><a class="btn btn-warning" href="#">Edit</a></td>
                            <td class="text-center"><a class="btn btn-danger" href="#">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
