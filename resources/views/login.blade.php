<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="RIQKSndmq5ESftWQdMigbXxJQfAafb3oeKrvS4mz">
  <meta name="author" content="Bambang Mahesthi, kidipridi@gmail.com">
  <meta name="description" content="Layanan Online Administrasi Kependudukan dan Pencatatan Sipil Kabupaten Mana Saja Boleh">
  <meta name="keywords" content="kartu keluarga, kk, ktp, ktp elektronik, ektp, e-ktp, kia, akta, akta kelahiran, akta kematian, akta perkawinan, akta perceraian, pindah, datang, surat pindah, surat rekomendasi kedatangan, adminduk, bambang mahesthi, kidi pridi">

  <link rel="icon" href="https://desa.dukcapil.online/assets/images/favicon-3312.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="https://desa.dukcapil.online/assets/images/favicon-3312.png">
  <link rel="shortcut icon" href="https://desa.dukcapil.online/assets/images/favicon-3312.png" type="image/x-icon" >

  <title>Login | Layanan Online Adminduk Kabupaten Mana Saja Boleh</title>

  <link rel="stylesheet" href="https://desa.dukcapil.online/assets/plugins/bootstrap/css/bootstrap.min.css?v=1.0">
  <link rel="stylesheet" href="https://desa.dukcapil.online/assets/css/style.min.css?v=1.0">
  <link rel="stylesheet" href="https://desa.dukcapil.online/assets/plugins/horizontal-menu/dropdown-effects/fade-down.min.css?v=1.0">
  <link rel="stylesheet" href="https://desa.dukcapil.online/assets/plugins/horizontal-menu/horizontalmenu.min.css?v=1.0">
  <link rel="stylesheet" href="https://desa.dukcapil.online/assets/fonts/font-awesome/font-awesome.min.css?v=1.0">
</head>

<body class="bg-account" style="background-color: #fff;">
  <div class="page">
    <div class="page-content">
      <div class="container text-center text-dark">
        <div class="row">
          <div class="col-lg-4 d-block mx-auto">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card rounded p-5">
                      <h1 class="mb-0 text-primary mb-2">Layanan Online</h1>
                      <h4 class="mb-0text-dark">Pendukung Pemanfaatan Data Kependudukan dan Pencatatan Sipil</h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="text-center mb-2">
                      <img src="https://desa.dukcapil.online/assets/images/logo-small-3312.png" class="" alt="">
                      <h4 class="text-dark font-weight-semibold">Disdukcapil Kabupaten Mana Saja Boleh</h4>
                    </div>
                    <p class="text-muted mt-6">Masukkan username dan password anda</p>
                    <form class="form-horizontal" method="POST" action="/login">
                      @csrf
                      <div class="input-group mb-3">
                        <span class="input-group-addon bg-white"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                      </div>
                      <div class="input-group mb-4">
                        <span class="input-group-addon bg-white"><i class="fa fa-unlock-alt"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://desa.dukcapil.online/assets/js/jquery-3.2.1.min.js?v=1.0" type="text/javascript"></script>
  <script src="https://desa.dukcapil.online/assets/plugins/bootstrap/popper.min.js?v=1.0" type="text/javascript"></script>
  <script src="https://desa.dukcapil.online/assets/plugins/bootstrap/js/bootstrap.min.js?v=1.0" type="text/javascript"></script>
  <script src="https://desa.dukcapil.online/assets/js/jquery.matchHeight-min.js?v=1.0" type="text/javascript"></script>
  <script src="https://desa.dukcapil.online/assets/js/custom.min.js?v=1.0" type="text/javascript"></script>

  </body>

</html>
