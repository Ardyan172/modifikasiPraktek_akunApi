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
              <form action="/transaksi/transaksiBaru" method="post" enctype="multipart/form-data">
                <!-- arahkan ke url transaksi, TransaksiController lalu method store -->
                @csrf
                <div class="form-group">
                  <label for="namaTransaksi">Nama Transaksi</label>
                  <input type="text" name="namaTransaksi" class="@error('namaTransaksi') is-invalid @enderror form-control" id="namaTransaksi" placeholder="Laptop">
                  @error('namaTransaksi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="tipeTransaksi">Tipe Transaksi</label>
                  <select class="@error('tipeTransaksi') is-invalid @enderror form-control selectpicker" name="tipeTransaksi" data-style="btn btn-link" id="tipeTransaksi">
                    <option>Expense</option>
                    <option>Revenue</option>
                  </select>
                  @error('tipeTransaksi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="jumlahTransaksi">Jumlah Transaksi</label>
                  <input type="number" name="jumlahTransaksi" class="@error('jumlahTransaksi') is-invalid @enderror form-control" id="jumlahTransaksi" placeholder="1000">
                  @error('jumlahTransaksi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="@error('fotoTransaksi') is-invalid @enderror fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-raised">
                        <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" rel="nofollow" alt="Foto Transaksi">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                    <div>
                        <span class="btn btn-raised btn-round btn-default btn-file">
                            <span class="fileinput-new">Pilih Gambar</span>
                            <input type="file" name="fotoTransaksi" />
                        </span>
                    </div>
                    @error('fotoTransaksi')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Enter</button>
              </form>
            </div>
          </div>
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