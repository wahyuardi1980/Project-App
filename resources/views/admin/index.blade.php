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

                @if (Session::has('success_added'))
                    <div class="alert alert-success role="alert">
                        {{ Session::get('success_added')}}
                    </div>
                @endif
                
                {{-- kondisi ketika dihapus mendapatkan alert dari controller --}}
                @if (Session::has('sukses_dihapus'))
                    <div class="alert alert-warning  role="alert">
                        {{ Session::get('sukses_dihapus')}}
                    </div>
                @endif

                {{-- kondisi ketika data berhasil diedit atau diupdate akan mendapatkan alert dari controller --}}
                @if (Session::has('success_update'))
                    <div class="alert alert-success  role="alert">
                        {{ Session::get('success_update')}}
                    </div>
                @endif
                {{-- <div class="swal" data-swal="{{ session('sukses_dihapus') }}"></div> --}}
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
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($datadog->sortByDesc('created_at') as $k)
                            @php
                                $no++;
                            @endphp
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $k['nama_barang'] }}</td>
                                <td>{{ $k['kategori'] }}</td>
                                <td>{{ Str::rupiah($k['harga']) }}</td>
                                <td>{{ $k['description'] }}</td>
                                <td><img src="{{ asset('storage/uploads_image/'.$k->foto_barang) }}" alt="all foto yang diinput" width="100"></td>
                                <td class="text-center"><a class="btn btn-warning" href="/admin/{{ $k->id }}/edit">Edit</a></td>
                                <td class="text-center">
                                <form action="{{ route('admin.destroy', $k->id) }}" method="post">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const swal = $('.swal').data('swal');

        if (swal) {
            Swal.fire({
                'title': 'Success',
                'text': 'swal',
                'icon': 'success',
            })
        }

    </script> --}}

</body>

</html>
