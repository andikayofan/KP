@extends('layout/sidenav')

@section('title','Penerimaan Barang')

<head>
<style>

.form-control {
    width: 200px;
}

</style>
</head>

<body>
@section('container')

<form>
    <div class="container" style="margin-top: 50px; margin-left: 80px; width: 300%" >  
        <div class="card-body" style="background-color: grey;">
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Terima</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" >
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Asset</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" >
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Vendor</label>
                <div class="col-sm-10">
                <select class="form-control custom-select-sm" id="exampleFormControlSelect1">
                <option>Test1</option>
                <option>Test2</option>
                <option>Test3</option>
                <option>Test4</option>
                <option>Test5</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kode Barang</label>
                <div class="col-sm-10">
                <select class="form-control custom-select-sm" id="exampleFormControlSelect1">
                <option>Test1</option>
                <option>Test2</option>
                <option>Test3</option>
                <option>Test4</option>
                <option>Test5</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Barang</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" >
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kategori Barang</label>
                <div class="col-sm-10">
                <select class="form-control custom-select-sm" id="exampleFormControlSelect1">
                <option>Asset</option>
                <option>Peripheral</option>
                <option>Inventaris</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jumlah Pesan</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" >
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Satuan</label>
                <div class="col-sm-10">
                <select class="form-control custom-select-sm" id="exampleFormControlSelect1">
                <option>Unit</option>
                <option>Pcs</option>
                <option>Buah</option>
                <option>Test4</option>
                <option>Test5</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Pemesan Barang</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Nama Pemesan" >
                </div>
            </div>
            <a href="" class="btn btn-primary btn-block" style="">Input</a>
        </div>    
    </div>
@endsection
</body>