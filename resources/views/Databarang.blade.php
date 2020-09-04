@extends('layout/sidenav')

@section('title','Data Stok Barang')

<body>
@section('container')
<div class="container" style="margin-top: 20px">
    <div class="table-responsive">
    <table class="table" style="background-color: ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Kategori Barang</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>IT-P-0049</td>
                <td>RAM Besar</td>
                <td>1</td>
                <td>PERIPHERAL</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>IT-P-0051</td>
                <td>RAM Sedang</td>
                <td>2</td>
                <td>PERIPHERAL</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>IT-P-0050</td>
                <td>RAM Kecil</td>
                <td>4</td>
                <td>PERIPHERAL</td>
            </tr>
        </tbody>

    </table>
    </div>
</div>

@endsection

</body>