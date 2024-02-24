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
                        <a class="btn btn-info tombol" href="/admin"> Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- halaman login --}}
    <section id="login-pages">
        <div class="container">
            <div class="logo_big">
                <img src="../img/logo-icon/cctv_b2b.png" alt="big-logo">
            </div>
            <div class="bungkus-login">
                {{-- <p>Hanya administrator yang bisa login!</p> --}}
                {{-- @if (Session::has('failed'))
                    <div class="alert alert-danger role="alert">
                        {{ Session::get('failed')}}
                    </div>
                @endif --}}
                <form class="justify-content-center" action="{{ url('admin') }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control"
                                placeholder="Masukkan Nama Barang">
                        </div>
                        <div class="col-lg">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="kategori"> 
                                <option>CCTV</option>
                                <option>PABX</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control"
                                placeholder="Masukkan Harga Barang">
                        </div>
                        <div class="col-lg">
                            <label class="form-label">Deskripsi Barang</label>
                            <input type="text" name="description" class="form-control"
                                placeholder="Masukkan Deskripsi Barang">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label class="form-label">Foto Barang</label>
                            <input type="file" name="foto_barang" class="form-control">
                        </div>
                    </div>
                    <div class="d-grid gap-2 button-rwt pt-4 mt-2">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
