<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail | Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="../img/logo-icon/cctv_b2b.png" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    {{-- main detail --}}
    <div id="detail" class="detail">
      <div class="container">
        <div class="logo_big">
                <img src="../img/logo-icon/cctv_b2b.png" alt="big-logo">
            </div>
        <div class="b-detail mb-5">
          <div class="row">
            <div class="col-lg">
              <img src="{{ asset('storage/uploads_image/'.$datadog->foto_barang) }}" alt="">
            </div>
            <div class="col-lg">
              <h1>Detail Produk</h1>
              <p><span>Nama Barang :</span> {{ $datadog->nama_barang }}</p>
              <p><span>Harga :</span> {{ Str::rupiah($datadog['harga']) }}</p>
              <p><span>Deskripsi :</span> {{ $datadog->description }}</p>
              <a href="https://api.whatsapp.com/send?phone=6282163784377" target="_blank" class="btn btn-lg"><i class="bi bi-telephone-fill"></i> <br>Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
