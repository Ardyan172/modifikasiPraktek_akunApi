<!doctype html>
<html lang="en">
<head>
  <title>Akun Transaksi</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{ asset('material-dashboard-master') }}/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="{{ asset('foto_transaksi') }}/mickey.jpg" class="simple-text logo-mini" width="50">
          CT
        </a>
        <a href="" class="simple-text logo-normal">
          Creative Team
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>

      <!-- Content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- formulir untuk membuat transaksi baru -->
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Detail Transaksi</h4>
                  <p class="card-category">Data terbaru</p>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <h4 class="card-title">Detail Transaksi {{ $detailData->namaTransaksi }}</h4>
                      <h4 class="card-title">Tipe transaksi : {{ $detailData->tipeTransaksi }}</h4>
                      <h4 class="card-title">Waktu transaksi : {{ $detailData->waktuTransaksi }}</h4>
                      <h4 class="card-title">Jumlah transaksi : {{ $detailData->jumlahTransaksi }}</h4>
                    </div>

                    <div class="col-md-6">
                      <img src="{{ asset('foto_transaksi') }}/{{ $detailData->fotoTransaksi }}" width="50%" alt="Foto Transaksi">
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated {{ $detailData->updated_at }} minutes ago
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="/transaksi" class="btn btn-sm btn-danger">Kembali ke halaman sebelumnya</a>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, dibuat dengan <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> untuk sebuah web yang lebih baik
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>