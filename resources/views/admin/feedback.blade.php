<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Feedback</title>
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
                        <a class="nav-link" href="/admin">Kembali</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- halaman dashboard admin --}}
    <section id="data-feedback">
        <div class="container">
            <div class="logo_big_feedback">
                <img src="../img/logo-icon/cctv_b2b.png"alt="big-logo">
            </div>

            <div class="table-responsive">
                
                {{-- kondisi ketika dihapus mendapatkan alert dari controller --}}
                @if (Session::has('sukses_dihapus'))
                    <div class="alert alert-warning  role="alert">
                        {{ Session::get('sukses_dihapus')}}
                    </div>
                @endif

                {{-- kondisi ketika data berhasil diedit atau diupdate akan mendapatkan alert dari controller --}}
                {{-- @if (Session::has('success_update'))
                    <div class="alert alert-success  role="alert">
                        {{ Session::get('success_update')}}
                    </div>
                @endif --}}
                {{-- <div class="swal" data-swal="{{ session('sukses_dihapus') }}"></div> --}}
                    <table class="table table-dark table-bordered table-striped mt-5">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nama Pengirim</td>
                            <td>Email</td>
                            <td>Pesan</td>
                            <td>Dibuat</td>
                            <td colspan="2" class="text-center">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($msg->sortByDesc('created_at') as $j)
                            @php
                                $no++;
                            @endphp
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $j['nama_pengirim'] }}</td>
                                <td>{{ $j['email'] }}</td>
                                <td>{{ $j['pesan'] }}</td>
                                <td>{{ $j['created_at'] }}</td>
                                <td class="text-center">
                                <form action="{{ route('admin.feedback.hapusmsg', $j->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger confirm-delete">Delete</i></button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
