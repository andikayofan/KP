@extends('layout/sidenav')

@section('title','Dasboard')

<body>
@section('container')
<div class="container" style="margin-top: 100px;">
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card" style="width: 20rem;">
      <img src="{{ url('/img/test.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-Title">Pemesanan Barang</h5>
        <a href="{{ url('/pemesanan') }}" class="btn btn-primary btn-block" style="">Check</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card" style="width: 20rem;">
      <img src="{{ url('/img/test.png') }}" class="card-img-top" alt="..">
      <div class="card-body">
        <h5 class="card-title">Menunggu Persetujuan</h5>
        <a href="{{ url('/persetujuan') }}" class="btn btn-primary btn-block" style="">Check</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card" style="width: 20rem;">
      <img src="{{ url('/img/test.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Daftar Barang Telah Disetujui</h5>
        <a href="{{ url('/disetujui') }}" class="btn btn-primary btn-block" style="">Check</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card" style="width: 20rem;">
      <img src="{{ url('/img/test.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Daftar Barang Belum Disetujui</h5>
        <a href="{{ url('/bdisetujui') }}" class="btn btn-primary btn-block" style="">Check</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
</body>
