<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Administrator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/logo-icon/cctv_b2b.png" />
    <link rel="stylesheet" href="css/style.css">
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
                        <a class="nav-link active" aria-disabled="true">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- halaman login --}}
    <section id="login-pages">
        <div class="container">
            <div class="logo_big">
                <img src="img/logo-icon/cctv_b2b.png"  alt="big-logo">
            </div>
            <div class="bungkus-login">
                @if (Session::has('warning'))
                    <div class="alert alert-warning role="alert">
                        {{ Session::get('warning')}}
                    </div>
                @endif
                <p>Hanya administrator yang bisa login!</p>
                @if (Session::has('failed'))
                    <div class="alert alert-danger role="alert">
                        {{ Session::get('failed')}}
                    </div>
                @endif
                <form class="justify-content-center" action="{{ route('login_proses') }}" method="POST">
                    @csrf 
                    <div class="row">
                        <div class="col-lg">
                            <label class="form-label">Username</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukkan Username" value="{{ Session::get('email') }}">
                        </div>
                        <div class="col-lg">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 button-rwt pt-4 mt-2">
                        <button class="btn btn-success" type="submit">Login</button>
                        <a class="btn btn-danger" href="{{'/'}}">Kembali</a>
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
