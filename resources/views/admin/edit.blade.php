<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../img/logo-icon/cctv_b2b.png" />
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark fixed">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="../../img/logo-icon/cctv_b2b.png" alt=""
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
                <img src="../../img/logo-icon/cctv_b2b.png" alt="big-logo">
            </div>
            <div class="bungkus-login">
                {{-- <p>Hanya administrator yang bisa login!</p> --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="justify-content-center" action="/admin/{{ $dp->id }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control"
                                placeholder="Masukkan Nama Barang" value="{{ $dp->nama_barang }}">
                        </div>
                        <div class="col-lg">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="kategori"> 
                            <option value="CCTV" {{ $dp->kategori == 'CCTV' ? 'selected' : '' }}>CCTV</option>
                            <option value="ALARM" {{ $dp->kategori == 'ALARM' ? 'selected' : '' }}>ALARM</option>
                            <option value="ACCESS_CONTROL" {{ $dp->kategori == 'ACCESS CONTROL' ? 'selected' : '' }}>ACCESS CONTROL</option>
                            <option value="FINGER_PRINT" {{ $dp->kategori == 'FINGER PRINT' ? 'selected' : '' }}>FINGER PRINT</option>
                            <option value="PABX" {{ $dp->kategori == 'PABX' ? 'selected' : '' }}>PABX</option>
                            <option value="VIDEO_WALL" {{ $dp->kategori == 'VIDEO WALL' ? 'selected' : '' }}>VIDEO WALL</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control"
                                placeholder="Masukkan Harga Barang" value="{{ $dp->harga }}">
                        </div>
                        <div class="col-lg">
                            <label class="form-label">Deskripsi Barang</label>
                            <input type="text" name="description" class="form-control"
                                placeholder="Masukkan Deskripsi Barang" value="{{ $dp->description }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        @if ($dp->foto_barang)
                            <img src="{{ asset('storage/uploads_image/'.$dp->foto_barang) }}" alt="">
                        @endif
                        <div class="col-lg">
                            <label class="form-label">Foto Barang</label>
                            <input type="file" name="foto_barang" class="form-control">
                            <small style="color: red">Jika ingin mengganti gambar silahkan upload disini!</small>
                            @error('foto_barang')
                                <small>{{ $message }}</small>
                            @enderror
                            
                        </div>
                    </div>
                    <div class="d-grid gap-2 button-rwt pt-4 mt-2">
                        <button class="btn btn-success" type="submit">Simpan Perubahan</button>
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
