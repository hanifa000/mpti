<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome Admin!</title>
    <link rel="icon" type="image/png" href="{{ asset('profil/img/logo.png') }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet"
        href="{{asset('admin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/dist/assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin/dist/assets/css/style.css">
    <!-- endinject -->
</head>

<body class="with-welcome-text">

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="{{route('admin.home')}}">
                <img src="{{ asset('profil/img/logo.png') }}" alt="Terrarium.qu Logo">
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{route('admin.home')}}">
                <img src="{{ asset('profil/img/logo.png') }}" alt="Terrarium.qu Logo">
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Hallo Admin, <span class="text-black fw-bold">Terarium</span></h1>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('admin/src/assets/images/faces/face8.png')}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('admin/src/assets/images/faces/face8.png')}}" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">Admin</p>
                  <p class="mb-1 mt-3 fw-semibold">Terrarium.qu</p>
                </div>
                
                <a class="dropdown-item" href="{{route('logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.home')}}">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('album.index')}}">
            <i class="mdi mdi-image-area menu-icon"></i>
            <span class="menu-title">Galeri</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('buy.index')}}">
            <i class="mdi mdi-cart-outline menu-icon"></i>
            <span class="menu-title">Pembelian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pesan.index')}}">
            <i class="mdi mdi-message-outline menu-icon"></i>
            <span class="menu-title">Pesan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('qris.index')}}">
          <i class="mdi mdi-image-edit-outline menu-icon"></i>
          <span class="menu-title">qris</span>
          </a>
        </li>
       
      </ul>
    </nav>

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Pembelian</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Telp</th>
                                                <th>Produk</th>
                                                <th>Jumlah</th>
                                                <th>Bukti bayar</th>
                                                <th>Menu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($buy as $item)
                                                <tr>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->telp }}</td>
                                                    <td>
                                                        @if ($item->produk == 'spesial-1')
                                                        Kit DIY Terrarium Tipe Spesial Edition (Rp. 100.000)
                                                        @elseif ($item->produk == 'spesial-2')
                                                        Kit DIY Terrarium Tipe Spesial Edition Tanpa Wadah Kaca (Rp. 90.000)
                                                        @elseif ($item->produk == 'premium-1')
                                                        Kit DIY Terrarium Tipe Premium (Rp. 75.000)
                                                        @elseif ($item->produk == 'premium-2')
                                                        Kit DIY Terrarium Tipe Premium Tanpa Wadah Kaca (Rp. 65.000)
                                                        @elseif ($item->produk == 'medium-1')
                                                        Kit DIY Terrarium Tipe Medium (Rp. 50.000)
                                                        @elseif ($item->produk == 'medium-2')
                                                        Kit DIY Terrarium Tipe Medium Tanpa Wadah Kaca (Rp. 40.000)
                                                        @elseif ($item->produk == 'standard-1')
                                                        Kit DIY Terrarium Tipe Standard (Rp. 25.000)
                                                        @elseif ($item->produk == 'standard-2')
                                                        Kit DIY Terrarium Tipe Standard Tanpa Wadah Kaca (Rp. 20.000)
                                                        @endif
                                                    </td>                                                    
                                                    <td>{{ $item->jumlah }}</td>
                                                    <td>
                                                        <img src="{{ asset('foto_bukti/' . $item->foto) }}" alt="foto_bukti" width="100">
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('buy.show', $item->id) }}" class="btn btn-light btn-sm">Detail</a>
                                                        <a href="{{ route('buy.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                                        <form action="{{ route('buy.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data?')" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
               
                    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        
        <!-- main-panel ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/dist/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/dist/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/dist/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/js/template.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/dist/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/dist/assets/js/dashboard.js') }}"></script>
    <!-- <script src="{{ asset('admin/dist/assets/js/Chart.roundedBarCharts.js') }}"></script> -->
    <!-- End custom js for this page-->
</body>

</html>
