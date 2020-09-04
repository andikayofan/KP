<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/LTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  
<style>
#body-row {
        margin-left:0;
        margin-right:0;
    }
    #sidebar-container {
        min-height: 100vh;   
        background-color: #281F49;
        padding: 0;
    }


    .sidebar-expanded {
        width: 230px;
    }
    .sidebar-collapsed {
        width: 60px;
    }


    #sidebar-container .list-group a {
        height: 50px;
        color: white;
    }


    #sidebar-container .list-group .sidebar-submenu a {
        height: 45px;
        padding-left: 30px;
    }
    .sidebar-submenu {
        font-size: 0.75rem;
    }


    .sidebar-separator-title {
        background-color: #281F49;
        height: 35px;
    }
    .sidebar-separator {
        background-color: #281F49;
        height: 25px;
    }
    .logo-separator {
        background-color: #281F49;    
        height: 60px;
    }


    #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
      content: " \f0d7";
      font-family: FontAwesome;
      display: inline;
      text-align: right;
      padding-left: 10px;
    }

    #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
      content: " \f0da";
      font-family: FontAwesome;
      display: inline;
      text-align: right;
      padding-left: 10px;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #281F49">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{ url('/') }}">
    <span class="menu-collapsed" style="color: #F09D15; font-weight: bold">MONITORING INVENTORY</span>
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown d-sm-block d-md-none">
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Master Data</a>
            <a class="dropdown-item" href="#">Data Barang</a>
            <a class="dropdown-item" href="#">Data Software</a>
            <a class="dropdown-item" href="#">Data Laptop</a>
            <a class="dropdown-item" href="#">Report</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>


<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon align-items-end"></span>
                </div>
            </a>
            <div id="submenu1" class="collapse sidebar-submenu">
                <a href="{{ url('/pemesanan') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Pemesanan Barang</span>
                </a>
                <a href="{{ url('/persetujuan') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Menunggu Persetujuan</span>
                </a>
                <a href="{{ url('/disetujui') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Daftar Barang Telah Disetujui</span>
                </a>
                <a href="{{ url('/bdisetujui') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Daftar Barang Belum Disetujui</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <span class="menu-collapsed">Data Master</span>
                    <span class="submenu-icon align-items-end"></span>
                </div>
            </a>
            <div id="submenu2" class="collapse sidebar-submenu">
                <a href="{{ url('/inputmaster') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Master Barang</span>
                </a>
                <a href="{{ url('/inputvendor') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Master Vendor</span>
                </a>
                <a href="{{ route('vendor.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Data Vendor</span>
                </a>
            </div>       
            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <span class="menu-collapsed">Data Barang</span>
                    <span class="submenu-icon align-items-end"></span>
                </div>
            </a>
            <div id="submenu3" class="collapse sidebar-submenu">
                <a href="{{ url('/datastok') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Data Stok Barang</span>
                </a>
                <a href="{{ url('/penerimaanb') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-minus ml-auto"></span>
                    <span class="menu-collapsed">Penerimaan Barang</span>
                </a>
            </div>   
		    <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <span class="menu-collapsed">Data Software</span>
                </div>
            </a>  
			      <a href="#submenu5" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <span class="menu-collapsed">Data Laptop</span>
                </div>
            </a>  
			      <a href="#submenu6" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <span class="menu-collapsed">Report</span>
                </div>
            </a> 
        </ul>
    </div> <!-- End Sidebar -->
  
@yield('container')
	</div>

@stack('scriptdatatable')
</body>
</html>